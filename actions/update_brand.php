<?php
//connect to the controller
require '../controllers/product_controller.php';
//checks
if (isset($_POST['editBtn'])) {
    //get user register details

    $bid = $_POST['Bid'];
    $bname = $_POST['bnamee'];
    
    
    //insert new customer controler
    $check = update_brand_ctr($bid, $bname);
    //method check
    if ($check) {
        echo "<script>alert('Updated Sucessfully')</script>";
        header('location:../Admin/Brand.php');
    } 
    
} else {
    echo 'Error! Did not update';
}
