<?php
session_start();
include 'config.php';

// print_r($_POST);

if(isset($_POST['submit'])){
	$branch_name = $_POST['branch_name'];
	$branch_location = $_POST['branch_location'];
	$branch_manager_name = $_POST['branch_manager_name'];
	$branch_phone = $_POST['branch_phone'];
	$branch_email = $_POST['branch_email'];


	$sql = "INSERT INTO `tbl_branches`(`branch_name`, `branch_location`, `branch_manager_name`, `branch_phone`, `branch_email`) VALUES ('$branch_name','$branch_location','$branch_manager_name','$branch_phone','$branch_email')";
	$result = $db_connect->query($sql);
	
	$_SESSION['branch-msg'] = 'Add branch successful!!';
	header('location: branchAdd.php');

	$db_connect->close();

}

?>