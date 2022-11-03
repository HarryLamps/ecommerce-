<?php
//connect to the controller
require '../controllers/product_controller.php';

//checks
if (isset($_POST['addCat'])) {
    //get user register details

    $c_name = $_POST['cname'];
   

    //insert new customer controler
    $check = insert_new_cat_ctr($c_name);

    //method check
    if ($check) {
        echo "<script>alert('Inserted Sucessfully')</script>";
        header('location:../Admin/Category.php');
    } 
    
} else {
    echo 'Error! Did not insert';
}
