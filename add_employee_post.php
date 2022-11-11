<?php
include 'config.php';
 

if (isset($_POST['submit'])) {
    $branch_id = $_POST['branch_id'];
    $employee_designation = $_POST['employee_designation'];
    $employee_name = $_POST['employee_name'];
    $employee_email =$_POST['employee_email'];
    $employee_phone = $_POST['employee_phone'];
    $employee_nid = $_POST['employee_nid'];
    $employee_salary = $_POST['employee_salary'];
    $employee_join_date = $_POST['employee_join_date'];
    $employe_password = $_POST['employe_password'];
    

    $insert_query = "INSERT INTO `tbl_employees`(`branch_id`, `employee_designation`, `employee_name`, `employee_email`, `employee_phone`, `employee_nid`, `employee_salary`, `employee_join_date`, `employe_password`) VALUES ('$branch_id','$employee_designation','$employee_name','$employee_email','$employee_phone','$employee_nid','$employee_salary','$employee_join_date','$employe_password')";

    $result = mysqli_query($db_connect, $insert_query);
    $_SESSION['success_msg'] = "Add Sucessfully!!";
    header('location: add_employe.php');

    




        
}
