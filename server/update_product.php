<?php 
	require_once('connect.php');

	if(
		isset($_POST['ID']) &&
		isset($_POST['Size']) &&
		isset($_POST['Value']) &&
		isset($_POST['Image']) &&
		isset($_POST['Name']) 

	){
		$query = "UPDATE `tesak` SET  `Name` = '" .$_POST['Name'] . "', `Size` = '" .$_POST['Size'] ."', `Value` = '" .$_POST['Value'] ."', `Image` = '" .$_POST['Image'] ."' WHERE `id` = ".$_POST['ID']."  " ;
//		echo $query;
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