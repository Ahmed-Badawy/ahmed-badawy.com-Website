<?php
 // if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

function generate_rand_string($length) {
    $str = '';
    $capital = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $small = "abcdefghijklmnopqrstuvwxyz";
    $numbers = '0123456789';
    $possible = $numbers.$capital.$small;
    $i = 0;
    while ($i < $length) {
        $str .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
        $i++;
    }   
    return $str; 
}

if ( ! function_exists('hash_this')){
    function hash_this($pass){   //the md5 hash generates 32 char...
        $pass = md5($pass);
        $first = substr($pass,0,7);
        $last  = substr($pass,25,7);
        $pass = $first."594^".$last; //this is salting the pass...
        return $pass;
    }
}

if ( ! function_exists('bad_redirect')){    
    function bad_redirect($href,$link_name="Here"){
                    $loacation = base_url($href);
    	header("Location: ".$loacation);
            	echo "<h2>Now you should go to: ";
    	echo_link($href,$link_name);
    	echo "</h2>";
    	die();
    }
}

/**
 * $to @var array/string  :can be single string or array of strings...
 */
if ( ! function_exists('bad_sanitise')){    
    function bad_sanitise($data){
        if(is_array($data)){
            foreach($data as $single_data){
                $single_data =  htmlentities($single_data);
                $returned_data[] =  mysql_real_escape_string($single_data);
            }
        }else{
            $returned_data = htmlentities($data);
            // $returned_data = mysql_real_escape_string($data);
        }
        return $returned_data;
    }    
}

//to sanitize the crud input array;
if ( ! function_exists('crud_san')){
    function crud_san($input, $exception_array=null ){
        if( is_array( $input) ){
            foreach($input as $key=>$val){
                if( $exception_array && in_array($key,$exception_array) ){
                    $return_data[$key] = $val;
                }else{
                    $key = string_sanitise($key);
                    $val = string_sanitise($val);
                    $return_data[$key] = $val;
                }
            }
        }else $return_data = string_sanitise($input);
        return $return_data;
    }
}

if ( ! function_exists('string_sanitise')){
    function string_sanitise($str, $options =array(1,1,1,1),$strip_allowed_tags=null ){
        $html=$options[1] ; $trim=$options[2]; $sql=$options[3];$strip_tags=$options[1];

        if( !(is_string($str) || is_numeric($str)) ) die("security function says: the input ($str) isn't a string");
        if ($html) $str = htmlentities($str);
        if ($trim) $str = trim($str);
        // if ($sql) $str = mysql_real_escape_string($str);
        if ($strip_tags) $str = strip_tags($str,$strip_allowed_tags);
        return $str;
    }
}



//EX:$lines = file('http://www.xnxx.com/'); so the url must be www.xnxx.com
if ( ! function_exists('bad_proxy')){   
    function bad_proxy($site_url){
        $lines = file("http://$site_url/");
        // Loop through our array, show HTML source as HTML source; and line numbers too.
        $body_indicator = false;
        foreach ($lines as $line_num => $line) {
//            echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
            echo $line;
        }
    }
//    bad_proxy("www.xnxx.com");
}

/**
 * $to @var array/string  :can be single email or array of emails...
 */
if ( ! function_exists('mass_mail')){    
        function mass_mail($to,$subject,$body, $headers =null,$sender = "badawika@badawika.com"){
            if($headers == null){
                $header[]= 'MIME-Version: 1.0';
                $header[]= 'Content-type: text/html; charset=UTF-8';                
                $header[]= "From: {$sender}";
//                $header[]= "Reply-To: {$sender}";
                $header[]= "Reply-To: {$sender}";
//                $header[]= "To: coco{$to}, Kelly <kelly@example.com>";
                $header[] = "Subject: {$subject}";
                $header[] = "X-Mailer: PHP/".phpversion();
//                $headers[] = "From: Sender Name <sender@domain.com>";
//                $headers[] = "Bcc: JJ Chong <bcc@domain2.com>";
//                $headers[] = "Reply-To: Recipient Name <receiver@domain3.com>";                
                $headers = implode("\r\n", $header);
            }
            
            if(is_array($to)){
                $list = implode(",",$to);
                $result = mail($list,$subject,$body,$headers);//the email function can be sent to multiple emails if you separate them with ,
            }else $result = mail($to,$subject,$body,$headers);
            return $result; //Returns TRUE if the mail was successfully accepted for delivery, FALSE otherwise.
        }
}




