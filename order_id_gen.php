<?php 

function generate_order_id(){
	// for($length =0; $length<$desired_length; $length++){
	// 	$password .= chr(rand(32,126));
	$user_order_id=mt_rand().$w_date;
	$customer_id=str_replace(':', '', $user_order_id);
	// }
	return $customer_id;
}	
?>