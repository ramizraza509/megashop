<?php
	include('db_conn.php');

	
if(isset($_POST['blog_post']))
{
	$head = $_POST['head'];
	$blog = $_POST['blog'];
	
	
	$qry = "INSERT INTO `blog` (`id`, `heading`, `matter`) VALUES (NULL, '$head', '$blog')";	
	$run = mysqli_query($con,$qry);
	
	
	if($run ==True)
		
		{ 
			?>
			
			<script> 
				alert('New Blog Posted !!'); 
				window.open('blog_panel.php','_self')
			</script>
			
			<?php
		}
		
		else
		
		{
			?>
			<script> 
				alert('Something Went Wrong! Please Mail Us'); 
				window.open('blog_panel.php','_self')
			</script>
			<?php
			
		}
}
?>
