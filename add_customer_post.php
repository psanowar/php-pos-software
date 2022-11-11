<?php
session_start();
// print_r($_POST);
include 'config.php';

if (isset($_POST['submit'])) {
    // print_r($_POST);
    $branch_name = $_POST['branch_name'];
    $customer_name = $_POST['customer_name'];
    $customer_phone = $_POST['customer_phone'];
    $customer_address = $_POST['customer_address'];
    if (empty($branch_name)) {
        $_SESSION['branch_name'] = "Branch Name Requried";
        header('location: customerAdd.php');
    }
    if (empty($customer_name)) {
        $_SESSION['customer_name'] = "Customer Name Requried";
        header('location: customerAdd.php');
    }
    if (empty($customer_phone)) {
        $_SESSION['customer_phone'] = "Customer Phone Requried";
        header('location: customerAdd.php');
    }
    if (empty($customer_address)) {
        $_SESSION['customer_address'] = "Customer Address  Requried";
        header('location: customerAdd.php');
    } else {

        $insert_query = "INSERT INTO `tbl_customers`(`branch_id`, `customer_name`, `customer_phone`, `customer_address`) VALUES ('$branch_name','$customer_name','$customer_phone','$customer_address')";

        $result = mysqli_query($db_connect, $insert_query);

        // if($result){
        //     echo 'ok';
        // }else{
        //     echo 'not ok';
        // }
        $_SESSION['cusomer_msg'] = "Add Customer Success!!";

        header('location: customerAdd.php');
    }
}
