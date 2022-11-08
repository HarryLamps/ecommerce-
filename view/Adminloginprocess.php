<?php
//connect to the controller
require '../controllers/customer_controller.php';

//checks
if (isset($_POST['login'])) {
    //get user register details
    $right_email = $_POST['email'];
    $right_pass = $_POST['password'];
    

    //select controller
    $check = select_customer_ctr($right_email);
    $Encryptpass = $check['customer_pass'];



    if ($check == true and password_verify($right_pass,$Encryptpass) == true and $check['user_role'] == 1) {
        //set session
        session_start();
        // print_r($check);
        $_SESSION['cid'] = $check['customer_id'];
        $_SESSION['role'] = $check['user_role'];
       header("Location:../Admin/Admin.php");

    } 
    
    
    else {
        
        echo "<script>alert('You are not the Admin')</script>";
        header("Location:login.php");
    }
    
}
?>