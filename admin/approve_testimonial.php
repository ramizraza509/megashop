<?php

session_start();

	if($_SESSION['name'])
		
		{
			
		}
		
	else
	{
		header('location:adminlogin.php');
	}
include('db_conn.php');
$qry="UPDATE `testimonials` SET `status` = '1' WHERE `testimonials`.id='$_GET[id]'";
$run = mysqli_query($con,$qry);
	
	if($run ==True)
		
	
	{
		?>
			
			<script> 
				alert('Testimonial Approved !!'); 
				window.open('testimonial_panel.php','_self')
			</script>
			
		<?php
	}
	else
	{
		?>
			
			<script> 
				alert('Something Went Wrong !!'); 
				window.open('testimonial_panel.php','_self')
			</script>
			
		<?php
	}
?>