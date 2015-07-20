<?php

/*
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Carbon;

use DateTime;
use DateTimeZone;
use InvalidArgumentException;

/**
 * A simple API extension for DateTime
 *
 * @property      integer $year
 * @property      integer $month
 * @property      integer $day
 * @property      integer $hour
 * @property      integer $minute
 * @property      integer $second
 * @property      integer $timestamp seconds since the Unix Epoch
 * @property-read integer $dayOfWeek 0 (for Sunday) through 6 (for Saturday)
 * @property-read integer $dayOfYear 0 through 365
 * @property-read integer $weekOfYear ISO-8601 week number of year, weeks starting on Monday
 * @property-read integer $daysInMonth number of days in the given month
 * @property-read integer $age does a diffInYears() with default parameters
 * @property-read integer $quarter the quarter of this instance, 1 - 4
 * @property-read integer $offset the timezone offset in seconds from UTC
 * @property-read integer $offsetHours the timezone offset in hours from UTC
 * @property-read boolean $dst daylight savings time indicator, true if DST, false otherwise
 * @property-read boolean $local checks if the timezone is local, true if local, false otherwise
 * @property-read boolean $utc checks if the timezone is UTC, true if UTC, false otherwise
 * @property-read string  $timezoneName
 * @property-read string  $tzName
 *
 * @property-read  DateTimeZone        $timezone the current timezone
 * @property-read  DateTimeZone        $tz alias of timezone
 * @property-write DateTimeZone|string $timezone the current timezone
 * @property-write DateTimeZone|string $tz alias of timezone
 *
 */
class Carbon extends DateTime
{
   /**
    * The day constants
    */
   const SUNDAY    = 0;
   const MONDAY    = 1;
   const TUESDAY   = 2;
   const WEDNESDAY = 3;
   const THURSDAY  = 4;
   const FRIDAY    = 5;
   const SATURDAY  = 6;

   /**
   * Names of days of the week.
   *
   * @var array
   */
   private static $days = array(
      self::SUNDAY    => 'Sunday',
      self::MONDAY    => 'Monday',
      self::TUESDAY   => 'Tuesday',
      self::WEDNESDAY => 'Wednesday',
      self::THURSDAY  => 'Thursday',
      self::FRIDAY    => 'Friday',
      self::SATURDAY  => 'Saturday'
   );

    /**
    * Terms used to detect if a time passed is a relative date for testing purposes
    *
    * @var array
    */
    private static $relativeKeywords = array(
      'this',
      'next',
      'last',
      'tomorrow',
      'yesterday',
      '+',
      '-',
      'first',
      'last',
      'ago'
    );

   /**
    * Number of X in Y
    */
   const MONTHS_PER_YEAR    = 12;
   const WEEKS_PER_YEAR     = 52;
   const DAYS_PER_WEEK      = 7;
   const HOURS_PER_DAY      = 24;
   const MINUTES_PER_HOUR   = 60;
   const SECONDS_PER_MINUTE = 60;

   /**
    * A test Carbon instance to be returned when now instances are created
    *
    * @var Carbon
    */
   protected static $testNow;

   /**
    * Creates a DateTimeZone from a string or a DateTimeZone
    *
    * @param  DateTimeZone|string $object
    *
    * @return DateTimeZone
    *
    * @throws InvalidArgumentException
    */
   protected static function safeCreateDateTimeZone($object)
   {
      if ($object instanceof DateTimeZone) {
         return $object;
      }

      $tz = @timezone_open((string) $object);

      if ($tz === false) {
         throw new InvalidArgumentException('Unknown or bad timezone ('.$object.')');
      }

      return $tz;
   }

   ///////////////////////////////////////////////////////////////////
   //////////////////////////// CONSTRUCTORS /////////////////////////
   ///////////////////////////////////////////////////////////////////

   /**
    * Create a new Carbon instance.
    *
    * Please see the testing aids section (specifically static::setTestNow())
    * for more on the possibility of this constructor returning a test instance.
    *
    * @param string              $time
    * @param DateTimeZone|string $tz
    */
   public function __construct($time = null, $tz = null)
   {
      // If the class has a test now set and we are trying to create a now()
      // instance then override as required
      if (static::hasTestNow() && (empty($time) || $time === 'now' || self::hasRelativeKeywords($time))) {
	 $testInstance = clone static::getTestNow();
	 if (self::hasRelativeKeywords($time)) {
	     $testInstance->modify($time);
	 }

	 //shift the time according to the given time zone
	 if ($tz !== NULL && $tz != static::getTestNow()->tz) {
	     $testInstance->setTimezone($tz);
	 } else {
	     $tz = $testInstance->tz;
	 }

         $time = $testInstance->toDateTimeString();
      }

      if ($tz !== null) {
         parent::__construct($time, self::safeCreateDateTimeZone($tz));
      } else {
         parent::__construct($time);
      }
   }

   /**
    * Create a Carbon instance from a DateTime one
    *
    * @param  DateTime $dt
    *
    * @return Carbon
    */
   public static function instance(DateTime $dt)
   {
      return new static($dt->format('Y-m-d H:i:s'), $dt->getTimeZone());
   }

   /**
    * Create a carbon instance from a string.  This is an alias for the
    * constructor that allows better fluent syntax as it allows you to do
    * Carbon::parse('Monday next week')->fn() rather than
    * (new Carbon('Monday next week'))->fn()
    *
    * @param string              $time
    * @param DateTimeZone|string $tz
    *
    * @return Carbon
    */
   public static function parse($time = null, $tz = null)
   {
      return new static($time, $tz);
   }

   /**
    * Get a Carbon instance for the current date and time
    *
    * @param  DateTimeZone|string $tz
    *
    * @return Carbon
    */
   public static function now($tz = null)
   {
      return new static(null, $tz);
   }

   /**
    * Create a Carbon instance for today
    *
    * @param  DateTimeZone|string $tz
    *
    * @return Carbon
    */
   public static function today($tz = null)
   {
      return static::now($tz)->startOfDay();
   }

   /**
    * Create a Carbon instance for tomorrow
    *
    * @param  DateTimeZone|string $tz
    *
    * @return Carbon
    */
   public static function tomorrow($tz = null)
   {
      return static::today($tz)->addDay();
   }

   /**
    * Create a Carbon instance for yesterday
    *
    * @param  DateTimeZone|string $tz
    *
    * @return Carbon
    */
   public static function yesterday($tz = null)
   {
      return static::today($tz)->subDay();
   }

   /**
    * Create a new Carbon instance from a specific date and time.
    *
    * If any of $year, $month or $day are set to null their now() values
    * will be used.
    *
    * If $hour is null it will be set to its now() value and the default values
    * for $minute and $second will be their now() values.
    * If $hour is not null then the default values for $minute and $second
    * will be 0.
    *
    * @param  integer             $year
    * @param  integer             $month
    * @param  integer             $day
    * @param  integer             $hour
    * @param  integer             $minute
    * @param  integer             $second
    * @param  DateTimeZone|string $tz
    *
    * @return Carbon
    */
   public static function create($year = null, $month = null, $day = null, $hour = null, $minute = null, $second = null, $tz = null)
   {
      $year = ($year === null) ? date('Y') : $year;
      $month = ($month === null) ? date('n') : $month;
      $day = ($day === null) ? date('j') : $day;

      if ($hour === null) {
         $hour = date('G');
         $minute = ($minute === null) ? date('i') : $minute;
         $second = ($second === null) ? date('s') : $second;
      } else {
         $minute = ($minute === null) ? 0 : $minute;
         $second = ($second === null) ? 0 : $second;
      }

      return self::createFromFormat('Y-n-j G:i:s', sprintf('%s-%s-%s %s:%02s:%02s', $year, $month, $day, $hour, $minute, $second), $tz);
   }

   /**
    * Create a Carbon instance from just a date. The time portion is set to now.
    *
    * @param  integer             $year
    * @param  integer             $month
    * @param  integer             $day
    * @param  DateTimeZone|string $tz
    *
    * @return Carbon
    */
   public static function createFromDate($year = null, $month = null, $day = null, $tz = null)
   {
      return self::create($year, $month, $day, null, null, null, $tz);
   }

   /**
    * Create a Carbon instance from just a time. The date portion is set to today.
    *
    * @param  integer             $hour
    * @param  integer             $minute
    * @param  integer             $second
    * @param  DateTimeZone|string $tz
    *
    * @return Carbon
    */
   public static function createFromTime($hour = null, $minute = null, $second = null, $tz = null)
   {
      return self::create(null, null, null, $hour, $minute, $second, $tz);
   }

   /**
    * Create a Carbon instance from a specific format
    *
    * @param  string              $format
    * @param  string              $time
    * @param  DateTimeZone|string $tz
    *
    * @return Carbon
    *
    * @throws InvalidArgumentException
    */
   public static function createFromFormat($format, $time, $tz = null)
   {
      if ($tz !== null) {
         $dt = parent::createFromFormat($format, $time, self::safeCreateDateTimeZone($tz));
      } else {
         $dt = parent::createFromFormat($format, $time);
      }

      if ($dt instanceof DateTime) {
         return self::instance($dt);
      }

      $errors = static::getLastErrors();
      throw new InvalidArgumentException(implode(PHP_EOL, $errors['errors']));
   }

   /**
    * Create a Carbon instance from a timestamp
    *
    * @param  integer             $timestamp
    * @param  DateTimeZone|string $tz
    *
    * @return Carbon
    */
   public static function createFromTimestamp($timestamp, $tz = null)
   {
      return self::now($tz)->setTimestamp($timestamp);
   }