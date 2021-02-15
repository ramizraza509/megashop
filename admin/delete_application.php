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
				alert('Application Deleted !!'); 
				window.open('application_panel.php','_self')
			</script>
			
		<?php
	}
	else
	{
		?>
			
			<script> 
				alert('Something Went Wrong !!'); 
				window.open('application_panel.php','_self')
			</script>
			
		<?php
	}
?>