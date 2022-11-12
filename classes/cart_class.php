<?php
//connect to database class
require("../settings/db_class.php");

class cart_class extends db_connection{
	//--INSERT--//
	//add to cart
	function add_to_cart_class($pid,$ipadd,$cid,$quant){
		$sql = "INSERT INTO cart (p_id,ip_add,c_id,qty) VALUES ('$pid','$ipadd','$cid','$quant')";
		return $this-> db_query($sql);
	}

	//--SELECT--//
	function view_cart_class(){
		$sql = "select products.product_id, products.product_title,products.product_price, products.product_image, products.product_price, cart.qty, cart.c_id from cart inner join products on cart.p_id=products.product_id;";
		return $this-> db_fetch_all($sql);
	}

	function evaluate_class($pid){
        $sql = "SELECT * FROM cart WHERE p_id='$pid' ";
        $result=$this-> db_fetch_all($sql);
    }

    function select_total_qty_from_cart_class($cid){
        $sql = "SELECT SUM(qty) FROM cart WHERE c_id=$cid";
        return $this-> db_fetch_all($sql);
    }

     // one item  from cart
    function select_one_from_cart_class($pid,$cid){
        $query= "select qty from cart where p_id=$pid and c_id=$cid";
        return $this-> db_fetch_one($query);
    }

    // select email
    public function email_class($cid)
    {
        $query= "select customer.customer_email from cart inner join customer on cart.c_id=customer.customer_id where c_id=$cid limit 1";
        return $this-> db_fetch_one($query);

    }

    // number of items purchased
    function select_one_price_class($cid){
        $query= "SELECT products.SUM(product_price) FROM cart WHERE cart inner join products on cart.p_id=products.product_id and cart.c_id=$cid";
        return $this-> db_fetch_all($query);   
    }

    // total price
    function select_total_price_class($cid){
        $query= "SELECT SUM(products.product_price*cart.qty) FROM cart inner join products on cart.p_id=products.product_id  where c_id=$cid";
        return $this-> db_fetch_all($query);   
    }


    //--UPDATE--//
    function increase_cart_class($pid,$cid,$quant){
        $sql = "UPDATE cart SET qty='$quant'+1 WHERE p_id='$pid' and c_id='$cid'";
        return $this-> db_query($sql); 
    }

    function decrease_cart_class($pid,$cid,$quant){
        $sql = "UPDATE cart SET qty='$quant'-1 WHERE p_id='$pid' and c_id='$cid'";
        return $this-> db_query($sql);
    }
    //--DELETE--//
    function delete_from_cart_class($pid,$cid){
        $sql = "DELETE FROM cart WHERE p_id='$pid' and c_id='$cid'";
        return $this-> db_query($sql);
    }

//start
// record order details
    public function record_transaction_class($cid,$inv_no,$date,$ord_stat)
    {
     $query= "INSERT INTO orders (customer_id,invoice_no,order_date,order_status) values('$cid',
        '$inv_no','$date','$ord_stat')";
     return $this-> db_query($query);


 }

// process payments
 public function process_payment_class($amt,$cid,$ord_id,$curncy,$pay_date)
 {

   $query= "INSERT INTO payment (amt,customer_id,order_id,currency,payment_date) values('$amt','$cid','$ord_id','$curncy','$pay_date')";
   return $this-> db_query($query);


}

// remove from cart
public function remove_all_from_cart_class($cid)
{
    $query= "delete from cart where c_id=$cid";
    return $this-> db_query($query);


}

//get order_id
public function order_id__class($inv_no)
{
  $query= "select order_id from orders where invoice_no=$inv_no ";
  return $this-> db_fetch_one($query);

}

//select items in cart
public function product_id_class($cid)
{
  $query= "SELECT p_id, qty from cart where c_id=$cid";
  return $this-> db_fetch_all($query);

}

// insert into orderdetails
public function insert_into_orderDetails_class($order_id,$prod_id,$quant)
{
  $query= "INSERT INTO orderdetails (order_id,product_id,qty) values('$order_id','$prod_id','$quant')";
  return $this-> db_query($query);

}
}
?>