<?php 

if(isset($_POST['submit']))
{

include('admin/db_conn.php');
$w_date = date('y/m/d h:i:s');
$w_time = date('h:i:s');
$product_id=$_POST['product_id'];
$name=$_POST['name'];
$email=$_POST['email'];
$review=$_POST['review'];

$qry="INSERT into review_table(product_id,reviewer_name,reviewer_email,review) VALUES ('$product_id','$name','$email','$review' ";


$run = mysqli_query($con,$qry);

if($run ==True)
{ 
?>

<script> 

alert('Thank Yoru for review !!'); 
//window.open('add_product.php','_self')
</script>

<?php
}
else
{ 
?>

<script> 
alert('Something Went Wrong !!, try again later'); 

//window.open('catagory_panel_2.php','_self')
</script>

<?php
}

}
?>