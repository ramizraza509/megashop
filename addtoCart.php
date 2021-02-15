<?php
session_start();
if($_SESSION['login_id'])
		
		{
			// $qry1="SELECT * FROM cart where login_id='$_SESSION[login_id]'";
			// $run_tmp = mysqli_query($con,$qry1);
			// $run_tmp['']
		}
		
	else
	{
		header('location:login.php');
	}

include('admin/db_conn.php');
date_default_timezone_set("Asia/Kolkata");
$w_date = date('y/m/d h:i:s');
$product_id=$_GET['pid'];
$sql="SELECT * FROM product_details WHERE product_id='$product_id'";
$product = mysqli_query($con,$sql);
$data_tmp = mysqli_fetch_assoc($product);
$product_price=$data_tmp['product_offer_rate'];
$user_id=$_SESSION['login_id'];
$qry1="INSERT INTO cart(id,user_id,product_id,qnt,price,createdDate) VALUES(NULL,'$user_id','$product_id','1','$product_price','$w_date') ";
$run_tmp = mysqli_query($con,$qry1);

if($run_tmp ==True)

{ 
	
	
?>

<script> 

alert('One product added! '); 


window.open('index.php','_self');
</script>

<?php
}
else
{ 
?>

<script> 
alert('Error Try again'); 

//window.open('catagory_panel_2.php','_self')
</script>

<?php
}

?>