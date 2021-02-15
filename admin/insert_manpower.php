<?php


	
	
	
	if(isset($_POST['submit_manpower']))
	{		
	
	include('db_conn.php');
	$name=$_POST['name_input'];
	$ph=$_POST['ph_input'];
	$city=$_POST['city_input'];
	$address=$_POST['add_input'];
	$email=$_POST['mail_input'];
	$trade=$_POST['trade_input'];
	$remarks=$_POST['remarks_input'];
	
	$pht = $_FILES["myfile"];
	
	
	$pht2 = preg_replace("/ /","_",$_FILES['myfile']['name']);
	
	
	
	$pathname ="photographs/".$pht2;
	
		move_uploaded_file($pht['tmp_name'], "photographs/".$pht2);
	
	
	//$userfile = $_FILES['myfile'];
	//$userfile_name ="submissions/".$userfile['name'];	
	//move_uploaded_file($userfile['tmp_name'], "submissions/".$userfile['name']);
						
					$qry="INSERT INTO `manpower` (`id`, `name`, `phone_1`, `city`, `trade`, `e_mail`, `address`, `remarks`, `photo_path`) VALUES 
												(NULL, '$name', '$ph', '$city', '$trade', '$email', '$address', '$remarks', '$pathname');";
	
					
						 
					$run = mysqli_query($con,$qry);
	
						if($run ==True)
		
	
							{ 
								?>
						
									<script> 
										
										alert('Submitted Successfully !!'); 
										window.open('manpower.php','_self')
									</script>
						
								<?php
							}
						else
							{ 
								<script> 
										
										alert('Something Went Wrong !!'); 
										window.open('manpower.php','_self')
									</script>
							}
	
	
		
		
	}		
?>
