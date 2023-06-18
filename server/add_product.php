<?php 
	require_once("connect.php");
	if(
		isset($_POST['Name']) &&
		isset($_POST['Size']) &&
		isset($_POST['Value']) &&
		isset($_POST['Image']) 
	){
		$query = "INSERT INTO `tesak`(`Name`,`Size`,`Value`,`Image`) VALUES ('" .$_POST['Name'] . "','" .$_POST['Size'] ."','" .$_POST['Value'] . "','" .$_POST['Image'] ."')";
		@$queryRun = mysqli_query($connection, $query);
		if(!$queryRun){
			die('mysqly query run error - ' . mysqli_error($connection));
		}else{
			header('location: admin.php');
		}
	}else{
		echo "Something Went Wrong";
	}

?>