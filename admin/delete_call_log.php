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
$qry="DELETE FROM call_log where id='$_GET[id]'";
$run = mysqli_query($con,$qry);
	
	if($run ==True)
		
	
	{
		?>
			
			<script> 
				alert('Enquiry Deleted !!'); 
				window.open('enquiry_panel.php','_self')
			</script>
			
		<?php
	}
	else
	{
		?>
			
			<script> 
				alert('Something Went Wrong !!'); 
				window.open('enquiry_panel.php','_self')
			</script>
			
		<?php
	}
?>