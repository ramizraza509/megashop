<?php
echo "test";
	include('admin/db_conn.php');
	$qry1="SELECT * FROM cart where user_id='test@gamil.com1077927004'";
	$run_tmp = mysqli_query($con,$qry1);
	while($data_tmp = mysqli_fetch_assoc($run_tmp))
	{
		echo $product_id = $data_tmp['product_id'];
		$qry2="SELECT * FROM product_details where product_id=$product_id";
		$pro_data = mysqli_query($con,$qry2);
		// $pro_data=@mysqli_fetch_assoc($pro_data);

		// $no_of_items=count($pro_data);

		foreach ($pro_data as $item) {
		 echo	$item['product_id'];
		 echo $item['product_name'];
		 }
	}

?>
<div class="cart-info quantity">
           <div class="btn-increment-decrement" onClick="decrement_quantity(<?php echo $item["cart_id"]; ?>)">-</div>
           <input class="input-quantity" id="input-quantity-<?php echo $item["cart_id"]; ?>" value="<?php echo $item["quantity"]; ?>">
           <div class="btn-increment-decrement"
              onClick="increment_quantity(<?php echo $item["cart_id"]; ?>)">+</div>
                </div>