<?php
$_GET2[]=[];
session_start();
if( isset($_GET['res']) )
{
    $data = json_decode($_GET['res']);
    foreach($data as $key => $pair) {
    $_GET2[$key] = $pair;
}
}
else
{
    echo 'Nothing to listen.';
    print_r($_GET);
}
$tid=0;
require 'connection.php';
if($con){
    mysqli_select_db($con,'ibot');
}
else{
    die("Error! Could not connect");
}
$claim=0;
$result=$_GET2;
unset($result[0]);
foreach($result as $x => $y){
	if($x=="claim_id"){
		$gid=explode("-",$y);
		$tid=$gid[1];
		$uid=$gid[0];
		$query3="SELECT car from query where t_id='$tid' AND user_id='$uid'";
		$cars = mysqli_query($con,$query3);
		
		
		foreach($cars as $useless){
			$car=$useless['car'];
		}

		$query2="SELECT * from partcost where Car='$car'";
		$pcost = mysqli_query($con,$query2);
		while($row=mysqli_fetch_assoc($pcost)) {
		  $resultset[] = $row;
		}
		$results=$resultset;
	}else{
		
		foreach($results as $part) {
			if($part['name']==$x){
				if($y>50 || $part['Paint cost']==0){
					$sum=$part['price']+$part['Paint cost'];
					
				}else{
					$sum=($part['price']/100)*$y+$part['Paint cost'];
				}
				$claim=$claim+$sum;/*aise hi*/
			}
		}
		$query1="UPDATE query SET damage='$y',claim='$sum' WHERE name='$x' AND t_id='$tid' AND user_id='$uid'";
		mysqli_query($con,$query1);
	}

}$finalq="UPDATE query SET status='1' WHERE t_id='$tid' AND user_id='$uid'";
mysqli_query($con,$finalq);
?> 