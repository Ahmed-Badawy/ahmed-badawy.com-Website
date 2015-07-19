<?php

$str=md5(microtime());;
$str=substr($str,0,6);
session_start();
$_SESSION['captcha']=$str;

$img=imagecreate(100,30);
imagecolorallocate($img,51,50,47);
$txtcol=imagecolorallocate($img,255,255,255);
imagestring($img,20,5,5,$str,$txtcol);
header('Content:img/jpeg');
imagejpeg($img);



?>
