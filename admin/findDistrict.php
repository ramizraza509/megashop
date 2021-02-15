<?php
$countryId=intval($_GET['country']);
$stateId=intval($_GET['state']);

include('db_conn.php');
$qry = ("SELECT id,district FROM district WHERE countryid='$countryId' AND stateid='$stateId' ORDER BY district");
$states='';
									
$run = mysqli_query($con,$qry);			
?>
<select class="form-control" name="district">
<option>Select District</option>
<?php
while($row=mysqli_fetch_array($run)) {
echo '<option value="'.$row['id'].'">'.$row['district'].'</option>';
}
?>
</select>
