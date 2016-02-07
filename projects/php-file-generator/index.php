<?php
//creating the files from text
	if(isset($_POST['file-generator-submit'])){
		$myfile = fopen($_POST['file_name'], "w") or die("Unable to open file!");
		$txt = $_POST['file_contents'];
		fwrite($myfile, $txt);
		fclose($myfile);
		echo "<h4 class='alert alert-success'>Success ! File Was Created</h4>";
	}

//uploading the files
	if(isset($_POST['file-upload-submit'])){

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

		$allowed_extenctions = ['php','png','jpg','css','js','txt'];
		if(!empty($_FILES['upload_files'])){
			// echo "<pre>"; var_export($_FILES); die;
			foreach($_FILES['upload_files']['name'] as $position=>$name){
				$file_data = get_file_data($name);
				$tmp = $_FILES['upload_files']['tmp_name'][$position];
				$uploaded_dir = $_POST['upload_directory'].$file_data['file_name'].".".$file_data['ext'];
				if(in_array($file_data['ext'],$allowed_extenctions)){
					move_uploaded_file($tmp,$uploaded_dir);
					echo "<h4 class='alert alert-success'>Success ! File Was Created</h4>";
				}else{
					echo "<h4 class='alert alert-danger'>Error ! Files Extension: ".$file_data['ext']." isn't allowed</h4>";
				}
			}
		}
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
<body class='container-fluid'>
<br>


<form action="#" method='post' enctype="multipart/form-data" class='col-sm-6'>
	<legend>File Uploader</legend>
	<label>Upload Directory</label>
	<input type='text' name='upload_directory' class='form-control' value='uploaded_files/'>
	<label>File</label>
	<input type='file' name='upload_files[]' class='form-control' multiple>
	<button type='submit' name='file-upload-submit' class='btn btn-primary col-sm-6 btn-lg'>Submit</button>
	<button type='reset' class='btn btn-danger col-sm-6 btn-lg'>Reset</button>
</form>


<form action="#" method='post' class='col-sm-6'>
	<legend>File Generator</legend>
	<label>File Name</label>
	<input type='text' name='file_name' class='form-control' value='orders/order1.php'>
	<label>File Contents</label>
	<textarea name='file_contents' class='form-control' rows='8'><?php echo htmlspecialchars("<?php\n        echo 'hello world'; \n?>"); ?></textarea>
	<button type='submit' name='file-generator-submit' class='btn btn-primary col-sm-6 btn-lg'>Submit</button>
	<button type='reset' class='btn btn-danger col-sm-6 btn-lg'>Reset</button>
</form>



</body>
</html>