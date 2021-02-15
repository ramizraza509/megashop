<?php


	
	
	
	if(isset($_POST['update_catagory']))
	{		
	
	include('db_conn.php');
	$catagory=$_POST['update_catagory_input'];
	$service_id=$_POST['id_input'];
	
	$pht = $_FILES["myfile1"];
	
	$pht2 = preg_replace("/ /","_",$_FILES['myfile1']['name']);
			
	echo $catagory;
	
	echo "<hr>";
	
	if ($pht2 == null)
		{
			
			
			$qry="UPDATE `services` SET  `service_name` = '$catagory' WHERE `services`.`id` = '$service_id'";
				 
			$run = mysqli_query($con,$qry);
	
			if($run ==True)	
	
			{ 
				?>
					<script> 										
						alert('Updated Successfully !!'); 
						window.open('catagory_panel.php','_self')
					</script>
						
						<?php
							}
						else
							{ 
							?>
					<script> 
						alert('Something Went Wrong !!, Try Again or Contact Us !'); 										
						window.open('catagory_panel.php','_self')
					</script>						
							<?php
							}
	
	}
	else
	{
	
	$pathname ="img/".$pht2;	
	move_uploaded_file($pht['tmp_name'], "../img/".$pht2);
	
	
	
	$qry1="UPDATE `services` SET  `service_name` = '$catagory' 'photo_path` = '$pathname' WHERE `services`.`id` = '$service_id'";
	
					
						 
					$run1 = mysqli_query($con,$qry1);
	
						if($run1 ==True)
		
	
							{ 
								?>
						
									<script> 
										
										alert('Updated Successfully !!'); 
										window.open('catagory_panel.php','_self')
									</script>
						
								<?php
							}
						else
							{ 
								?>
						
									<script> 
										alert('Something Went Wrong !!, Contact Us !'); 
										
										window.open('catagory_panel.php','_self')
									</script>
						
								<?php
							}
		
	}
	
	
	
	
	
	
					
	
		
		
	}		
?>
