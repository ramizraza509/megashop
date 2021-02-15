<?php
session_start();

if(isset($_SESSION['login_name'])){
$username=$_SESSION['login_name'];
$login_status=1;
}else{
	$login_status=0;
}

/*if(!isset($_SESSION['login_name'])){
	$login_status=0;
}*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
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
    <style type="text/css">
    	.img-res{
    		height: 300px;
    	}
    </style>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i>ramiz@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>

						<div class="btn-group pull-right">
							<!-- <div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div> -->
							
							<!-- <div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div> -->
						</div>
					</div> 
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<!-- <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li> -->
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="mycart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php 
									if($login_status==0){
										echo"<li><a href='login.php'><i class='fa fa-lock'></i> Login</a></li> ";
									}else{
										echo"<li><a href='logout.php'><i class='fa fa-sign-out'></i> LogOut</a></li> ";
									}
								?>
								
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
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="shop.php">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php">All Products</a></li>
										<!-- <li><a href="product-details.html">Product Details</a></li>  -->
										<!-- <li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.php">Login</a></li>  -->
                                    </ul>
                                </li> 
								<!-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
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
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/teddy.png" class="girl img-responsive" alt="" />
									<img src="images/home/offerT.png"  class="pricing" alt="" style="margin-top: 10%; margin-right: 15%" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/slider.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/bagoffer.png"  class="pricing" style="margin-top: 10%; margin-right: 25%" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3 ">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											KIDS
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="teddy.php?pty=teddy">Teddy</a></li>
											<li><a href="teddy.php?pty=vehicle">Car & Truck</a></li>
											<li><a href="shop.php">All kids </a></li>
											<!-- <li><a href="#">Puma</a></li>
											<li><a href="#">ASICS </a></li> -->
										</ul>
									</div>
								</div>
							</div>
						<!-- 	<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
											<li><a href="#">Armani</a></li>
											<li><a href="#">Prada</a></li>
											<li><a href="#">Dolce and Gabbana</a></li>
											<li><a href="#">Chanel</a></li>
											<li><a href="#">Gucci</a></li>
										</ul>
									</div>
								</div>
							</div> -->
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="teddy.php?pty=side_purse">Side Purse</a></li>
											<li><a href="teddy.php?pty=hand_purse">Hand Purse</a></li>
											<li><a href="teddy.php?pty=back_purse">Back Purse</a></li>
											<!-- <li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li> -->
										</ul>
									</div>
								</div>
							</div>
							<!-- <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Woman</a></h4>
								</div>
							</div> -->
							<!-- <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Households</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Interiors</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Clothing</a></h4>
								</div>
							</div> -->
							<!-- <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bags</a></h4>
								</div>
							</div> -->
							<!-- <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Shoes</a></h4>
								</div>
							</div> -->
						</div><!--/category-products-->
					<!--brands_products-->
						<!-- <div class="brands_products">
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div> --><!--/brands_products-->
						<!--price-range-->
						<!-- <div class="price-range">
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div> --><!--/price-range-->


						<!--shipping image-->
						<div class="shipping text-center">
							<img src="images/home/shipping.jpg" alt="" />
						</div> <!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-xl-9  padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php										
						include('admin/db_conn.php');	
							$qry_tmp="SELECT * FROM `product_details` WHERE area_of_visible=0 AND product_status=1";
							$run_tmp = mysqli_query($con,$qry_tmp);
							while($data_tmp = mysqli_fetch_assoc($run_tmp))
							{
								$produt_id = $data_tmp['id'];
							?>
						<div class="col-xl-3 col-md-2 col-sm-4 col-xs-6">
							<div class="product-image-wrapper" >
								<div class="single-products" > 
										<div class="productinfo text-center" >
											<a <?php echo"href=product_detail.php?pid=".$data_tmp['product_id']?> >
											<img class="img-responsive" style=" max-height: 100%; height: auto;" src="admin/product/<?php echo $data_tmp['product_img1'];?>" />
											<h2><?php echo $data_tmp['product_offer_rate']; ?></h2>
											<p><?php echo $data_tmp['product_name']; ?></p><a>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<a <?php echo"href=product_detail.php?pid=".$data_tmp['product_id']?> >
											<div class="overlay-content">
												<h2><?php echo $data_tmp['product_offer_rate']; ?></h2>
												<p><?php echo $data_tmp['product_name']; ?></p>
												<a <?php echo "href=addtoCart.php?pid=".$data_tmp['product_id']; ?> class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div></a>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="product_details.php"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
					<?php }?>
						
						
					</div>
					<!--features_items-->
					<!--category-tab-->
				<div class="category-tab">
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#kid" data-toggle="tab">Kids</a></li>
								<li><a href="#woman" data-toggle="tab">Woman</a></li>
								<li><a href="#man" data-toggle="tab">Man</a></li>
								<!-- <li><a href="#kids" data-toggle="tab">Kids</a></li>
								<li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li> -->
							</ul>
						</div>
						<div class="tab-content">
							<?php										
						include('admin/db_conn.php');	
							$qry_tmp="SELECT * FROM `product_details` WHERE area_of_visible=1 and product_type='kid' ORDER BY id desc  ";
							$run_tmp = mysqli_query($con,$qry_tmp);
							while($data_tmp = mysqli_fetch_assoc($run_tmp))
							{
								$produt_id = $data_tmp['id'];
								$product_type=$data_tmp['product_type'];
								
							?>
							<div class="tab-pane fade active in" id="<?php echo $product_type; ?>" >
								<div class="col-xl-3 col-md-3 col-sm-4 col-xs-6">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="admin/product/<?php echo $data_tmp['product_img1'];?>" alt="" />
												<h2><?php echo $data_tmp['product_offer_rate']; ?></h2>
												<p><?php echo $data_tmp['product_name']; ?></p>
												<a <?php echo "href=addtoCart.php?pid=".$data_tmp['product_id']; ?> class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
								<?php
								} 
								?>

								
							

							<?php										
							include('admin/db_conn.php');	
							$qry_tmp="SELECT * FROM `product_details` WHERE area_of_visible=2 and product_type='woman' order by id desc limit 4";
							$run_tmp = mysqli_query($con,$qry_tmp);
							while($data_tmp = mysqli_fetch_assoc($run_tmp))
							{
								$produt_id = $data_tmp['id'];
								$product_type=$data_tmp['product_type'];
								
							?>

							
							<div class="tab-pane fade" id="<?php echo $product_type; ?>" >
								<div class="col-xl-3 col-md-3 col-sm-4 col-xs-6">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="admin/product/<?php echo $data_tmp['product_img1'];?>" alt="" />
												<h2><?php echo $data_tmp['product_offer_rate']; ?></h2>
												<p><?php echo $data_tmp['product_name']; ?></p>
												<a <?php echo "href=addtoCart.php?pid=".$data_tmp['product_id']; ?> class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							<?php } ?>


							<?php										
							include('admin/db_conn.php');	
							$qry_tmp="SELECT * FROM `product_details` WHERE area_of_visible=1 and product_type='man'";
							$run_tmp = mysqli_query($con,$qry_tmp);
							while($data_tmp = mysqli_fetch_assoc($run_tmp))
							{
								$produt_id = $data_tmp['id'];
								$product_type=$data_tmp['product_type'];
								
							?>
							<div class="tab-pane fade" id="<?php echo $product_type; ?>" >
								<div class="col-xl-3 col-md-3 col-sm-4 col-xs-6">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="admin/product/<?php echo $data_tmp['product_img1'];?>" alt="" />
												<h2><?php echo $data_tmp['product_offer_rate']; ?></h2>
												<p><?php echo $data_tmp['product_name']; ?></p>
												<a <?php echo "href=addtoCart.php?pid=".$data_tmp['product_id']; ?> class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
				
					</div> 
				</div>

					<!--/category-tab-->
					<!--recommended_items-->
					
					 <div class="recommended_items">
						<h2 class="title text-center">Recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<?php										
							include('admin/db_conn.php');	
							$qry_tmp="SELECT * FROM `product_details` WHERE product_status=1 ORDER BY RAND() limit 6";
							$run_tmp = mysqli_query($con,$qry_tmp);
							while($data_tmp = mysqli_fetch_assoc($run_tmp))
							{
								$produt_id = $data_tmp['id'];
								$product_type=$data_tmp['product_type'];
								
							?>

									<div class="col-xl-3 col-md-2 col-sm-2 col-xs-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="admin/product/<?php echo $data_tmp['product_img1'];?>" alt="" />
													<h2><?php echo $data_tmp['product_offer_rate']; ?></h2>
													<p><?php echo $data_tmp['product_name']; ?></p>
													<a <?php echo "href=addtoCart.php?pid=".$data_tmp['product_id']; ?> class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
										<?php } ?>
									
								</div>
						
								<div class="item">	
									<?php										
							include('admin/db_conn.php');	
							$qry_tmp="SELECT * FROM `product_details` WHERE product_status=1 ORDER BY RAND() LIMIT 6";
							$run_tmp = mysqli_query($con,$qry_tmp);
							while($data_tmp = mysqli_fetch_assoc($run_tmp))
							{
								$produt_id = $data_tmp['id'];
								$product_type=$data_tmp['product_type'];
								
							?>
								<div class="col-xl-3 col-md-2 col-sm-2 col-xs-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="admin/product/<?php echo $data_tmp['product_img1'];?>" alt="" />
													<h2><?php echo $data_tmp['product_offer_rate']; ?></h2>
													<p><?php echo $data_tmp['product_name']; ?></p>
													<a <?php echo "href=addtoCart.php?pid=".$data_tmp['product_id']; ?> class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
										<?php } ?>
									
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
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
					<!-- 	<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						 -->
						<!-- <div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div> -->
						
					<!-- 	<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div> -->
						
					<!-- 	<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div> -->
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
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" disabled />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
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
					<p class="pull-right">Designed by <span><a target="_blank" href="#">Ramiz</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>