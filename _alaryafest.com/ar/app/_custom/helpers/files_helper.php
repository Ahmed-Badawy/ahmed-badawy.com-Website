<?php

function dir_to_array($dir) {
   $result = array();
   $cdir = scandir($dir);
   foreach ($cdir as $key => $value){
      if (!in_array($value,array(".",".."))){
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)){
            $result[$value] = dir_to_array($dir . DIRECTORY_SEPARATOR . $value);
         }
         else $result[] = $value;
      }
   }
   return $result;
} 


function find_all_files($dir){
   // echo $dir."<br>";
   $root = scandir($dir);
   foreach($root as $value){
      if($value == '.' || $value == '..') {continue;}
      if(is_file("$dir/$value")){
         $result[]= "$dir/$value"; 
         continue;
      }
      foreach(find_all_files("$dir/$value") as $value){
         $result[]= $value;
      }
   }
   return (isset($result)) ? $result : [] ;
}

function get_file_data($file){
      $file = str_replace("\\","/",$file);
      $file = strtolower($file);
      $file_array1 = explode('.',$file);
      $ext = array_pop($file_array1);
      $file_array2 = explode('/',implode('.',$file_array1));
      $file_name = array_pop($file_array2);
      $path = implode('/',$file_array2);
      $res = [
            "ext"=>$ext,
            "file_name"=>$file_name,
            "file_full_name"=>$file_name.".".$ext,
            "file_full_path"=>$path."/".$file_name.".".$ext,
            "path"=>$path,
      ];
      return $res;
}



