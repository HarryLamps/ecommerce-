<?php
include ("../settings/core.php");
require("../controllers/cart_controller.php");

if (isset($_GET['pid'])) {
  $pid= $_GET['pid'];
  $cid= get_id();
  $ipadd= $_SERVER['REMOTE_ADDR'];
  $quant= 1;
  $evaluate=evaluate_ctr($pid);
  if ($evaluate!="") {
   echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
   echo "The following errors occured<br><br>";
   echo $evaluate;
   echo "</div>";
}else {
   $check= add_to_cart_ctr($pid,$ipadd,$cid,$quant);
   if ($check) {
      header("location:../view/all_product.php");

   } else {
      echo "fail";
   }
}
}



?>