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
<script language="javascript" type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
        var xmlhttp=false;  
        try{
            xmlhttp=new XMLHttpRequest();
        }
        catch(e)    {       
            try{            
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e){
                try{
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch(e1){
                    xmlhttp=false;
                }
            }
        }
            
        return xmlhttp;
    }
    
    function getState(countryId) {      
        
        var strURL="findState.php?country="+countryId;
        var req = getXMLHTTP();
        
        if (req) {
            
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {                        
                        document.getElementById('statediv').innerHTML=req.responseText;                     
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
        }       
    }
    
    
    function getCity(countryId,stateId) {       
        var strURL="findDistrict.php?country="+countryId+"&state="+stateId;
        var req = getXMLHTTP();
        
        if (req) {
            
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {                        
                        document.getElementById('distdiv').innerHTML=req.responseText;                      
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
        }
                
    }
</script>

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
                            <a class="js-arrow" href="#">
                                <a href="admin_panel.php">
                           <button type="button" class="btn btn-outline-primary">Back To Dashboard</button>
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
                                            <li class="list-inline-item">Manpower Database</li>
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
                            

	<div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="box">
               
              
            <form action="insert_vacancy.php" method="post">
                  <div class="form-group">
                    <label for="name-login">Job Title</label>
                    
                    <select id="gender" name="job_title"class="form-control">
                          <option value="">Select any one</option>
                    <?php
                        include('db_conn.php');
                          $qry="SELECT * FROM job_list";
                          $result = mysqli_query($con,$qry);
                            while ($row = mysqli_fetch_assoc($result)){

                              ?>

                            <option value=<?php echo  $row['job_id']; ?> > <?php echo  $row['job_title']; ?></option>
                            <?php
                            }
                          ?>  
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="email-login">Posted By</label>
                  
                    <select id="gender" name="posted_by"class="form-control">
                          <option value="0">Admin</option>
                          <option value="1">user</option>
                          <option value="2">Other</option>
                          
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="email-login">Company Name</label>
                    <input id="salary-register" name="comp_name" type="text" class="form-control" placeholder="company name" required>
                  </div>
                  <div class="form-group">
                    <label for="email-login">Company Address</label>
                    <input id="salary-register" name="address_input" type="text" class="form-control" placeholder="company address">
                  </div>
                   <div class="form-group">
                    <label for="email-login">Company URL</label>
                    <input id="salary-register" name="comp_url" type="text" class="form-control" placeholder="company url">
                  </div>
                  <div class="form-group">
                    <label for="email-login">Contact Person</label>
                    <input id="salary-register" name="cont_person" type="text" class="form-control" placeholder="contact person">
                  </div>
                  

                </div>  
          </div> 
           <div class="col-lg-6">    
        <div class="form-group">
                  <div class="form-group">
                    <label for="email-login">Application Date</label>
                    <input id="salary-register" name="application_date" type="text" class="form-control" placeholder="date">
                  </div>
                
               <div class="form-group">
                    <label for="email-login">Last Date </label>
                    <input id="salary-register" name="last_date" type="text" class="form-control" placeholder="last date" required>
                  </div>
                   <div class="form-group">
                    <label for="email-login">No of Vacancy </label>
                    <input id="salary-register" name="vacancy_no" type="text" class="form-control" placeholder="no of vacancy" required>
                  </div>
            <label for="country">Country</label>
                <?php   
        
                    include('db_conn.php');
                    $qry = ("SELECT id,country FROM my_country WHERE 1");
                            
                    $states='';
                                                
                    $run = mysqli_query($con,$qry);               
                            
                    ?>
                    <select class="form-control" name="country" onChange="getState(this.value)">
                    <option>Select Country</option>
                    <?php while($row = mysqli_fetch_array($run)) {
                    echo '<option value="'.$row['id'].'">'.$row['country'].'</option>';
                    }
                    
                    mysqli_close($con);
                ?>
                    </select>
        </div>
        
        <div class="form-group">
            <label for="country">State</label>
                <div id="statediv">
                    <select class="form-control" name="state" >
                        <option>Select Country First</option>
                    </select>
                </div>
            </div>
        
        <div class="form-group">
            <label for="country">Area/District</label>
                <div id="distdiv">
                    <select class="form-control" name="district">
                        <option>Select State First</option>
                    </select>
                </div>
            </div>
                  
                 
 
                  <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-user"></i>Post</button>
                  </div>
                </form>
              </div>
           
           
             
            </div>
          </div>
        </div>
      </div>
						<!----Table----->
							<div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
												<th>Date Posted</th>
												<th>Name</th>
												<th>Mobile No.</th>
                                                
												<th>City</th>
												<th>Edit</th> 									
												<th>Trade</th>
                                                <th>Remarks</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          
											<?php
											/*	include('db_conn.php');
											
												$qry="SELECT * from manpower ORDER BY id DESC";
												
												$run = mysqli_query($con,$qry);
												$row = mysqli_num_rows($run);																										
														while ($data= mysqli_fetch_assoc($run))
														
															{
																echo "<tr>";
																echo "<td>".$data['id']."</td>";
																echo "<td>".$data['incep_date']."</td>";
																echo "<td>".$data['name']."</td>";
																echo "<td>".$data['phone_1']."</td>";
																echo "<td>".$data['city']."</td>";
																echo "<td>".$data['trade']."</td>";
																echo "<td>".$data['remarks']."</td>";
																echo "<td><a href=delete_application.php?id=".$data['id'].">Expand</a></td>";
																
															}
															
									
											*/?>
											                                       
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                                 END DATA TABLE-->
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
                                <p>Powered by ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
	
	
	
            <!-- modal medium -->
			<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Add New Manpower</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div 
                                <div class="card">
                                    <div class="card-header">
        							  
										
											<div class="card-body card-block">
												<form action="insert_manpower.php" method="post" enctype="multipart/form-data">
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name_input" placeholder="Name" class="form-control" required>
                                                   
                                                </div>
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Phone No.:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="ph_input" placeholder="Phone No." class="form-control" required>
                                                   
                                                </div>
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">City:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="city_input" placeholder="City" class="form-control" required>
                                                   
                                                </div>
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Address:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="add_input" placeholder="Address" class="form-control" required>
                                                   
                                                </div>
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">email:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="mail_input" placeholder="email" class="form-control" >
                                                   
                                                </div>
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Trade:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="trade_input" placeholder="Trade" class="form-control" required>
                                                   
                                                </div>
                                            </div>
											
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Remarks:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="remarks_input" placeholder="Remarks" class="form-control" required>
                                                   
                                                </div>
                                            </div>
											
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Image (300 X 300 Size only):</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" name="myfile" multiple="multiple"/ required>
                                                </div>
                                            </div>
                                           
											
                                                                                               
                                            </div>
											
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
												<button type="submit" name="submit_manpower" class="btn btn-primary">Save</button>
											</div>
											 
                                        </form>
                                    </div>
                                    
                                </div>
                                
                            </div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- end modal medium -->

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