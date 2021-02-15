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
$qry="DELETE FROM services where id='$_GET[id]'";
$run = mysqli_query($con,$qry);
	
	if($run ==True)
		
	
	{
		?>
			
			<script> 
				alert('Catagory Deleted !!'); 
				window.open('catagory_panel_2.php','_self')
			</script>
			
		<?php
	}
	else
	{
		?>
			
			<script> 
				alert('Something Went Wrong !!'); 
				window.open('catagory_panel_2.php','_self')
			</script>
			
		<?php
	}
?>