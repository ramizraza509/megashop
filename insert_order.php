<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
$w_date = date('h:i:s');
echo $order_date = date('y/m/d h:i:s');
if(isset($_POST['place_order']))
{
	// //login details
	// $login_id=$_SESSION['login_id'];
	// $login_name=$_POST['name'];
	// //customer information
	// $first_name=$_POST['first_name'];
	// $last_name=$_POST['last_name'];
	// $email=$_POST['email'];
	// $phone_no=$_POST["phone_no"];
	// $address_1=$_POST['address_1'];
	// $address_2=$_POST['address_2'];
	// $pin_code=$_POST['pin_code'];
	// $state=$_POST['state'];
	// //product Details
	// $product_id=$_GET['pid'];
	// $quantity=$_POST['quantity'];
	// $tota_amt=$_POST['total'];
	// $cash_type=$_POST['cash_type'];

	// $order_id = md5(uniqid(mt_rand(), true));
	// $user_order_id=mt_rand().$w_date;
	// $customer_id=str_replace(':', '', $user_order_id);

	include('admin/db_conn.php');
	$w_date = date('h:i:s');
	$qry2="SELECT * FROM product_details where product_id='$_SESSION[product_id]'";
	$pro_data = mysqli_query($con,$qry2);
	$pro_data=mysqli_fetch_assoc($pro_data);
    $price=$pro_data['product_offer_rate'];

	//login details
	$login_id=$_SESSION['login_id'];
	$login_name=$_POST['name'];
	//customer information
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$phone_no=$_POST["phone_no"];
	$address_1=$_POST['address_1'];
	$address_2=$_POST['address_2'];
	$pin_code=$_POST['pin_code'];
	$state=$_POST['state'];
	//product Details
	$product_id=$_SESSION['product_id'];
	$quantity=$_POST['quantity'];
	$tota_amt=$_POST['amt_total'];
	$cash_type=$_POST['cash_type'];

	 $order_id = md5(uniqid(mt_rand(), true));
	$user_order_id=mt_rand().$w_date;
	 $customer_id=str_replace(':', '', $user_order_id);

	$sql="INSERT INTO `order_details` (`order_id`, `product_id`, `order_number`, `price`, `quantity`, `discount`, `total`, `ship_date`, `order_details_id`, `dil_date`,`login_name`,`email`,`first_name`,`last_name`,`phone_no`,`address_1`,`address_2`,`pin_code`) VALUES (NULL, '$product_id', '$customer_id', '$price', '$quantity', 'no', '$tota_amt', '$order_date','$order_id', '$order_date','$login_name','$email','$first_name','$last_name','$phone_no','$address_1','$address_2','$pin_code');";
	$run = mysqli_query($con,$sql);
	// $order_detail=mysqli_fetch_assoc($run);

	// $order_details_id=$order_detail['order_details_id'];


	$sql43="SELECT * FROM `order_details` WHERE order_details_id='$order_id'";
	$order = mysqli_query($con,$sql43);
	$data_or=mysqli_fetch_assoc($order);

	$order_id1=$data_or['order_id'];
	$order_number=$data_or['order_number'];

	$insert_order="INSERT INTO `order_table` (`order_id`, `customer_id`, `order_number`, `payment_type`, `order_date`, `ship_date`) VALUES ('$order_id1', '$login_id', '$order_number', 'cash', '$order_date', '$order_date')";

	$confirm = mysqli_query($con,$insert_order);

if($run ==True)
{ 
header('Location:order.php?pid='.$product_id.'&order_id='.$order_id);	
}





}
?>