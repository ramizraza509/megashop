<?php

session_start();

	if($_SESSION['name'])
		
		{
			
		}
		
	else
	{
		header('location:adminlogin.php');
	}
?>  


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin Panel</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                
                    <h4 class="name">ADMIN PANEL </h4>
               
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="images/icon/avatar-admin.png" alt="Admin" />
                    </div>
                    <h4 class="name">Welcome <?php echo $_SESSION['name']?></h4>
                    <a href='logout.php' class="btn">Log Out</a>
                </div>
               <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="enquiry_panel.php">
                                <i class="fas fa-tachometer-alt"></i>Enquiry                              
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            
                        </li>
                         <li>
                            <a href="admin_panel.php">
                               <i class="fas fa-chart-bar"></i>Home</a>                            
                        </li>
                  <li>
                        <a href="add_slider.php">
                        <i class="fas fa-chart-bar"></i>Add Slider</a>                            
                  </li>
                  <li>
                    <a href="#">
                      <i class="fas fa-chart-bar"></i>Add Product</a>                            
                  </li>
                  <li>
                  <a href="contact_panel.php">
                    <i class="fas fa-chart-bar"></i>Contact Us</a>                            
                  </li>
                
                  <li>
                            <a href="catagory_panel_2.php">
                               <i class="fas fa-chart-bar"></i>Catagory</a>                            
                        </li>
                  
                  <li>
                            <a href="manpower.php">
                               <i class="fas fa-chart-bar"></i>Manpower Database</a>                            
                        </li>
                        
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                                                               
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="Cool Admin" />
                    </a>
                </div>
                
            </aside>
            <!-- END HEADER DESKTOP-->
			
			

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Admin Panel</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Add Porduct</li>
                                        </ul>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
			
			
			

             <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Add Product</h3>
                             <form method="post" action="insert_product.php" enctype="multipart/form-data">
                              <div class="form-group row">
                                 <label for="inputEmail3" class="col-sm-3 col-form-label">Product Name</label>
                                 <div class="col-sm-6">
                                    <input type="text" class="form-control" name="product_name">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputEmail3" class="col-sm-3 col-form-label">Product Price
                                 </label>
                                 <div class="col-sm-3">
                                    <input type="text" class="form-control" name="product_price">
                                 </div>
                             <!--  </div>
                              <div class="form-group row"> -->
                                 <label for="inputEmail3" class="col-sm-3 col-form-label">Product offer Rate
                                 </label>
                                 <div class="col-sm-3">
                                    <input type="text" class="form-control" name="product_offer">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputEmail3" class="col-sm-3 col-form-label">Offer Persentage</label>
                                 <div class="col-sm-3">
                                    <input type="text" class="form-control" name="offer_per">
                                 </div>
                             <!--  </div>
                              <div class="form-group row"> -->
                                 <label for="inputEmail3" class="col-sm-3 col-form-label">Product visibility</label>
                                 <div class="col-sm-3">
                                    <input type="text" class="form-control" name="product_status">
                                 </div>
                              </div>
                            <!--   <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-3 col-form-label">visible Area</label>
                                <div class="col-sm-3">
                                   <select class="form-control select2" style="width: 100%;" name="visible_area"  required>
                                    <option value="">Select Any One</option>
                                     <option value="0">First Section</option>
                                      <option value="">Menue Secion</option>
                                      <option value="">Slider Section</option>
                                 </div>
                              
                              </div> -->
                               <div class="form-group row">
                                 <label for="inputEmail3" class="col-sm-3 col-form-label">visible Area</label>
                                 <div class="col-sm-3">
                                    <select class="form-control select2" style="width: 100%;" name="visible_area"  required>
                                    <option value="">Select Any One</option>
                                     <option value="0">First Section</option>
                                      <option value="1">Menue Secion</option>
                                      <option value="2">Slider Section</option>
                                    </select>
                                 </div>
                                   <label for="inputEmail3" class="col-sm-3 col-form-label">Product type</label>
                                 <div class="col-sm-3">
                                    <select class="form-control select2" style="width: 100%;" name="product_type"  required>
                                    <option value="">Select Any One</option>
                                     <option value="kid">kid</option>
                                      <option value="woman">Woman</option>
                                      <option value="man">Man</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Product Sub type</label>
                                <div class="col-sm-3">
                                    <select class="form-control select2" style="width: 100%;" name="product_sub_type"  required>
                                    <option value="">Select Any One</option>
                                     <option value="kid">Teddy</option>
                                      <option value="woman">Vehicle</option>
                                      <option value="man">Checken Set</option>
                                    </select>
                                 </div>
                              </div>
                                <div class="form-group row">
                                 <label for="inputEmail3" class="col-sm-3 col-form-label">Width(in cm)</label>
                                 <div class="col-sm-3">
                                     <input type="text" class="form-control" name="product_width">
                                 </div>
                                   <label for="inputEmail3" class="col-sm-3 col-form-label">Height(in cm)</label>
                                 <div class="col-sm-3">
                                     <input type="text" class="form-control" name="product_height">
                                 </div>
                              </div>


                              <div class="form-group row">
                                 <label for="inputEmail3" class="col-sm-3 col-form-label">Product Image 1</label>
                                 <div class="col-sm-4">
                                    <input type="file" class="form-control" name="product_img1">
                                 </div>
                              </div>

                              <div class="form-group row">
                                 <label for="inputEmail3" class="col-sm-3 col-form-label">Product Image 2</label>
                                 <div class="col-sm-4">
                                    <input type="file" class="form-control" name="product_img2">
                                 </div>
                                 <div class="col-sm-5">
                                   
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputEmail3" class="col-sm-3 col-form-label">Product Image 3</label>
                                 <div class="col-sm-4">
                                    <input type="file" class="form-control" name="product_img3">
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="inputEmail3" class="col-sm-3 col-form-label">Product Image 4</label>
                                 <div class="col-sm-4">
                                    <input type="file" class="form-control" name="product_img4">
                                 </div>
                              </div>
                              <div class="form-group row" >
                                 
                                 <div class="col-sm-4">
                                    <input  type="submit" class="btn btn-success" name="post" value="post">
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>   
                  </div>
       
                   
                            
							  
						<!----Table----->
							<div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                    <thead>
                                    <tr>
                            <th>ID</th>
      											<th>Product Name</th>
      											<th>Product Price</th>
      											<th>Status</th>                                                
      											<th>Image</th>																						
											       <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                          
											<?php
												include('db_conn.php');
											
												$qry="SELECT * from product_details ORDER BY id DESC ";
												
												$run = mysqli_query($con,$qry);
												$row = mysqli_num_rows($run);																										
														while ($data= mysqli_fetch_assoc($run))
														
															{
																echo "<tr>";
																echo "<td>".$data['id']."</td>";
																echo "<td>".$data['product_name']."</td>";
																echo "<td>".$data['product_offer_rate']."</td>";
                                echo "<td>".$data['product_status']."</td>";
                                echo "<td><img style='width:50px; height:50px;' src='product/".$data['product_img1']."'/></td>";
																
																?>
                                <td><button type="button" data-toggle="modal" data-target="#tmp-modal-<?php echo $data['id']; ?>"></i>More</button></td>

																
																<?php
																//echo "<td><a href=delete_application.php?id=".$data['id'].">Expand</a></td>";
																
															}
															
									
											?>
											                                       
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                                                
							<!----Table----->
						</div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

            

            

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Powered by Care TRONICS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<!--  Book Modal-->											
				<?php											
																		
				$qry_tmp="SELECT * FROM `product_details`";
															
				$run_tmp = mysqli_query($con,$qry_tmp);
				while($data_tmp = mysqli_fetch_assoc($run_tmp))
				{
					$tp_id = $data_tmp['id'];
				?>


				  <div id="tmp-modal-<?php echo $data_tmp['id'];?>" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
					<div role="document" class="modal-dialog">
					  <div class="modal-content">
						<div class="modal-header">
						  <h4 id="login-modalLabel" class="modal-title">Update</h4>
						  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
						</div>
						<div class="modal-body">
						
						
						
						  <form action="update_product.php" method="post">
                              <div class="form-group">
                                 <input type="text" >
                              <input id="email_modal" type="text" name="temp_id" value="<?php echo $data_tmp['id'];?>" class="form-control">
                            </div>
						  <div class="form-group">
							  <input id="email_modal" type="text" name="product_name" value="<?php echo $data_tmp['product_name'];?>" class="form-control">
							</div>
						  
							<div class="form-group">
							  <input id="email_modal" type="text" name="product_price" value="<?php echo $data_tmp['product_price'];?>" placeholder="Name" class="form-control" required>
							</div>
							<div class="form-group">
							  <input id="password_modal" type="text" name="product_offer_rate" value="<?php echo $data_tmp['product_offer_rate'];?>" placeholder="Phone Number" class="form-control" required>
							</div>
							
						
                            <div class="form-group">
                              <input id="password_modal" type="text" name="area_of_visible" value="<?php echo $data_tmp['area_of_visible'];?>" class="form-control">
                            </div>
							<div class="form-group">
							<select name="disc_area" id="plan" class="form-control">
							<option value="">Desplay for Select</option>
                             <option value="1">Yes</option>
                             <option value="0">No</option>
							</select>
							</div>
                
							
							<p class="text-center">
							  <button class="btn btn-outline-primary" type="submit" name="update">Update</button>
							 <a href="delet_post.php"><button type="button" class="btn btn-outline-primary">Delete</button></a>
							
							</p>

							                   
						  </form>

						 
						</div>
					  </div>
					</div>
				  </div>
				  
				<?php 
				}
				?>
<!--  Book Modal end-->
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->