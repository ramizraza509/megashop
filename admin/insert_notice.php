<?php
session_start();

	if($_SESSION['name'])
		
		{
			
		}
		
	else
	{
		header('location:adminlogin.php');
	}
	
	$pname = $_POST['notice'];
	$current= date('y-m-d');
	include('db_conn.php');
	
	$qry="INSERT INTO `marquee` (`id`, `notice`, `INCEP_DATE`) VALUES (NULL, '$pname', '$current')";
	
	
	$run = mysqli_query($con,$qry);
	
	if($run ==True)
		
		
		
		{
		header('location:notice_panel.php');
		}
	else
		echo "Error!";
	
		
?>
