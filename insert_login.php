<?php 

if(isset($_POST['submit']))
{
include('admin/db_conn.php');

$w_date = date('y/m/d h:i:s');

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$login_id=$email.mt_rand();

#$qry="INSERT INTO login_table (login_id,login_name,login_email,login_pass,login_date) VALUES ('$login_id','$name','$email','$pass','$w_date' ";

$qry="INSERT INTO `login_table` (`id`, `login_id`, `login_name`, `login_eamil`, `login_pass`, `login_date`) VALUES (NULL, '$login_id', '$name ', '$email', '$pass', '$w_date');";

$run = mysqli_query($con,$qry);

if($run ==True)
{ 
	
?>

<script> 

alert('Thank Your, Now You can login'); 


window.open('login.php','_self');
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