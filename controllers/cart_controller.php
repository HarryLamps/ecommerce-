<?php
//connect to the user account class
include("../classes/cart_class.php");

//sanitize data
function cleanText($data) {
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}



//--INSERT--//
// add to cart
function add_to_cart_ctr($pid,$ipadd,$cid,$quant){
    $insert= new cart_class();
    return $insert->add_to_cart_class($pid,$ipadd,$cid,$quant);
}


//--SELECT--//
//view cart
function view_cart_ctr(){
    $view= new cart_class();
    return $view->view_cart_class();
}

//select email
function select_email_ctr($cid){
    $view_email = new cart_class();
    return $view_email->email_class($cid);
}




function evaluate_ctr($pid){
    $evaluate= new cart_class();
    return $evaluate->evaluate_class($pid);
}


//
function select_total_qty_from_cart_ctr($cid){
    $quant= new cart_class();
    return $quant->select_total_qty_from_cart_class($cid);
}

function select_total_price_ctr($cid){
    $quant= new cart_class();
    return $quant->select_total_price_class($cid);
}



//select on product from cart
function select_one_from_cart_ctr($pid,$cid){
    $view= new cart_class();
    return $view->select_one_from_cart_class($pid,$cid);
}




//--UPDATE--//

// increase cart
function increase_cart_ctr($pid,$cid,$quant){
    $view= new cart_class();
    return $view->increase_cart_class($pid,$cid,$quant);
}


//decrease cart
function decrease_cart_ctr($pid,$cid,$quant){
    $view= new cart_class();
    return $view->decrease_cart_class($pid,$cid,$quant);
}


//--DELETE--//


// delete from cart
function delete_from_cart_ctr($pid,$cid){
    $remove= new cart_class();
    return $remove->delete_from_cart_class($pid,$cid);
}


// record order details
 function  record_transaction_ctr($cid,$inv_no,$date,$ord_stat){
    $trans= new cart_class;
    return $trans -> record_transaction_class($cid,$inv_no,$date,$ord_stat);
  }

   // process payments
 function  process_payment_ctr($amt,$cid,$ord_id,$curncy,$pay_date){
    $trans= new cart_class;
    return $trans -> process_payment_class($amt,$cid,$ord_id,$curncy,$pay_date);
  }


  // remove all from cart
function remove_all_from_cart_ctr($cid){
    $remove= new cart_class;
    return $remove -> remove_all_from_cart_class($cid);
}

 

// select order id
function order_id__ctr($inv_no){
  $email= new cart_class;
  return $email -> order_id__class($inv_no);
}

// select items in cart by id
function product_id_ctr($cid){
  $ID= new cart_class;
  return $ID -> product_id_class($cid);
}
//insert into orderdetails
function insert_into_orderDetails_ctr($ord_id,$prod_id,$quant){
  $ID= new cart_class;
  return $ID -> insert_into_orderDetails_class($ord_id,$prod_id,$quant);
}

?>