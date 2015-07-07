

<div class="row">
<div class="col-md-4 col-md-offset-2">
	<form action="#" method="post">
	<legend><b>Weather Forecast Provider:</b></legend>

		<label>LATITUDE: </label>
		<input type="text" name='latitude' class="form-control" required style='width:100%'>

		<label>LONGITUDE: </label>
		<input type="text" name='longitude' class="form-control" required style='width:100%'>

<br>
		<input type='submit' value='Submit' class='btn btn-success btn-block' >
		<input type='reset' value='Reset' class='btn btn-danger btn-block' >
	</form>
</div>

</div>



<?php 
	if(isset($_POST) && !empty($_POST)){
		$Lat = $_POST['latitude'];
		$Lon = $_POST['longitude'];
		$href = "https://api.forecast.io/forecast/e1461bd07260ddbb03b64f6d36a154bb/$Lat,$Lon";
		$response = file_get_contents($href);
		$j = json_decode($response);
		$info = get_object_vars($j);
		err($info);
	}
?>

