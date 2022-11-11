<?php
include('config.php');
$id = $_GET['branch_id'];

$delete_query = "DELETE FROM `tbl_branches` WHERE branch_id=$id";
mysqli_query($db_connect, $delete_query);
header('location: showBranch.php');