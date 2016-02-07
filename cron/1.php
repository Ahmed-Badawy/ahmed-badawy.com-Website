<?php 

$date = date("Y-m-d",time());
// var_export($date);
// die("ok");




		$date = date("Y-m-d h-i-s",time());
		$myfile = fopen($date.".txt", "w") or die("Unable to open file!");
		$txt = "hello cron";
		fwrite($myfile, $txt);
		fclose($myfile);
