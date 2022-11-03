<?php
//connect to the controller
require '../controllers/customer_controller.php';

//checks
if (isset($_POST['login'])) {
    //get user register details
    $right_email = $_POST['email'];
    $right_pass = $_POST['password'];

    //select controller
    $check = select_customer_ctr($right_email, $right_pass);

    if ($check) {
        //set session
        session_start();
        // print_r($check);
        $_SESSION['cid'] = $check['customer_id'];
        $_SESSION['role'] = $check['user_role'];
        echo "<a href=home.php> Go to login</a>";
    } else {
        
        echo "<script>alert('Email or Password is Wrong')</script>";
        echo "<a href=login.php> Go to login</a>";
    }
}
?>