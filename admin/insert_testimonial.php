<?php
	include('db_conn.php');

	
if(isset($_POST['post_testimonial']))
{
	$matter = $_POST['matter'];
	$name = $_POST['name'];
	
	
	$qry = "INSERT INTO `testimonials` (`id`, `matter`, `sender`, `status`) VALUES (NULL, '$matter', '$name', '2')";	
	$run = mysqli_query($con,$qry);
	
	
	if($run ==True)
		
		{ 
			?>
			
			<script> 
				alert('Thank You for your Valuable Comments !!'); 
				window.open('../index.php','_self')
			</script>
			
			<?php
		}
		
		else
		
		{
			?>
			<script> 
				alert('Something Went Wrong! Please Mail Us'); 
				window.open('index.php','_self')
			</script>
			<?php
			
		}
}
?>
