<?php 
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('err')){
    function err($array=null,$opening=null){
        echo "
        <!DOCTYPE html>
        <html lang='ar'>
        <meta charset='utf-8' />
        <head>
            <title>Error</title>
            <style>
                *{
                    font-family:verdana;
                    background: #111;
                    color:white;
                }
                h1{
                    font-family:arial;
                }
                pre{
                    font-family:'Comic Sans MS';
                    font-size:1.3em;
                    color:yellow;
                }
                #all{
                    max-width:800px;
                    margin:0 auto;
                    border:2px solid red;
                    border-radius:30px;
                    padding:20px;
                }
                #header{
                    color:yellow;
                    background-color:#444;
                    border:2px solid red;
                    border-radius:20px;
                    padding:10px;
                    text-align:center;
                }
                .h1{
                    color:white;
                    text-align:center;
                    background-color:#444;
                    border-radius:30px;
                    border:5px solid red;
                }
            </style>
        </head>
        <body>
        ";
        echo "<div id='all'>";
                if( is_null($array) ) echo "<h1>the value is Null...</h1>";
                if( is_string($array) ) echo "<h1>the value is String: ($array) </h1>";
                if( is_array($array) && empty($array) ) echo "<h1>the value is an Empty Array...</h1>";
                elseif( is_array($array) ) echo "<h1>the value is Array...</h1>";
                if( is_numeric($array)) echo "<h1>the value is Numeric: ($array) </h1>";
                if( is_bool($array)) {echo "<h1>the value is a Boolian: "; echo $array ? "(True)":"(False)"; echo "</h1>";}
                if( is_object($array)) echo "<h1>the value is an Object...</h1>";
                // if( is_($array)) echo "<h1>the value is an Object...</h1>";
            $opening= $opening ? : "Notice: It'sn't an Array";
            if(is_array($array)){$opening="output of the array is:"; }
            if($array==null){$opening="Value is null ::: Know All Service"; }
            $opening="<h2 id='header'>".
                ucwords(strtolower($opening))."</h2>";
            echo "$opening";
 
            echo "<pre>";
        if( $array ){
            echo "<h3>Array Count is: ".count($array)."</h3>";
            if( $array === "G" ) {
                echo "<hr><h1 class='h1'>GLOBALS</h1>";
                echo ($GLOBALS) ? print_r( $GLOBALS,true) : "EMPTY";  
            }elseif($array === 1){
                $input = Input::all();
                print_r($input);
            }else print_r($array) ;
        }else{
            Global $_SESSION , $_POST , $_GET , $_FILES , $GLOBALS ;
            echo "<h1 class='h1'>GET</h1>";
            echo ($_GET) ? print_r( $_GET,true) : "EMPTY";
            echo "<hr><h1 class='h1'>POST</h1>";
            echo ($_POST) ? print_r( $_POST,true) : "EMPTY";
            echo "<hr><h1 class='h1'>SESSION</h1>";
            echo ($_SESSION) ? print_r( $_SESSION,true) : "EMPTY";
            echo "<hr><h1 class='h1'>COOKIE</h1>";
            echo ($_COOKIE) ? print_r( $_COOKIE,true) : "EMPTY";          
            echo "<hr><h1 class='h1'>FILES</h1>";
            echo ($_FILES) ? print_r( $_FILES,true) : "EMPTY";            
        }
            echo "</pre></div><br />";
        if(function_exists('dd')){
            echo "<h1 style='color:blue'>dd Function is:</h1><pre>";
            dd($array);
        }
        ( !is_array($array) && $array ) ? var_dump($array) : null ;
        die("<h1 style='color:blue'>The End Of Page...</h1>");
    }
}   


if ( ! function_exists('arr_obj')){    
    function arr_obj($objs_array , $echo_what , $return = null){
        $string = "";
        foreach($objs_array as $obj ){
                $string .= $obj->$echo_what."<br />";
                $array[] = $obj->$echo_what;
        }
        if($return==null){
                echo "<h2 style='".bad_style("border1")."' ><b><pre>".$string."</b></pre></h2>";
                die("<h1 style='margin:0;'>I die here</h1>");
                return ;
        }
        return $array;
    }
}

if ( ! function_exists('EC')){
    function EC($string){
        echo "<h1>$string</h1>";
        die("<br><h1>I Die Here</h1>");        
    }
}  


if ( ! function_exists('dd')){    
        function dd($var){
            var_dump($var);
            die("<h1>I die here...</h1>");
        }
}

if ( ! function_exists('function_name')){    
 
}
if ( ! function_exists('function_name')){    
 
}
if ( ! function_exists('function_name')){    
 
}
if ( ! function_exists('function_name')){    
 
}