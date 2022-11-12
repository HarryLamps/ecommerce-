<?php
//connect to the controller
require '../controllers/product_controller.php';

//checks
if (isset($_POST['addBrand'])) {
    //get user register details

    $b_name = $_POST['bname'];
   

    //insert new customer controler
    $check = insert_new_brand_ctr($b_name);

    //method check
    if ($check) {
        echo "<script>alert('Inserted Sucessfully')</script>";
        header("location:../Admin/Brand.php");
    } 
    
} else {
    echo 'Error! Did not insert';
}
