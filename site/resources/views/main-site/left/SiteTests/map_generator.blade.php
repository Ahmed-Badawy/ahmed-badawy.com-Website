
<div class="row">
<div class="col-md-5 col-md-offset-1">
<h3><b>Map Generator:</b></h3>
	<div class="col-md-10 col-md-offset-1">
	<form action="#" method="post">
		<label>Latitude: </label>
		<input type="text" name='latitude' class="form-control widthfix" placeholder="Enter Latitude Value">
		<br>
		<label>Longitude: </label>
		<input type="text" name='longitude' class="form-control widthfix" placeholder="Enter Longitude Value">
		<br>
		<label>Zoom: </label>
		<input type="number" name='zoom' class="form-control widthfix" value='6'>
<br>
		<br>
		<input type='submit' value='Submit' class='btn btn-success btn-block' >
		<input type='reset' value='Reset' class='btn btn-danger btn-block' >
	</form>
	<br><hr><br>
</div>
</div>

<div class='text-center'>

<?php
if(!empty($_POST) && isset($_POST)){ 
$input = $_POST;
echo "
	<iframe
  width='700'
  height='400'
  frameborder='0' style='border:1'
  src='https://www.google.com/maps/embed/v1/view?key=AIzaSyDj0bHsmqZ2zbIKBKINoenJxaceIh0ZUjM&center=".$input['latitude'].",".$input['longitude'].
  "&zoom=".$input['zoom']."' >
</iframe>
";
}else echo "<h3>Map not Showing because location issues</h3>"?>
</div>
</div>


