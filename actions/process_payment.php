<?php
include("../settings/core.php");
include("../controllers/cart_controller.php");
$url = "https://api.paystack.co/transaction/initialize";
$fields = [
    'email' => $_GET['email-address'],
    'amount' => $_GET['amount']
];
$fields_string = http_build_query($fields);
  //open connection
$ch = curl_init();

  //set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer sk_test_ece8a06e36534b78dc43b58bb752addf883935b1",
    "Cache-Control: no-cache",
));

  //So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

  //execute post
$result = curl_exec($ch);
if ($result==true) {

    echo "payment successful";
    $inv_no=mt_rand();
    $cid= get_id();
    $ord_stat='in progress';
    $date=date('Y-m-d');
    $order= record_transaction_ctr($cid,$inv_no,$date,$ord_stat);

    if ($order) {
        echo "sucess 1";
    }else {
        echo "fail 1";
    }
 //save payment details
    $ord_id= order_id__ctr($inv_no);
    $ord_id=$ord_id['order_id'];
    $amt= $_GET['amount'];
    $curncy= 'GHS';
    $payment= process_payment_ctr($amt,$cid,$ord_id,$currcy,$date);
    if ($payment) {
        echo "sucess 2";
    }else {
        echo "fail 2";
    }

    $cart=product_id_ctr($cid);
    if ($cart) {
        foreach ($cart as $a_cart) {
          $prod_id= $a_cart['p_id'];
          $quant= $a_cart['qty'];
          $items= insert_into_orderDetails_ctr($ord_id,$prod_id,$quant);
          if ($items) {
             echo "sucess 4";
         } else {
             echo "fail 4";
         }
     }
     
 }else {
    echo "fail 5";
}
 // delete items from cart
$del=remove_all_from_cart_ctr($cid);
if ($del) {
    

    header("location:../view/success.php");
    
}else {
    echo "fail 3";
}
 //redirect to success page 

 // send details to email

 //redirect to failed page

} else {
 echo "payment failed";
 header("location:../view/all_product.php");
}
?>