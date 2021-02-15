<?php
session_start();
	include('db_conn.php');


	
if(isset($_POST['login']))
{
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	
	$qry = "SELECT * FROM `admin` WHERE `name`= '$username' AND `password`='$password'";	
	$run = mysqli_query($con,$qry);
	$row = mysqli_num_rows($run);
	
	{
		echo "$row";
	}
	if($row <1)
		
		{ 
			?>
			
			<script> 
				alert('Username or Password Incorrect !!'); 
				window.open('../index.php','_self')
			</script>
			
			<?php
		}
		
		else
		
		{
			$data= mysqli_fetch_assoc($run);
			$user= $data['name'];
						
			$_SESSION['name']=$user;
			
			$dashboard = "admin_panel.php";
			header('location:'.$dashboard);
			
		}
}
?>
