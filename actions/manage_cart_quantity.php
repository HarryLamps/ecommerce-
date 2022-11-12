<?php
include ("../settings/core.php");
require("../controllers/cart_controller.php");





 //for increase quantity in cart
if (isset($_GET['update1'])) {
    $pid= $_GET['update1'];
    $cid= get_id();
    $quant=select_one_from_cart_ctr($pid,$cid);
    $q1= $quant['qty'];
    $check= increase_cart_ctr($pid,$cid,$q1);
    if ($check) {
        header("location:../view/cart.php");
        
    } else {
      echo "fail";
  }
}

 //for decrease quantity in cart
if (isset($_GET['decrease'])) {
    $pid= $_GET['decrease'];
    $cid= get_id();
    $quant=select_one_from_cart_ctr($pid,$cid);
    $q1= $quant['qty'];
    $check= decrease_cart_ctr($pid,$cid,$q1);
    if ($check) {
        header("location:../view/cart.php");
        
    } else {
      echo "fail";
  }
}




?>