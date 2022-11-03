<?php
//connect to the controller
require '../controllers/customer_controller.php';

//checks
if (isset($_POST['addReg'])) {
    //get user register details

    $user_fullname = $_POST['fullname'];
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    $user_country = $_POST['country'];
    $user_city = $_POST['city'];
    $user_contact = $_POST['contact'];
    $user_image= null;
    $user_role = 2;

    //insert new customer controler
    $check = insert_new_customer_ctr($user_fullname,
        $user_email,$user_password,$user_country,$user_city,$user_contact,$user_image,$user_role);

    //method check
    if ($check) {
        echo "<script>alert('Inserted Sucessfully')</script>";
        // header('location: login.php');
        echo "<a href=login.php> Go to login</a>";
    } 
    
} else {
    echo 'No post found';
}


?> 