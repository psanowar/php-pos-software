<?php 
//session_start();
include 'db.php';
$con=dbcon();

function userLogin($email,$pass){
	global $con;
	$command="SELECT *FROM tbl_employee WHERE (empEmail='$email' OR empPhone='$email') AND pass='$pass' AND status='1'";
	$result=$con->query($command);
	if ($result->num_rows>0) {
		foreach($result as $data){
			$_SESSION['name']=$data["empName"];
			$_SESSION['branch_id']=$data["br_id"];
			header("location: dashboard.php");
		}
	}
	else{
		$_SESSION['title']="Error Message";
		$_SESSION["text"]="Email or Password Not Found";
		$_SESSION["icon"]="error";
	}
}
function showCompanyNamePurchase(){
	global $con;
	$brId = $_SESSION['branch_id'];
		$command="SELECT *FROM tbl_company WHERE branch_id = $brId AND status='1'";
		$result=$con->query($command);
		if ($result->num_rows>0) {
			return $result;
		}
}

function showProductIdPurchase(){
	global $con;
	$ProId = $_SESSION['product_id'];
		$command="SELECT *FROM tbl_product  WHERE product_id = $ProId AND status='1'";
		$result=$con->query($command);
		if ($result->num_rows>0) {
			return $result;
		}
}
function searchProductBarcode($barcode){
	global $con;
	$brId = $_SESSION['branch_id'];
		$command="SELECT *FROM tbl_product WHERE proBarcode = '$barcode' AND branch_id= '$brId'";
		$result=$con->query($command);
		if ($result->num_rows>0) {
			return $result;
		}
}
function addProduct($branch_id,$purchase_date,$purchase_invoice,$proBarcode,$company_id,$product_cost_price,$quantity,$total_amount){
	global $con;
    $command = "INSERT INTO tbl_purchase(branch_id,purchase_date,purchase_invoice,proBarcode,company_id,product_cost_price,quantity,total_amount)VALUES('$branch_id','$purchase_date','$purchase_invoice','$proBarcode','$company_id','$product_cost_price','$quantity','$total_amount')";
	$result=$con->query($command);
	// if($result){
	// 	return 'Product added successfully';
	// }
	// else{
	// 	return 'Error'.$con->error;
	// }
	
}