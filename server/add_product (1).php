<?php 
	require_once('connect.php');
	if(
		isset($_POST['product_name']) &&
		isset($_POST['product_description']) &&
		isset($_POST['product_price']) &&
		isset($_POST['product_image']) 
	){
		$query = "INSERT INTO `products`(`product_name`,`product_description`,`product_price`,`product_image`) VALUES ('" .$_POST['product_name'] . "','" .$_POST['product_description'] ."'," .$_POST['product_price'] . ",'" .$_POST['product_image'] ."')";
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