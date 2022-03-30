<?php
session_start();
require 'connection.php';
$id=$_SESSION['id'];
$car=$_POST['car'];
$tid=$_POST['tid'];
$partcostquery="select name, price from partcost where Car='$car'";
$nullmsg="Full part Replacement!";
if($car=="Santro"){
	$multiplier=1;
}
elseif($car=="I20"){
	$multiplier=1.5;
}
elseif($car=="Creta"){
	$multiplier=2; 
}else{
	$multiplier=3;
}
$result=mysqli_query($con,$partcostquery);
while($row=mysqli_fetch_assoc($result)) {
  $resultset[] = $row;
}
$results=$resultset;
$data=array();
foreach($results as $row){
	$temp=$row['name'];
	$data[$temp]=$row['price'];
}
if(isset($_POST['qtl'])){
	$name="Tail light";
	$claim=$_POST['qtl']*$data['Tail light'];
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}
if(isset($_POST['qhl'])){
	$name="Headlight";
	$claim=$_POST['qhl']*$data['Headlight'];
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}
if(isset($_POST['starter'])){
	$name="Starter";
	$claim=$_POST['starter']*$multiplier;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}
if(isset($_POST['strass'])){
	$name="Steering Assembly";
	$claim=$_POST['strass']*$multiplier;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['suspf'])){
	$name="Front Suspension";
	$claim=$_POST['suspf']*$multiplier;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['ac'])){
	$name="Air Conditioner";
	$claim=$_POST['ac']*$multiplier;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['ba'])){
	$name="Break Assembly";
	$claim=$_POST['ba']*$multiplier;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['fwsh'])){
	$name="Front Windsheild";
	$claim=$_POST['fwsh']*$multiplier;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['qfsw'])){
	$name="Front Side Window";
	$claim=$_POST['qfsw']*$data['Front Sidewindow'];
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['qrsw'])){
	$name="Rear Side Window";
	$claim=$_POST['qrsw']*$data['Rear Sidewindow'];
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['qorvm'])){
	$name="ORVM";
	$claim=$_POST['qorvm']*$data['orvm'];
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['qspeakers'])){
	$name="Speakers";
	$claim=$_POST['qspeakers']*$multiplier*2000;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['qalloy'])){
	$name="Alloy";
	$claim=$_POST['qalloy']*$multiplier*6000;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['qwindow'])){
	$name="Window Mechanism";
	$claim=$_POST['qwindow']*$multiplier*1000;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['suspr'])){
	$name="Rear Suspension";
	$claim=$_POST['suspr']*$multiplier;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['muff'])){
	$name="Muffler";
	$claim=$_POST['muff']*$multiplier;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['exas'])){
	$name="Exhaust";
	$claim=$_POST['exas']*$multiplier;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['rwsh'])){
	$name="Rear Windsheild";
	$claim=$_POST['rwsh']*$multiplier;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}
if(isset($_POST['rad'])){
	$name="Radiator damage";
	$claim=$_POST['rad']*$multiplier;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['engine'])){
	$name="Engine oil leakage";
	$claim=$_POST['engine']*$multiplier;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['brkf'])){
	$name="Break Lines";
	$claim=$_POST['brkf']*$multiplier;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}if(isset($_POST['strf'])){
	$name="Power steering pump";
	$claim=$_POST['strf']*$multiplier;
	$insert="insert into query values('NULL','$car','$name','$nullmsg','100','$id','','$tid','$claim')";
	mysqli_query($con,$insert);
}
?><meta http-equiv="refresh" content="1;url=dashboard.php" />