<?php
//start session
session_start();

//for header redirection
ob_start();

//funtion to check for login
function check_login()
{
    if (!isset($_SESSION['cid'])) {
        header('location:../login/logout.php');
    }
}
function check_login_index()
{
    if (!isset($_SESSION['cid'])) {
        header('location:../login/logout.php');
    }
}

// function to get user ID
function get_id(){
   $id = $_SESSION['cid'];
  return $id;
}


// function to check for role (admin, customer, etc)
function check_admin_login()
{   
    if ($_SESSION['role']==1) {
        return $_SESSION['role'];
        // header('location:../admin/Brand.php');
    }
}
?>
