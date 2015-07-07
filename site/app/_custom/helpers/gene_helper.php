<?php

//exclude Keys from an array
function array_exclude($array,$excludeKeys){
    foreach($excludeKeys as $key){
        unset($array[$key]);
    }
    return $array;
}

function is_connected($website){
    $connected = @fsockopen($website, 80); //website: google.com , port  (try 80 or 443)
    if ($connected){
        $is_conn = true; //action when connected
        fclose($connected);
    }else{
        $is_conn = false; //action in connection failure
    }
    return $is_conn;
}

function save_img($url,$save_place){
    // $url = "http://cdn.ksu.edu.sa/quran/ayat/safahat1/60.png";
    // $save_file = real_imgs_dir."60.png";
    // die($save_file);

    $content = file_get_contents($url);
    $fp = fopen($save_place, "w");
    fwrite($fp, $content);
    fclose($fp);
}

/*****************************************************************
Data Type Converters
*****************************************************************/
function json_to_xml($json) {
    get_lib("Serializer");
    $serializer = new XML_Serializer();
    $obj = json_decode($json);

    if ($serializer->serialize($obj)) {
        return $serializer->getSerializedData();
    }
    else {
        return null;
    }
}
/****************************************************************/

function regexp_query_ready($str,$by_letters=false){
    if($by_letters) { $str = implode(' ',$arr = str_split($str)); }
    $return = preg_replace("/[\ \/ \+ \- \* \_ \@ \! \# \$ \% \^ \& \( \) \[ \] \{ \} \< \>]/is",".*",$str);
    $return = ".*".$return.".*";
    return $return;
}

function get_regex_array($text,$stop=null){
        $text = preg_replace("/:/",'<span>',$text);
        $text = preg_replace("/<i>/",'',$text);
        $text = preg_replace("/\?id=/",'><span>',$text);
        $text = preg_replace("/.htm\">/i",'<span>',$text);
        $text = preg_replace("/<.*?>/",'+++',$text);

        $arr = explode('+++', $text);
        foreach($arr as $key=>$val){
            $val = trim($val);
                if($val == '0') $return[] = $val;
                if(!empty($val)) $return[]=$val;
        }
        return $return;
}


if ( ! function_exists('slash')){
    function slash($string){  //this takes a string or array and replace any " " or %20 in it...
        $string = strtolower($string);
        $string = str_replace( " " , "_" , $string ); 
        $string = str_replace( "%20" , "_" , $string );
        // $string = strtolower($string);
        return $string;
    }
}

if ( ! function_exists('unslash')){
    function unslash($string){  //this takes a string or array and replace any _ , - in it with " "...
        $string = str_replace( "_" , " " , $string );
        $string = str_replace( "-" , " " , $string );
        // $string = strtolower($string);
        return $string;
    }
}

if ( ! function_exists('u')){
    function u($str){
        return ucwords($str);
    }
}

if ( ! function_exists('lower')){
    function lower($string){
        if(is_arabic($string)) return ($string);
        return strtolower($string);
    }
}

if ( ! function_exists('array_unique_from_first')){
    function array_unique_delete_from_first($array){
        $array = array_values($array);
        $res = array();
        foreach($array as $val){
            if(in_array($val, $res)) $res = array_remove($val,$res);
            $res[] = $val;
        }
        return $res;
    }
}


/**
 * converts array to str with delemeter "/" .
 */
if ( ! function_exists('arr_to_str')){    
    function arr_to_str($array,$delemeter = "/",$func = null){
        if(!is_array($array)){ die('<h1>arr_to_str() says: it isn\'s an array...</h1>'); }
        // $str = implode($delemeter,$array);
        $new = [];
        foreach($array as $key=>$val){
            if($func=='slash') $new[$key]=slash($val);
            elseif($func=='unslash') $new[$key]=u(unslash($val));
            else $new[$key] = $val;
        }
        $str = implode($delemeter,$new);
        return $str;
    }
}

/**
 * if found "/" in a string it explode it to an array depending on the "/" as delemeter.
 * if not found "/" it will return false.
 */
if ( ! function_exists('str_to_arr')){    
    function str_to_arr($str,$delemeter = "/" ){
        if(!is_string($str)){ die('<h1>str_to_arr() says: it isn\'s a string.</h1>'); }
        // if(!strstr($str,$delemeter)){ die('str_to_arr couldn\'t be performed.'); }
            $array = explode($delemeter,$str);
            return $array;
    }
}

if ( ! function_exists('base_url')){
    function base_url($uri=null ,$echo=null ){
        $location =base_url.$uri;
        // $location ="http://spidro.com/public/".$uri;
        if($echo == null){ return $location; }else{ echo $location; }
    }
}

if ( ! function_exists('get_lib')){
    function get_lib($lib){
        require app_path('_custom/libs/'.$lib.".php");
    }
}



if ( ! function_exists('get_client_browser')){    
    function get_client_browser(){ 
        $u_agent = $_SERVER['HTTP_USER_AGENT']; 
        $bname = 'Unknown';
        $platform = 'Unknown';
        $version= "";

        //First get the platform?
        if (preg_match('/android/i', $u_agent)){
            $platform = 'android';
        }elseif(preg_match('/linux/i', $u_agent)){
            $platform = 'linux';            
        }elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
            $platform = 'mac';
        }elseif (preg_match('/windows|win32/i', $u_agent)) {
            $platform = 'windows';
        }
        
        // Next get the name of the useragent yes seperately and for good reason
        if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)){ 
            $bname = 'Internet Explorer'; 
            $ub = "MSIE"; 
        }elseif(preg_match('/Firefox/i',$u_agent)){ 
            $bname = 'Mozilla Firefox'; 
            $ub = "Firefox"; 
        }elseif(preg_match('/Chrome/i',$u_agent)){ 
            $bname = 'Google Chrome'; 
            $ub = "Chrome"; 
        }elseif(preg_match('/Safari/i',$u_agent)) { 
            $bname = 'Apple Safari'; 
            $ub = "Safari"; 
        }elseif(preg_match('/Opera/i',$u_agent)) { 
            $bname = 'Opera'; 
            $ub = "Opera"; 
        }elseif(preg_match('/Netscape/i',$u_agent)) { 
            $bname = 'Netscape'; 
            $ub = "Netscape"; 
        } 
        
        // finally get the correct version number
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) .
        ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
        if (!preg_match_all($pattern, $u_agent, $matches)) {
            // we have no matching number just continue
        }
        
        // see how many we have
        $i = count($matches['browser']);
        if ($i != 1){
            //we will have two since we are not using 'other' argument yet
            //see if version is before or after the name
            if(strripos($u_agent,"Version") < strripos($u_agent,$ub)){
                $version= $matches['version'][0];
            }else {
                $version= $matches['version'][1];
            }
        }else {
            $version= $matches['version'][0];
        }
        
        // check if we have a number
        if ($version==null || $version=="") {$version="?";}
        
        return array(
            'userAgent' => $u_agent,
            'name'      => $bname,
            'version'   => $version,
            'platform'  => $platform,
            'pattern'    => $pattern
        );
    } 
}

if ( ! function_exists('get_client_info')){ 
    function get_client_info(){
        $info = get_client_browser();
        $info["host_name"] = gethostname();
        $info["ip"] = $_SERVER['REMOTE_ADDR'];
        return $info;
    }
}

/**
 * this function is used to get spacified values from an array of input.
 */
if ( ! function_exists('arr_only')){
    function arr_only($input , $allowed_fields){
        $final = null;
        foreach( $input as $field=>$value ){
            if(in_array($field , $allowed_fields)){
                $final[$field] = $value;
            }
        }
        return $final;
    }
}

if ( ! function_exists('is_mobile_browser')){
    function is_mobile_browser(){
        Global $_SERVER;
        $useragent=$_SERVER['HTTP_USER_AGENT'];
        if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i'
            ,substr($useragent,0,4))) return true;
        return false;
    }
}

if ( ! function_exists('is_there')){
    function is_there($data=null){
        return ( isset($data) && !empty($data) ) ? true : false;
    }
}

if ( ! function_exists('flat_array')){
    function flat_array($array){
        $flat_array = null ;
        foreach( $array as $key => $val ){
            if(!is_numeric($key)) $flat_array[] = $key;
            if(is_array($val)){
                $flat_array = array_merge( $flat_array , flat_array($val) );
            }elseif(is_string($val)){
                $flat_array[] = $val;
            }
        }
        return $flat_array;
    }
}

if ( ! function_exists('date_sep')){
    function date_sep($input,$seperator = "/"){
        return $input['year'].$seperator.$input['month'].$seperator.$input['day'];
    }
}

function json_array_from($array , $turn_into_json){
    $json_array = [];
    // $turn_into_json = $turn_into_json ? : array_keys($array);
    foreach($array as $key => $val){
        // err($key);
            if(in_array($key,$turn_into_json)) $json_array[$key] = $val;
            else $input_array[$key] = $val; 
    }
    $return_array = json_encode($json_array);
    return ['features_array'=>$return_array,'input_array'=>$input_array];
}

if ( ! function_exists('array_remove')){
    function array_remove($value,$array){
        $key = array_search($value,$array);
        if($key!==false){
            unset($array[$key]);
            return $array;
        }
        return false;
    }
}

if ( ! function_exists('array_put')){
    function array_put($arr,$place='first',$key, $val=null) { 
        if($place >= count($arr)) die('array put found a problem.');
        if($place === 0) $place = 'first';
        if($val == null){
           $val = $key;
           $key = null;
        }
        if($place == "last"){
            $arr[$key] = $val;
            return $arr;
        }
        if($place == "first"){
            $new_array[$key] = $val;
        }        
        $i = 0;
        foreach($arr as $arr_key=>$arr_val){
            if($i == $place){
                if($key === null) $new_array['some key'] = $val;
                else $new_array[$key]=$val;
            }
            $new_array[$arr_key] = $arr_val;
            $i++;
        }
        return $new_array;
    }
}


if ( ! function_exists('json_2_array')){
    function json_2_array($json){
        $obj = json_decode($json,true);
        // $array = get_object_vars($obj);
        return $array;
    }
}













/*********************************************************************
                              is_arabic area
**********************************************************************/
function uniord($u) {
    // i just copied this function fron the php.net comments, but it should work fine!
    $k = mb_convert_encoding($u, 'UCS-2LE', 'UTF-8');
    $k1 = ord(substr($k, 0, 1));
    $k2 = ord(substr($k, 1, 1));
    return $k2 * 256 + $k1;
}

function is_arabic($str) {
    if(mb_detect_encoding($str) !== 'UTF-8') {
        $str = mb_convert_encoding($str,mb_detect_encoding($str),'UTF-8');
    }

    /*
    $str = str_split($str); <- this function is not mb safe, it splits by bytes, not characters. we cannot use it
    $str = preg_split('//u',$str); <- this function woulrd probably work fine but there was a bug reported in some php version so it pslits by bytes and not chars as well
    */
    preg_match_all('/.|\n/u', $str, $matches);
    $chars = $matches[0];
    $arabic_count = 0;
    $latin_count = 0;
    $total_count = 0;
    foreach($chars as $char) {
        //$pos = ord($char); we cant use that, its not binary safe 
        $pos = uniord($char);
        // echo $char ." --> ".$pos.PHP_EOL;

        if($pos >= 1536 && $pos <= 1791) {
            $arabic_count++;
        } else if($pos > 123 && $pos < 123) {
            $latin_count++;
        }
        $total_count++;
    }
    if(($arabic_count/$total_count) > 0.6) {
        // 60% arabic chars, its probably arabic
        return true;
    }
    return false;
}

function is_odd($num){
    if($num%2 == 1) return true;
    return false;
}

