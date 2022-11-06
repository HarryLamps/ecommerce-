<?php
//connect to the user account class
include '../classes/customer_class.php';



//--INSERT--//
// insert new customer
function insert_new_customer_ctr($name, $email ,$pass, $country, $city, $contact, $role){
    $add_customer = new customer_class();
    return $add_customer->addcustomer_cls($name, $email ,$pass, $country, $city, $contact,$role);
}

function select_customer_ctr($right_email)
{
    $select_customer = new customer_class();
    return $select_customer->customer_log_cls($right_email);
}
?> 