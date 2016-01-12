<?php
	if(isset($_POST['file-generator-submit'])){
		$myfile = fopen($_POST['file_name'], "w") or die("Unable to open file!");
		$txt = $_POST['file_contents'];
		fwrite($myfile, $txt);
		fclose($myfile);
		echo "<h4 class='alert alert-success'>File Was Created !</h4>";
	}
?> 



<!DOCTYPE html>
<html>
<head>
	<title>File Generator</title>

<link rel="stylesheet" href="http://ahmed-badawy.com/_assets/css/bootstrap.min.css">

	<style type="text/css">
		input,textarea,button{
			width:100%;
			margin-bottom: 20px;
		}
	</style>

</head>
<body class='container'>
<br>

<form action="#" method='post'>
	<label>File Name</label>
	<input type='text' name='file_name' class='form-control' value='orders.php'>
	<label>File Contents</label>
	<textarea name='file_contents' class='form-control'><?php echo htmlspecialchars("<?php\n        echo 'hello world'; \n?>"); ?></textarea>
	<button type='reset' class='btn btn-danger col-sm-6 btn-lg'>Reset</button>
	<button type='submit' name='file-generator-submit' class='btn btn-primary col-sm-6 btn-lg'>Submit</button>
</form>



</body>
</html>