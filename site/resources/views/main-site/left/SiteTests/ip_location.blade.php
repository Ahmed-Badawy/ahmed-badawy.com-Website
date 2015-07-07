<?php

	function out($arr){
		echo "<pre>".print_r($arr,true)."</pre>";
	}

$ip = (isset($_POST['ip'])) ? $_POST['ip'] : $_SERVER['REMOTE_ADDR'];

$response = file_get_contents("http://freegeoip.net/json/".$ip);
$j = json_decode($response);
$info = get_object_vars($j);

if(!empty($_POST)){ $input = $_POST; }

?>
<div class="row">
<div class="col-md-5 col-md-offset-1">
<h3><b>Ip Location Recognition:</b></h3>
	<div class="col-md-10 col-md-offset-1">
	<form action="#" method="post">
		<label>Client Ip: </label>
		<input type="text" name='ip' class="form-control" value="<?php echo $info['ip']; ?>" place-holder="Enter Ip Address" style='width:100%'>
<br>
		<input type='submit' value='Submit' class='btn btn-success btn-block' >
		<input type='reset' value='Reset' class='btn btn-danger btn-block' >
	</form>
	<br><hr><br>
	<?php  
		out($info);
	?>
</div>
</div>



<div class="col-md-5">
<h3><?php echo "( ".$info['ip']." )"?>  Information: <?php if(!isset($input['ip'])) echo "<b class='btn btn-danger'>It's Your Ip</b>";?> </h3>
<div class="list-group">
<?php foreach($info as $key=>$val) 
echo "
  <a href='#' class='list-group-item'>
    <h4 class='list-group-item-heading'>".ucwords($key).": <p class='pull-right'>$val</p></h4>
  </a>
  "
 ?>  
</div>
</div>




</div>
<div class="row">
<div class='text-center'>
<?php 
if(!empty($info['latitude'])) echo "
	<iframe
  width='1000'
  height='300'
  frameborder='0' style='border:1'
  src='https://www.google.com/maps/embed/v1/view?key=AIzaSyDj0bHsmqZ2zbIKBKINoenJxaceIh0ZUjM&center=".$info['latitude'].",".$info['longitude']."&zoom=6' >
</iframe>
";else echo "<h3>Map not Showing because location issues</h3>"?>
</div>
</div>
