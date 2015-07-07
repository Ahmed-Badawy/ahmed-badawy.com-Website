
<div class="row">
<div class="col-md-5 col-md-offset-1">
<h3><b>Time Generator:</b></h3>
	<div class="col-md-10 col-md-offset-1">
	<form action="#" method="post">
		<label>Latitude: </label>
		<input type="number" name='latitude' class="form-control" place-holder="Enter Latitude Value">

		<label>Longitude: </label>
		<input type="number" name='longitude' class="form-control" place-holder="Enter Longitude Value">
<br>
		<input type='submit' value='Submit' class='btn btn-success btn-block' >
		<input type='reset' value='Reset' class='btn btn-danger btn-block' >
	</form>
	<br><hr><br>
</div>
</div>

<div class='text-center'>

<?php
	if(isset($_POST) && !empty($_POST)){ 
		$time = time();
		$lat = $_POST['latitude'];
		$lon = $_POST['longitude'];
		$key = "AIzaSyCNIE_4Wxf9eJ22-Y9IDd_ehttpeTr3nDk";
		$href = "https://maps.googleapis.com/maps/api/timezone/json?location=$lat,$lon&".'timestamp=$time'."&key=$key";
		err($href);
		$response = file_get_contents($href);
		$j = json_decode($response);
		$info = get_object_vars($j);
		err($info);

		date_default_timezone_set("UTC");
		// $data['Location\'s Local Time'] = date("Y/F/d   -  g:i:s a", time()+$j->rawOffset+$j->dstOffset); 
		$local_time = date("Y/F/d   -  g:i:s a", time()+$j->rawOffset+$j->dstOffset); 
		$data['Current UTC Time'] = date("Y/F/d  -  g:i:s a", time()); 
		$data['Offset From UTC'] = $info['rawOffset']; 
		$data['daylight-savings Offset'] = $info['dstOffset']; 
		$data['Time Zone ID'] = $info['timeZoneId']; 
		$data['Time Zone Name'] = $info['timeZoneName']; 
		// err($info);
		// $data['Time Now'] = $data['current utc time']
?>


<div class="col-md-5">
<h3><b>Location Time Information:</b></h3>
<div class="list-group">
<?php
foreach($data as $key=>$val) 
echo "
  <a href='#' class='list-group-item'>
    <h4 class='text-left'>".ucwords($key).": <span class='pull-right'>$val</span></h4>
  </a>
";

echo "</div>
<div>
  <a href='#' class='list-group-item active'>
    <h3 class='text-left'>Location's Local Time : <span class='pull-right'>$local_time</span></h3>
  </a>
</div>
";
}
 ?>
</div>
</div>



</div>
</div>

