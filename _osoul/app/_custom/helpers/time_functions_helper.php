<?php 
  
function time_ago($before){
    $time = Carbon\Carbon::createFromTimeStamp(strtotime($before))->diffForHumans();
    // $time = Carbon::createFromTimeStamp(strtotime($before))->diffForHumans();
    return $time;
}

if ( ! function_exists('bad_unix_to_format')){    
    function bad_unix_to_format( $unix_time= null ,$format="Y-F-d g:i:s a"){
        $unix_time = ($unix_time==null) ? time() : $unix_time;
        $time_now=date($format, $unix_time );//generates time in a string fasion...
        return $time_now;
    }
}

/**
 * Unix to "Human"
 * 
 * Formats Unix timestamp to the following prototype: YYYY-MM-DD HH:MM:SS AM/PM
 * EX: 2006-08-21 11:35 PM
 *
 * @access	public
 * @param	integer Unix timestamp
 * @param	bool	whether to show seconds
 * @param	string	format: us or euro means 12 hour in day or 24 hour
 * @return	string
 */
if ( ! function_exists('unix_to_human')){
    function unix_to_human($time = '', $seconds = FALSE, $fmt = 'euro'){
	$r  = date('Y', $time).'-'.date('m', $time).'-'.date('d', $time).' ';
	if ($fmt == 'us'){ $r .= date('h', $time).':'.date('i', $time);
                    }else{ $r .= date('H', $time).':'.date('i', $time); }
                    if ($seconds){ $r .= ':'.date('s', $time); }
                    if ($fmt == 'us'){ $r .= ' '.date('A', $time); }return $r;
    }
}

/**
 * Convert "human" date to GMT
 * must be formatted as   YYYY-MM-DD HH:MM:SS AM/PM  EX:"2014-05-06 01:01:01"
 * Reverses the above process
 *
 * @access	public
 * @param	string	format: us or euro
 * @return	integer
 */
if ( ! function_exists('human_to_unix')){
    function human_to_unix($datestr = ''){
            if ($datestr == ''){ return FALSE; }
	$datestr = trim($datestr);
	$datestr = preg_replace("/\040+/", ' ', $datestr);
            if ( ! preg_match('/^[0-9]{2,4}\-[0-9]{1,2}\-[0-9]{1,2}\s[0-9]{1,2}:[0-9]{1,2}(?::[0-9]{1,2})?(?:\s[AP]M)?$/i', $datestr))
		{ return FALSE; }
            $split = explode(' ', $datestr);
            $ex = explode("-", $split['0']);
            $year  = (strlen($ex['0']) == 2) ? '20'.$ex['0'] : $ex['0'];
            $month = (strlen($ex['1']) == 1) ? '0'.$ex['1']  : $ex['1'];
            $day   = (strlen($ex['2']) == 1) ? '0'.$ex['2']  : $ex['2'];
            $ex = explode(":", $split['1']);
            $hour = (strlen($ex['0']) == 1) ? '0'.$ex['0'] : $ex['0'];
            $min  = (strlen($ex['1']) == 1) ? '0'.$ex['1'] : $ex['1'];
            if (isset($ex['2']) && preg_match('/[0-9]{1,2}/', $ex['2'])){
                    $sec  = (strlen($ex['2']) == 1) ? '0'.$ex['2'] : $ex['2'];
            }else{  // Unless specified, seconds get set to zero.
	$sec = '00';
            }
            if (isset($split['2'])){
                    $ampm = strtolower($split['2']);
                    if (substr($ampm, 0, 1) == 'p' AND $hour < 12)
                            $hour = $hour + 12;
                            if (substr($ampm, 0, 1) == 'a' AND $hour == 12)
                            $hour =  '00';
                            if (strlen($hour) == 1)
                            $hour = '0'.$hour;
            }
            return mktime($hour, $min, $sec, $month, $day, $year);
    }
}

if ( ! function_exists('bad_time_now')){    
    function bad_time_now($format="l jS \of F Y h:i:s A"){
        $time_now=date($format, time() );//generates time in a string fasion...
        return $time_now;
    }
}

/**
 * takes time and format
 * returns string of the time
 */
if ( ! function_exists('bad_render_time')){    
    function bad_render_time( $time_string, $format="l jS \of F Y h:i:s A"){
        $after_render = date( $format , strtotime($time_string) );
        return $after_render;
    }
}


if ( ! function_exists('bad_days_in_month')){    
/*
 * days_in_month($month, $year)
 * Returns the number of days in a given month and year, taking into account leap years.
 *
 * $month: numeric month (integers 1-12)
 * $year: numeric year (any integer)
 *
 * Prec: $month is an integer between 1 and 12, inclusive, and $year is an integer.
 * Post: none
 */
        function bad_days_in_month($month, $year){
            // calculate number of days in a month
            return ($month==2) ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year % 400 ? 28 : 29))) 
                                        : ( ($month - 1) % 7 % 2 ? 30 : 31 );
        }
}

if ( ! function_exists('bad_is_leap_year')){    
        function bad_is_leap_year($year){
            return bad_days_in_month(2,$year)==29 ? true : false; 
        }
}

    /**
     *  input birthday date format -> Y-m-d 
     */
if ( ! function_exists('bad_daysLeftForBirthday')){    
    function bad_daysLeftForBirthday($day_of_birthdate){

        /* input birthday date format -> Y-m-d */
        list($y, $m, $d) = explode('-',$day_of_birthdate);
        $nowdate = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
        $nextbirthday = mktime(0,0,0,$m, $d, date("Y"));

        if ($nextbirthday<$nowdate)
            $nextbirthday=$nextbirthday+(60*60*24*365);
            $daycount=intval(($nextbirthday-$nowdate)/(60*60*24));
            return $daycount;
    }
}

//date must be in the formate "y-m-d" ex:'1990-10-11'
//format can be changed like EX: %a
if ( ! function_exists('bad_difference_in_days')){    
        function difference_between_dates($date1,$date2,$format = '%R %a days'){
            $datetime1 = date_create($date1);
            $datetime2 = date_create($date2);
            $interval = date_diff($datetime1, $datetime2);
            return $interval->format($format);
        }
}

//calculation number of days until birthday
//date are in the format of year-month-day
function bad_get_from_birth_date($year,$month,$day, 
                                $hour=0 , $minute = 0, $seconds = 0){
    $date1 = bad_render_time("$year-$month-$day","Y-m-d");
    $date2 = bad_time_now("Y-m-d");
    $return["days"] = bad_difference_in_days($date1, $date2,"%a");
    $return['year'] = floor($return['days'] / 365);
    $return['month'] = floor($return['days']/30);
    
    $hour_now = bad_time_now("H");
    $return['hour'] = floor($return['days']*12)+$hour_now;
    
    $minutes_now = $hour_now*60 + bad_time_now("i");
    $return['minute'] = floor($return['days']*12*60)+$minutes_now;
    
    $seconds_now = $minutes_now*60 + bad_time_now("s");
    $return['second'] = floor($return['days']*12*60*60)+$seconds_now;
    return ($return);
}

/**
 * check if day exists or not...
 * date must be in integer form...
 */
if ( ! function_exists('bad_check_date')){    
        function bad_checkdate ( $month , $day , $year ){
            return checkdate ( $month , $day , $year );
        }
}

if ( ! function_exists('generate_calendar')){    
# PHP Calendar (version 2.3), written by Keith Devens
function generate_calendar($year, $month, $days = array(), $day_name_length = 3, $month_href = NULL, $first_day = 0, $pn = array()){
    $first_of_month = gmmktime(0,0,0,$month,1,$year);

    #remember that mktime will automatically correct if invalid dates are entered
    # for instance, mktime(0,0,0,12,32,1997) will be the date for Jan 1, 1998
    # this provides a built in "rounding" feature to generate_calendar()

    $day_names = array(); #generate all the day names according to the current locale
    for($n=0,$t=(3+$first_day)*86400; $n<7; $n++,$t+=86400) #January 4, 1970 was a Sunday
        $day_names[$n] = ucfirst(gmstrftime('%A',$t)); #%A means full textual day name

    list($month, $year, $month_name, $weekday) = explode(',',gmstrftime('%m,%Y,%B,%w',$first_of_month));
    $weekday = ($weekday + 7 - $first_day) % 7; #adjust for $first_day
    $title   = htmlentities(ucfirst($month_name)).'&nbsp;'.$year;  #note that some locales don't capitalize month and day names

    #Begin calendar. Uses a real <caption>. See http://diveintomark.org/archives/2002/07/03
    @list($p, $pl) = each($pn); @list($n, $nl) = each($pn); #previous and next links, if applicable
    if($p) $p = '<span class="calendar-prev">'.($pl ? '<a href="'.htmlspecialchars($pl).'">'.$p.'</a>' : $p).'</span>&nbsp;';
    if($n) $n = '&nbsp;<span class="calendar-next">'.($nl ? '<a href="'.htmlspecialchars($nl).'">'.$n.'</a>' : $n).'</span>';
    $calendar = '<table class="calendar">'."\n".
        '<caption class="calendar-month">'.$p.($month_href ? '<a href="'.htmlspecialchars($month_href).'">'.$title.'</a>' : $title).$n."</caption>\n<tr>";

    if($day_name_length){ #if the day names should be shown ($day_name_length > 0)
        #if day_name_length is >3, the full name of the day will be printed
        foreach($day_names as $d)
            $calendar .= '<th abbr="'.htmlentities($d).'">'.htmlentities($day_name_length < 4 ? substr($d,0,$day_name_length) : $d).'</th>';
        $calendar .= "</tr>\n<tr>";
    }
    if($weekday > 0) $calendar .= '<td colspan="'.$weekday.'">&nbsp;</td>'; #initial 'empty' days
    for($day=1,$days_in_month=gmdate('t',$first_of_month); $day<=$days_in_month; $day++,$weekday++){
        if($weekday == 7){
            $weekday   = 0; #start a new week
            $calendar .= "</tr>\n<tr>";
        }
        if(isset($days[$day]) and is_array($days[$day])){
            @list($link, $classes, $content) = $days[$day];
            if(is_null($content))  $content  = $day;
            $calendar .= '<td'.($classes ? ' class="'.htmlspecialchars($classes).'">' : '>').
                ($link ? '<a href="'.htmlspecialchars($link).'">'.$content.'</a>' : $content).'</td>';
        }
        else $calendar .= "<td>$day</td>";
    }
    if($weekday != 7) $calendar .= '<td colspan="'.(7-$weekday).'">&nbsp;</td>'; #remaining "empty" days

    return $calendar."</tr>\n</table>\n";//<table has class calendar...
}
//generate_calendar(2010, 12, 16,3,NULL,0,15, $first_of_month, $day_names, $day_names[$n]);
//generate_calendar($year, $month, $days,$day_name_length,$month_href,$first_day,$pn);
//generate_calendar($year, $month, $days = array(), $day_name_length = 3, $month_href = NULL, $first_day = 0, $pn = array())
//---------------------------------------------------How to use------------------------------------//
//$val = generate_calendar(2000, 5,16,3,base_url(),0,15);
//echo($val);
}

if ( ! function_exists('my_cal_days_in_month')){    
//count specific days in a month like how many satureday in a month or 
//how many mondays in a month
//0 Sunday, 1 Monday, 2 Tue , 3 Wed , 4. Thu , 5. Fri , 6. Sat
function my_cal_days_in_month($year,$month,$calday="1"){
    // calculate total number of occurance in this month
    $num = cal_days_in_month(CAL_GREGORIAN, $month, $year); // days in month
    $dayofweek = date( "w", mktime(0, 0, 0, $month, 1, $year));    
    $adddays=0;
    if($calday > $dayofweek )
            $adddays=1 + $calday - $dayofweek;
    else if($calday < $dayofweek )
            $adddays=1 + 7 + ($calday - $dayofweek );
    $remainingdays=$num-$adddays;
    $leavesnum=1+intval($remainingdays / 7);
    return $leavesnum;
}
//echo my_cal_days_in_month(2000,6,4);
}



function isJLeapYear($JYear) { //determine if the year is a leap year or not...
    if ( ((7 * $JYear + 1) % 19) < 7 )
        return true;
    else
        return false;
}




// if ( ! function_exists('ago')){
    // function ago($time){
//         $time = strtotime($time_string);
//         err($time);
//         $obj = new \Carbon\Carbon::createFromTimeStamp($time);
//         $human_time = $obj->diffForHumans();
//         return $human_time;
        // $obj = \Carbon\Carbon::createFromTimeStamp(strtotime($time)->diffForHumans();
        // return $obj;
    // }
// }


    
?>