<?php  
session_start();
date_default_timezone_set("Asia/Kolkata");
$order_date = date('y/m/d h:i:s');
$user_id=$_SESSION['login_id'];
if($_SESSION['login_id'])
		
		{
			
		}
		
	else
	{
		header('location:login.php');
	}

	// if(isset($_POST['place_order']))
	// {
	include('admin/db_conn.php');
	$w_date = date('h:i:s');
	$qry2="SELECT * FROM product_details where product_id='$_GET[pid]'";
	$pro_data = mysqli_query($con,$qry2);
	$pro_data=mysqli_fetch_assoc($pro_data);

	// $qry3="SELECT * FROM order_details where order_details_id='$_GET[order_id]'";
	$sql43="SELECT * FROM `order_details` WHERE order_details_id='$_GET[order_id]'";
	$order = mysqli_query($con,$sql43);
	$data_or=mysqli_fetch_assoc($order);
	// while($data_tmp = mysqli_fetch_assoc($order))
	// 	{
	// 	$order_id3=$data_tmp['order_number'];
	// 	}
	$order_id=$data_or['order_id'];
	$order_number=$data_or['order_number'];


	// $insert_order="INSERT INTO `order_table`(`order_id`,`customer_id`,`order_number`,`payment_type`,`order_date,ship_date`) VALUES('$order_id','$user_id','$order_number','cahs','$order_date','$order_date')";
	/*if(empty($_SESSION['mydata'])){

    //your query and prepare the result into $resultArray
		$insert_order="INSERT INTO `order_table` (`order_id`, `customer_id`, `order_number`, `payment_type`, `order_date`, `ship_date`) VALUES ('3', ' 159859872063678', '11285', 'cash', '2021-01-04', '2021-01-04')";

	$confirm = mysqli_query($con,$insert_order);

    $_SESSION['mydata'] = $confirm;
}*/
	



	//login details
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
	// $product_id=$_SESSION['product_id'];
	// $quantity=$_POST['quantity'];
	// $tota_amt=$_POST['total'];
	// $cash_type=$_POST['cash_type'];

	// $order_id = md5(uniqid(mt_rand(), true));
	// $user_order_id=mt_rand().$w_date;
	// $customer_id=str_replace(':', '', $user_order_id);


// }


	

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Checkout | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->



<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
					
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Home</a></li>
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
							<!-- 	<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li> -->
								<!-- <li><a href="checkout.html" class="active"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
								<li><a href="mycart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<!-- <li><a href="login."><i class="fa fa-lock"></i> Login</a></li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php">Products</a></li>
										<!-- <li><a href="product-details.html">Product Details</a></li>  -->
										<!-- <li><a href="checkout.html" class="active">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li>  -->
                                    </ul>
                                </li> 
							<!-- 	<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>  -->
								<!-- <li><a href="404.html">404</a></li> -->
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
				<!-- 	<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div> -->
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->


	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<div class="register-req">
					<p><b>Your Order is Confirmed</b></p>
				</div>
				<div class="register-req">
					<p><b>Your Order Details</b></p>
					<p>Order id:  <b><?php echo $data_or['order_number']; ?></b></p>
					<p>Product Name:  <b><?php echo $pro_data['product_name']; ?></b></p>
						<p>Product Qnty:  <b><?php echo $data_or['quantity']; ?></b></p>
					<p>Delivery Date: Within <strong>2 Days </strong> of order date.</p>

				</div>
			</div>
		</div>
	</section>

<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						
						
						
						
						
						
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" disabled />
								
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="">Innovative</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>