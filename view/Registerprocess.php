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
    $Encryptpass= password_hash($user_password,PASSWORD_DEFAULT);


    //insert new customer controler
    $check = insert_new_customer_ctr($user_fullname,
        $user_email, $Encryptpass,$user_country,$user_city,$user_contact,$user_image,$user_role);

    //method check
    if ($check) {
        echo "<script>alert('Inserted Sucessfully')</script>";
        // header('location: login.php');
        header('location:login.php');
    } 
    
} else {
    echo 'No post found';
}


?> 