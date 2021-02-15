<?php
if(isset($_POST['post']))
{
include('db_conn.php');
date_default_timezone_set("Asia/Kolkata");
$w_date = date('y/m/d h:i:s');

$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$product_offer=$_POST['product_offer'];
$offer_per=$_POST['offer_per'];
$product_status=$_POST['product_status'];
$visible_area=$_POST['visible_area'];
$product_type=$_POST['product_type'];
$product_sub_type=$_POST['product_sub_type'];

$product_width=$_POST['product_width'];
$product_height=$_POST['product_height'];
$product_img1 = $_FILES["product_img1"];
$product_img2 = $_FILES["product_img2"];
$product_img3 = $_FILES["product_img3"];
$product_img4 = $_FILES["product_img4"];
$product_id=mt_rand();

 $filename   = rand();
 $extension  = pathinfo( $_FILES["product_img1"]["name"], PATHINFO_EXTENSION ); // jpg
 $basename   = $filename . "." . $extension; 

 $filename2   = rand();
 $extension2  = pathinfo( $_FILES["product_img2"]["name"], PATHINFO_EXTENSION ); // jpg
 $basename2   = $filename2 . "." . $extension2; 

 $filename3   = rand();
 $extension3  = pathinfo( $_FILES["product_img3"]["name"], PATHINFO_EXTENSION ); // jpg
 $basename3   = $filename3 . "." . $extension3; 

$filename4   = rand();
 $extension4  = pathinfo( $_FILES["product_img4"]["name"], PATHINFO_EXTENSION ); // jpg
 $basename4   = $filename4 . "." . $extension4; 



$path23 ="product/".$basename;
$path234 ="product/".$basename2;
$path235 ="product/".$basename3;
$path236 ="product/".$basename4;
//$fullImage ="test/".$basename2;

move_uploaded_file($product_img1['tmp_name'], $path23);
move_uploaded_file($product_img2['tmp_name'], $path234);
move_uploaded_file($product_img3['tmp_name'], $path235);
move_uploaded_file($product_img4['tmp_name'], $path236);
//move_uploaded_file($full_img['tmp_name'], $fullImage);


@$qry="INSERT INTO `product_details` (`id`, `product_id`, `product_name`, `product_price`, `product_offer_rate`, `product_offer_pre`, `product_status`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `insert_date`,`area_of_visible`,`product_type`,`product_sub_type`,`product_width`,`product_height`) VALUES (NULL, '$product_id', '$product_name', '$product_price', '$product_offer', '$offer_per', '$product_status', '$basename', '$basename2', '$basename3', '$basename4', '$w_date',
	'$visible_area','$product_type','$product_sub_type','$product_width','$product_height');";

 $run = mysqli_query($con,$qry);

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
