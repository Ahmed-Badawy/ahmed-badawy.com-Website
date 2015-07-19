<?php 


class Minify_HTML {
		/**
		* @var boolean
		*/
		protected $_jsCleanComments = true;
		/**
		* "Minify" an HTML page
		*
		* @param string $html
		*
		* @param array $options
		*
		* 'cssMinifier' : (optional) callback function to process content of STYLE
		* elements.
		*
		* 'jsMinifier' : (optional) callback function to process content of SCRIPT
		* elements. Note: the type attribute is ignored.
		*
		* 'xhtml' : (optional boolean) should content be treated as XHTML1.0? If
		* unset, minify will sniff for an XHTML doctype.
		*
		* @return string
		*/
		public static function minify($html, $options = array()) {
		$min = new self($html, $options);
		return $min->process();
		}
		/**
		* Create a minifier object
		*
		* @param string $html
		*
		* @param array $options
		*
		* 'cssMinifier' : (optional) callback function to process content of STYLE
		* elements.
		*
		* 'jsMinifier' : (optional) callback function to process content of SCRIPT
		* elements. Note: the type attribute is ignored.
		*
		* 'jsCleanComments' : (optional) whether to remove HTML comments beginning and end of script block
		*
		* 'xhtml' : (optional boolean) should content be treated as XHTML1.0? If
		* unset, minify will sniff for an XHTML doctype.
		*/
		public function __construct($html, $options = array())
		{
		$this->_html = str_replace("\r\n", "\n", trim($html));
		if (isset($options['xhtml'])) {
			$this->_isXhtml = (bool)$options['xhtml'];
		}
		if (isset($options['cssMinifier'])) {
			$this->_cssMinifier = $options['cssMinifier'];
		}
		if (isset($options['jsMinifier'])) {
			$this->_jsMinifier = $options['jsMinifier'];
		}
		if (isset($options['jsCleanComments'])) {
			$this->_jsCleanComments = (bool)$options['jsCleanComments'];
		}
		}
		/**
		* Minify the markeup given in the constructor
		*
		* @return string
		*/
		public function process()
		{
		if ($this->_isXhtml === null) {
		$this->_isXhtml = (false !== strpos($this->_html, '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML'));
		}
		$this->_replacementHash = 'MINIFYHTML' . md5($_SERVER['REQUEST_TIME']);
		$this->_placeholders = array();
		// replace SCRIPTs (and minify) with placeholders
		$this->_html = preg_replace_callback(
		'/(\\s*)<script(\\b[^>]*?>)([\\s\\S]*?)<\\/script>(\\s*)/i'
		,array($this, '_removeScriptCB')
		,$this->_html);
		// replace STYLEs (and minify) with placeholders
		$this->_html = preg_replace_callback(
		'/\\s*<style(\\b[^>]*>)([\\s\\S]*?)<\\/style>\\s*/i'
		,array($this, '_removeStyleCB')
		,$this->_html);
		// remove HTML comments (not containing IE conditional comments).
		$this->_html = preg_replace_callback(
		'/<!--([\\s\\S]*?)-->/'
		,array($this, '_commentCB')
		,$this->_html);
		// replace PREs with placeholders
		$this->_html = preg_replace_callback('/\\s*<pre(\\b[^>]*?>[\\s\\S]*?<\\/pre>)\\s*/i'
		,array($this, '_removePreCB')
		,$this->_html);
		// replace TEXTAREAs with placeholders
		$this->_html = preg_replace_callback(
		'/\\s*<textarea(\\b[^>]*?>[\\s\\S]*?<\\/textarea>)\\s*/i'
		,array($this, '_removeTextareaCB')
		,$this->_html);
		// trim each line.
		// @todo take into account attribute values that span multiple lines.
		$this->_html = preg_replace('/^\\s+|\\s+$/m', '', $this->_html);
		// remove ws around block/undisplayed elements
		$this->_html = preg_replace('/\\s+(<\\/?(?:area|base(?:font)?|blockquote|body'
		.'|caption|center|col(?:group)?|dd|dir|div|dl|dt|fieldset|form'
		.'|frame(?:set)?|h[1-6]|head|hr|html|legend|li|link|map|menu|meta'
		.'|ol|opt(?:group|ion)|p|param|t(?:able|body|head|d|h||r|foot|itle)'
		.'|ul)\\b[^>]*>)/i', '$1', $this->_html);
		// remove ws outside of all elements
		$this->_html = preg_replace(
		'/>(\\s(?:\\s*))?([^<]+)(\\s(?:\s*))?</'
		,'>$1$2$3<'
		,$this->_html);
		// use newlines before 1st attribute in open tags (to limit line lengths)
		$this->_html = preg_replace('/(<[a-z\\-]+)\\s+([^>]+>)/i', "$1\n$2", $this->_html);
		// fill placeholders
		$this->_html = str_replace(
		array_keys($this->_placeholders)
		,array_values($this->_placeholders)
		,$this->_html
		);
		// issue 229: multi-pass to catch scripts that didn't get replaced in textareas
		$this->_html = str_replace(
		array_keys($this->_placeholders)
		,array_values($this->_placeholders)
		,$this->_html
		);
		return $this->_html;
		}
		protected function _commentCB($m)
		{
		return (0 === strpos($m[1], '[') || false !== strpos($m[1], '<!['))
		? $m[0]
		: '';
		}
		protected function _reservePlace($content)
		{
		$placeholder = '%' . $this->_replacementHash . count($this->_placeholders) . '%';
		$this->_placeholders[$placeholder] = $content;
		return $placeholder;
		}
		protected $_isXhtml = null;
		protected $_replacementHash = null;
		protected $_placeholders = array();
		protected $_cssMinifier = null;
		protected $_jsMinifier = null;
		protected function _removePreCB($m)
		{
		return $this->_reservePlace("<pre{$m[1]}");
		}
		protected function _removeTextareaCB($m)
		{
		return $this->_reservePlace("<textarea{$m[1]}");
		}
		protected function _removeStyleCB($m)
		{
		$openStyle = "<style{$m[1]}";
		$css = $m[2];
		// remove HTML comments
		$css = preg_replace('/(?:^\\s*<!--|-->\\s*$)/', '', $css);
		// remove CDATA section markers
		$css = $this->_removeCdata($css);
		// minify
		$minifier = $this->_cssMinifier
		? $this->_cssMinifier
		: 'trim';
		$css = call_user_func($minifier, $css);
		return $this->_reservePlace($this->_needsCdata($css)
		? "{$openStyle}/*<![CDATA[*/{$css}/*]]>*/</style>"
		: "{$openStyle}{$css}</style>"
		);
		}
		protected function _removeScriptCB($m)
		{
		$openScript = "<script{$m[2]}";
		$js = $m[3];
		// whitespace surrounding? preserve at least one space
		$ws1 = ($m[1] === '') ? '' : ' ';
		$ws2 = ($m[4] === '') ? '' : ' ';
		// remove HTML comments (and ending "//" if present)
		if ($this->_jsCleanComments) {
		$js = preg_replace('/(?:^\\s*<!--\\s*|\\s*(?:\\/\\/)?\\s*-->\\s*$)/', '', $js);
		}
		// remove CDATA section markers
		$js = $this->_removeCdata($js);
		// minify
		$minifier = $this->_jsMinifier
		? $this->_jsMinifier
		: 'trim';
		$js = call_user_func($minifier, $js);
		return $this->_reservePlace($this->_needsCdata($js)
		? "{$ws1}{$openScript}/*<![CDATA[*/{$js}/*]]>*/</script>{$ws2}"
		: "{$ws1}{$openScript}{$js}</script>{$ws2}"
		);
		}
		protected function _removeCdata($str)
		{
		return (false !== strpos($str, '<![CDATA['))
		? str_replace(array('<![CDATA[', ']]>'), '', $str)
		: $str;
		}
		protected function _needsCdata($str)
		{
		return ($this->_isXhtml && preg_match('/(?:[<&]|\\-\\-|\\]\\]>)/', $str));
		}
}













	if(defined('STDIN'))
{
$shortops = 'sxvoc';
$longopts = array('stats', 'extra', 'help', 'version', 'overwrite', 'no-comments');
$options = getopt($shortops, $longopts);
if(array_key_exists('help', $options))
{
echo "Usage: " . $GLOBALS['argv'][0] . " [OPTION]... [FILE]\n";
echo "Reduce the filesize of an HTML document by removing unnecessary whitespace.\n";
echo "\n";
echo "-c, --no-comments removes HTML comments\n";
echo "-o, --overwrite overwrite input file with compressed version\n";
echo "-s, --stats output filesize savings calculation\n";
echo "-x, --extra perform extra (possibly unsafe) compression operations\n";
echo " --help display this help and exit\n";
echo "-v, --version print version information and exit\n";
echo "\n";
echo "Report bugs to <tylerhall@gmail.com>.\n";
exit;
}
if(array_key_exists('v', $options) || array_key_exists('version', $options))
{
echo "HTML Compressor 1.0.0\n";
echo "<http://github.com/tylerhall/html-compressor/>\n";
echo "\n";
echo "This is free software; see the source for copying conditions. There is NO\n";
echo "warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.\n";
exit;
}
if($GLOBALS['argc'] > 1 && is_readable($GLOBALS['argv'][$GLOBALS['argc'] - 1]))
$fp = fopen($GLOBALS['argv'][$GLOBALS['argc'] - 1], 'r');
else
$fp = fopen('php://stdin', 'r');
echo html_compress($fp, $options);
}
// $data is either a handle to an open file, or an HTML string
function html_compress($data, $options = null)
{
if(!isset($options))
{
$options = array();
}
$data .= "\n";
$out = '';
$inside_pre = false;
$bytecount = 0;
while($line = get_line($data))
{
$bytecount += strlen($line);
if(!$inside_pre)
{
if(strpos($line, '<pre') === false)
{
// Since we're not inside a <pre> block, we can trim both ends of the line
$line = trim($line);
// And condense multiple spaces down to one
$line = preg_replace('/\s\s+/', ' ', $line);
}
else
{
// Only trim the beginning since we just entered a <pre> block...
$line = ltrim($line);
$inside_pre = true;
// If the <pre> ends on the same line, don't turn on $inside_pre...
if((strpos($line, '</pre') !== false) && (strripos($line, '</pre') >= strripos($line, '<pre')))
{
$line = rtrim($line);
$inside_pre = false;
}
}
}
else
{
if((strpos($line, '</pre') !== false) && (strripos($line, '</pre') >= strripos($line, '<pre')))
{
// Trim the end of the line now that we found the end of the <pre> block...
$line = rtrim($line);
$inside_pre = false;
}
}
// Filter out any blank lines that aren't inside a <pre> block...
if($inside_pre || $line != '')
{
$out .= $line . "\n";
}
}
// Remove HTML comments...
if(array_key_exists('c', $options) || array_key_exists('no-comments', $options))
{
$out = preg_replace('/(<!--.*?-->)/ms', '', $out);
$out = str_replace('<!>', '', $out);
}
// Perform any extra (unsafe) compression techniques...
if(array_key_exists('x', $options) || array_key_exists('extra', $options))
{
// Can break layouts that are dependent on whitespace between tags
$out = str_replace(">\n<", '><', $out);
}
// Remove the trailing \n
$out = trim($out);
// Output either our stats or the compressed data...
if(array_key_exists('s', $options) || array_key_exists('stats', $options))
{
$echo = '';
$echo .= "Original Size: $bytecount\n";
$echo .= "Compressed Size: " . strlen($out) . "\n";
$echo .= "Savings: " . round((1 - strlen($out) / $bytecount) * 100, 2) . "%\n";
echo $echo;
}
else
{
if(array_key_exists('o', $options) || array_key_exists('overwrite', $options))
{
if($GLOBALS['argc'] > 1 && is_writable($GLOBALS['argv'][$GLOBALS['argc'] - 1]))
{
file_put_contents($GLOBALS['argv'][$GLOBALS['argc'] - 1], $out);
return true;
}
else
{
return "Error: could not write to " . $GLOBALS['argv'][$GLOBALS['argc'] - 1] . "\n";
}
}
else
{
return $out;
}
}
}
// Returns the next line from an open file handle or a string
function get_line(&$data)
{
if(is_resource($data))
{
return fgets($data);
}
if(is_string($data))
{
if(strlen($data) > 0)
{
$pos = strpos($data, "\n");
$return = substr($data, 0, $pos) . "\n";
$data = substr($data, $pos + 1);
return $return;
}
else
{
return false;
}
}
return false;
}







function overkill_minify($html){
    $page = \Minify_HTML::minify($html);
    $page = html_compress($page);
    header('Content-Encoding: gzip'); 
    $page = gzencode($page,6);
    return $page;
}



