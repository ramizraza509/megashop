<?php
if(isset($_POST['update']))
{
include('db_conn.php');

$product_id=$_POST['temp_id'];
$product_name=$_POST['product_name'];
$product_price=$_POST['product_offer_rate'];
$area_of_visible=$_POST['area_of_visible'];
$disc_area=$_POST['disc_area'];


$sql="UPDATE `product_details` SET `product_name`='$product_name',`product_offer_rate`='$product_price',`area_of_visible`='$area_of_visible',`product_status`='$disc_area'  WHERE `id`='$product_id'";

 $run = mysqli_query($con,$sql);

if($run ==True)
	{ 
	?>	
	<script> 
		alert('Submitted Successfully !!'); 
		window.open('add_product.php','_self')
	</script>
	<?php
	}
	else
	{ 
	?>
	<script> 
	alert('Something Went Wrong !!, Please Rename Your File Without Special Characters and Try Again or Contact Us !'); 
	//window.open('catagory_panel_2.php','_self')
	</script>
	<?php
	}
}		
?>
