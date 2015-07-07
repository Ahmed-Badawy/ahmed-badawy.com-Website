<?php 


$file_url = 'http://localhost/ahmed-badawy.com/site/htmls/games/drawing-app/php_controllers/images/'.$_GET['file'];
$output_file_name = 'canvasoutput.png';
header('Content-Type: image/png');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename= $output_file_name"); 
readfile($file_url);