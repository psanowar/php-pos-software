<?php
// session_start();
include 'config.php';


if (isset($_POST['submit'])) {
    // print_r($_POST);
    $branch_id = $_POST['branch_id'];
    $company_name = $_POST['company_name'];
    $company_address = $_POST['company_address'];
    $company_phone = $_POST['company_phone'];
    $company_email = $_POST['company_email'];
    $company_manager_name = $_POST['company_manager_name'];
    


        $insert_query = "INSERT INTO `tbl_company`(`branch_id`, `company_name`, `company_address`, `company_phone`, `company_email`, `company_manager_name`) VALUES ('$branch_id','$company_name','$company_address','$company_phone','$company_email','$company_manager_name')";
        
        $result = mysqli_query($db_connect, $insert_query);
        $_SESSION['success_msg'] = "Add Company SuccessFully!!";

        header('location: add_company.php');
        $db_connect->close();
}

       
