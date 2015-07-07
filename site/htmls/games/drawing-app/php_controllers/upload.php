<?php 

// var_export($_POST);
// die;

$data = $_POST['img_file'];
$data = str_replace('data:image/png;base64','',$data);
$data = str_replace(' ','+',$data);

$img = base64_decode($data);
$path = "images/".uniqid().'.png';
if(file_put_contents($path,$img)){
	print $path;
	echo "<br>Image Saved ! <br>";
	echo "would you like to download the image ? <a href='download.php?file=$path'>Yes</a>";
}else{
	header('HTTP/1.1 500 Internal Server Error');
}