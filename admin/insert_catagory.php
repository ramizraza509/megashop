<?php


	
	
	
	if(isset($_POST['submit_catagory']))
	{		
	
	include('db_conn.php');
	$catagory=$_POST['catagory_input'];
	
	
	$pht = $_FILES["myfile"];
	
	
	$pht2 = preg_replace("/ /","_",$_FILES['myfile']['name']);
	
	
	
	$pathname ="img/".$pht2;
	
		move_uploaded_file($pht['tmp_name'], "../img/".$pht2);
	
	
	//$userfile = $_FILES['myfile'];
	//$userfile_name ="submissions/".$userfile['name'];	
	//move_uploaded_file($userfile['tmp_name'], "submissions/".$userfile['name']);
	
					$qry="INSERT INTO `services` (`id`, `service_name`, `photo_path`) VALUES (NULL, '$catagory', '$pathname');";
	
					
						 
					$run = mysqli_query($con,$qry);
	
						if($run ==True)
		
	
							{ 
								?>
						
									<script> 
										
										alert('Submitted Successfully !!'); 
										window.open('catagory_panel_2.php','_self')
									</script>
						
								<?php
							}
						else
							{ 
								?>
						
									<script> 
										alert('Something Went Wrong !!, Please Rename Your File Without Special Characters and Try Again or Contact Us !'); 
										
										window.open('catagory_panel_2.php','_self')
									</script>
						
								<?php
							}
	
	
		
		
	}		
?>
