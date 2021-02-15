<?php 
session_start();
if(isset($_POST['submit']))
{
include('admin/db_conn.php');

$email=$_POST['email'];
$pass=$_POST['pass'];


#$qry="INSERT INTO login_table (login_id,login_name,login_email,login_pass,login_date) VALUES ('$login_id','$name','$email','$pass','$w_date' ";
#$qry2="SELECT * FROM login_table WHERE login_email='$email' AND login_pass='$pass' ";

$qry2="SELECT * FROM `login_table` WHERE login_eamil='$email' and login_pass='$pass';";
#$qry="INSERT INTO `login_table` (`id`, `login_id`, `login_name`, `login_eamil`, `login_pass`, `login_date`) VALUES (NULL, '$login_id', '$name ', '$email', '$pass', '$w_date');";

$run = mysqli_query($con,$qry2);
$login_data = mysqli_fetch_assoc($run);
//$login_data['']
if($login_data == true)
{ 
// $login_data = mysqli_fetch_assoc($run);
$_SESSION['login_name']=$login_data['login_name'];
$_SESSION['login_id']=$login_data['login_id'];
	
?>

<script> 

alert('Enjoy Your shoping '); 


window.open('index.php','_self');
</script>
<?php
}

else
{ 
?>

<script> 
alert('Password or Username is wrong'); 

window.open('login.php','_self')
</script>

<?php
}

}
?>