<?php
	
	if(isset($_POST['submit']))
	{		
	
	include('db_conn.php');

	$comp_url=$_POST['comp_url'];
	$posted_by=$_POST['posted_by'];
	$comp_name=$_POST['comp_name'];
	$address_input=$_POST['address_input'];
	$cont_person=$_POST['cont_person'];
	$application_date=$_POST['application_date'];
	$job_title=$_POST['job_title'];
	$last_date=$_POST['last_date'];
	$vacancy_no=$_POST['vacancy_no'];
	@$country=$_POST['country'];
	$state2=$_POST['state'];
	@$district=$_POST['district'];
	
	

	$qry="INSERT INTO `vacancy` (`vac_id`, `comp_url`, `posted_by`, `company_name`, `job_title`, `no_of_vacancy`, `com_address`, `contact_person`, `application_date`,`last_date`,`country_id`,`state_id`,`dist_id`) VALUES 
		(NULL, '$comp_url', '$posted_by', '$comp_name', '$job_title', '$vacancy_no', '$address_input', '$cont_person', '$application_date','$last_date','$country','$state2','$district');";
	
					
						 
					$run = mysqli_query($con,$qry);
	
						if($run ==True)
		
	
							{ 
								?>
						
									<script> 
										
										alert('Post Successfully !!'); 
										//window.open('manpower.php','_self')
									</script>
						
								<?php
							}
						else
							{ 
								?>
								<script> 
										
										alert('Something Went Wrong !!'); 
										window.open('manpower.php','_self')
									</script>
									<?php
							}
	
	
		
		
	}		
?>
