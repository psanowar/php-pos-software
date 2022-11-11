<?php
session_start();
// print_r($_POST);
include 'config.php';
$id = $_POST['id'];


if (isset($_POST['submit'])) {

    $branch_name = $_POST['branch_name'];
    $branch_location = $_POST['branch_location'];
    $branch_manager_name = $_POST['branch_manager_name'];
    $branch_phone = $_POST['branch_phone'];
    $branch_email = $_POST['branch_email'];

    

      $update_query = "UPDATE `tbl_branches` SET `branch_name`='$branch_name',`branch_location`='$branch_location',`branch_manager_name`='$branch_manager_name',`branch_phone`='$branch_phone',`branch_email`='$branch_email' WHERE branch_id =$id";
        mysqli_query($db_connect, $update_query);

        header('location: showBranch.php');
}

