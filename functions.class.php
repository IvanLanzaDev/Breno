<?php
	include("connect.class.php");
	
	$get_status = mysqli_query($connect, "SELECT * FROM breno");
	

	$breno_status = $_POST['breno_status'];
	$btn_status = $_POST['btn_status'];
	if(isset($btn_status)){
		$update_status= mysqli_query($connect, "UPDATE breno SET breno_status='$breno_status' WHERE id_status = 1");
	}	
?>