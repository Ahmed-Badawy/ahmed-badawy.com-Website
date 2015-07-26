<?php

$helpers_path = app_path()."/_custom/helpers";
// $allowed_helpers = ["gene_helper"];
$allowed_helpers = "all";

$constants_path = app_path()."/_custom/constants";
// $allowed_constants = ["const"];
$allowed_constants = "all";

$macros_path = app_path()."/_custom/macros";
$allowed_macros = "none";

$libs_path = app_path()."/_custom/libs";
// $allowed_libs = "none";
$allowed_libs = ['ZipperClass','Mobile_Detect'];



require("_custom/customServices/site_routes.php");
require("_custom/customServices/Lists.php");
require("_custom/constants/const.php");

require_things($allowed_helpers,$helpers_path);
//require_things($allowed_constants,$constants_path);
require_things($allowed_macros,$macros_path);
require_things($allowed_libs,$libs_path);



function require_things($array,$path){
	if($array == "all"){ 
		require_all($path);
		return ;
	}elseif($array == "none") return ;
	else foreach($array as $file){
		// die($path);
		require("$path/$file.php");
	}
}

function require_all($path){
	$list = load_core_constructions($path);
	foreach($list as $file){
		require("$file");
	}
}


// recurcively finds multiple level files in directory
function load_core_constructions($dir){
    $root = scandir($dir);
    foreach($root as $value){
        if($value === '.' || $value === '..') {continue;}
        if(is_file("$dir/$value")){$result[]="$dir/$value";continue;}
        foreach(load_core_constructions("$dir/$value") as $value){
            $result[]=$value;
        }
    }
    return $result;
} 



?>