<?php
include('admin/db_conn.php');
//$qry1="DELETE * FROM cart WHERE id='$_GET[cart_id]'";
$sql="DELETE FROM `cart` WHERE Id=$_GET[cart_id];";
$run_tmp = mysqli_query($con,$sql);

if($run_tmp == true)
{ 	
?>

<script> 

alert('One Item is Remove '); 
window.open('mycart.php','_self');
</script>
<?php
}

else
{ 
?>

<script> 
alert('Something Went Wrong Try Again Later'); 

window.open('mycart.php','_self')
</script>

<?php
}

?>