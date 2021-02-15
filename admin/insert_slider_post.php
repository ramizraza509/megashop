<?php

    

if(isset($_POST['post']))
{
include('db_conn.php');
date_default_timezone_set("Asia/Kolkata");
$w_date = date('y/m/d h:i:s');

$product_name=$_POST['product_name'];
$offer_details=$_POST['offer_details'];
$product_desc=$_POST['product_desc'];
$res_img = $_FILES["res_img"];
$full_img = $_FILES["full_img"];


$filename   = rand().$w_date; 
$extension  = pathinfo( $_FILES["res_img"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; 

$filename2  = rand().$w_date; 
$adhaar_ex  = pathinfo( $_FILES["full_img"]["name"], PATHINFO_EXTENSION ); // jpg
$basename2   = $filename2 . "." . $adhaar_ex; 

$resImage ="test/".$basename;
$fullImage ="test/".$basename2;

//move_uploaded_file($res_img['tmp_name'], $resImage);
//move_uploaded_file($full_img['tmp_name'], $fullImage);

$qry="INSERT INTO `slider_post` (`id`, `product_name`, `offer_details`, `product_desc`, `res_img`, `full_img`,`date_of_post`) VALUES (NULL, '$product_name', '$offer_details','$product_desc', '$resImage', '$fullImage','$w_date')";

 $run = mysqli_query($con,$qry);

if($run ==True)
{ 
?>

<script> 

alert('Submitted Successfully !!'); 
//window.open('catagory_panel_2.php','_self')
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
