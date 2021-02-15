<?php
$country=intval($_GET['country']);

include('db_conn.php');
$qry = ("SELECT id,statename FROM state WHERE countryid='$country' ORDER BY statename");
$states='';
									
$run = mysqli_query($con,$qry);				  
		

?>
<select class="form-control" name="state" onchange="getCity(<?=$country?>,this.value)">
<option>Select State</option>
<?php 
while($row=mysqli_fetch_array($run)) {
echo '<option value="'.$row['id'].'">'.$row['statename'].'</option>';
}
?>
</select>
