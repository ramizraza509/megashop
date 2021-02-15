<?php

		if(isset($_POST['electrician'])){
			include('db_conn.php');
					
				// getting the tmp details
			$temp_id=$_POST['temp_id'];
			$set=$_POST['plan'];
	/*	$qry5 = ("SELECT * FROM `slider_post` WHERE `id`= '$tmp_id'");
		$run5 = mysqli_query($con,$qry5);
		$data5= mysqli_fetch_assoc($run5);
		$tem_id=$data5['id'];*/
			
			/*$state= $data5['state'];   
			$area= $data5['area'];   
			$adl= $data5['addl_job_details'];    
			$jb_time= $data5['job_timing'];   
			$extra= $data5['extra_facility'];
			
			$comp= $data5['comp_name'];   
			$addr= $data5['address'];   
			$adl= $data5['addl_job_details'];    
			$cont_per= $data5['cont_person'];   
			$country= $data5['country_code'];
			$tm_id=$data5['id'];
			$ph=$data5['phone'];
			$e_mail=$data5['e_mail'];
*/

			/*function generate(){
				$password='';
				$desired_length= rand(8,12);

				for($length =0; $length<$desired_length; $length++){
					$password .= chr(rand(32,126));
				}
				return $password;
			}	
			$pass=generate();*/
/*
		$qry2="INSERT INTO `employer_register` (`id`, `state`, `area`, `addl_job_details`, `job_timing`, `extra_facility`, `comp_name`, `address`, `cont_person`, `e_mail`, `country_code`, `phone`, `plan_selected`, `user_password`, `status`,`access_level`) 
		                                VALUES (NULL, '$state', '$area', '$adl', '$jb_time', '$extra', '$comp', '$addr', '$cont_per', '$e_mail', '$country', '$ph', '$plan_id', '$pass', '1','user')";
		
		$run2 = mysqli_query($con,$qry2);	
			*/
			/*require'PHPMailer/PHPMailerAutoload.php';
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host='smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPAuth=true;
			$mail->SMTPSecure='tls';
			$mail->Username='ctsmailhandler@gmail.com';
			$mail->Password='Admin@12345';
			
			$mail->setFrom('ctsmailhandler@gmail.com', 'SERVICE CALL');
			$mail->addAddress('caretronicsranchi@gmail.com', 'ADMIN');
			$mail->addAddress('$e_mail', 'ADMIN');
			//$mail->addReplyTo('imran_ed@yahoo.com', 'REPLY');
			
			$mail->isHTML(true);
			$mail->Subject ="Message From BSMPISS: Password";
			$mail->Body="Congratulations! Your Accounts has been activated, following are the login details: "."<br>Login Id: $e_mail \n <br> Password: $pass ";
			*/
			$update="UPDATE slider_post set  `status`=1 WHERE `id`= '$temp_id' ";
			$run1 = mysqli_query($con,$update);

			if($run1 >0){
			
				
				?>
				
				<script>
						alert("Plan Approved ! Username and password sent to registered mail id");
						//window.location.href = "application_panel.php";
				</script>
				<?php
					
			}
			
			else{
					
				echo "Something Went Wrong.";
				
				
				
			}
		
		}

?>

