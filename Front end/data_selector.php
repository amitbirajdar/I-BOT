<?php
session_start();
if($_GET['sel']==1){
	?> <iframe src="ongoing_query.php" style="background-color:white;margin: 150px 20px 0px 20px;border:none;" width="75%" height="590px"></iframe> <?php
}else{
	?> <iframe src="comp_query.php" style="background-color:white;margin: 150px 20px 0px 20px;border:none;" width="75%" height="590px"></iframe> <?php
}

