<?php
session_start();
require 'connection.php';
if($con){
    mysqli_select_db($con,'ibot');
}
else{
    die("Error! Could not connect");
}
$query="SELECT * from parts";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)) {
  $resultset[] = $row;
}
$results=$resultset;
$tid=$_POST['tid'];
$car=$_POST['car'];
?>
<form class="form" action="uploadimage.php" method="post" enctype="multipart/form-data">
<select name="part" id="country-list" class="form-control">
	<option value disabled selected>Select Part</option>
	<?php
	foreach($results as $part) {
	?>
	<option value="<?php echo $part["name"];?>"><?php echo $part["name"]; ?></option>
	<?php
	}
	?></select><center>
<input type="file" class="form-control"name="file"><br>
<input type="hidden" name="tid" value="<?php echo $tid; ?>">
<input type="hidden" name="car" value="<?php echo $car; ?>">
<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
<input type="submit" class="form-control btn btn-danger" style="width:30%;" name="submit" value="Upload"></center>
</form>