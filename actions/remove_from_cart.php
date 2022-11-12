<?php
include ("../settings/core.php");
require("../controllers/cart_controller.php");

 
 //for delete from cart
 if (isset($_GET['delete'])) {
    $pid= $_GET['delete'];
    $cid= get_id ();
    $check= delete_from_cart_ctr($pid,$cid);
    if ($check) {
        header("location:../view/cart.php");
        
    } else {
      echo "fail";
    }
 }

?>