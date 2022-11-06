<?php
//customer entity
require('../settings/db_class.php');

class customer_class extends db_connection
{
    //crud tingz

    function addcustomer_cls($name, $email ,$pass, $country, $city, $contact, $role){
       
        $sql = "INSERT INTO customer(customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,user_role) VALUES('$name', '$email' ,'$pass', '$country', '$city', '$contact', '$role')";
        return $this-> db_query($sql);

    
    
    }

    public function customer_log_cls($right_email)
	{
        // $right_email = mysqli_real_escape_string($this->db, $a);
        // $right_pass = mysqli_real_escape_string($this->db, $b);

        // select username and password
		$sql = "SELECT * FROM customer where customer_email = '$right_email' ";
		// return $sql;
		return $this->db_fetch_one($sql);
	}

}


?>