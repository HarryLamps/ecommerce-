<?php
//connect to database class
require '../settings/db_class.php';
class product_class extends db_connection
{
     //--INSERT--//
	public function add_brand_class($a) {
        //open connection
		$this->db_connect();

        //mysql real escape string with database connection check
		$b_name = mysqli_real_escape_string($this->db, $a);

        //insert query for add add brand
		$sql = "INSERT INTO brands(brand_name) VALUES('$b_name')";
		return $this->db_query_escape_string($sql);
        // return $sql;
	}


    //--INSERT--//
    public function add_cat_class($a) {
        //open connection
        $this->db_connect();

        //mysql real escape string with database connection check
        $c_name = mysqli_real_escape_string($this->db, $a);

        //insert query for add categories
        $sql = "INSERT INTO categories(cat_name) VALUES('$c_name')";
        return $this->db_query_escape_string($sql);
        // return $sql;
    }
        //insert into products
    public function add_product_class($pcat,$pbrand,$ptitle,$pprice,$pdesc,$pimg,$pkey){
        $sql = "INSERT INTO products(product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) VALUES ('$pbrand','$pcat','$ptitle','$pprice','$pdesc','$pimg','$pkey')";
        return $this-> db_query($sql);

    }

    //--SELECT ALL BRANDS
    public function select_all_brands_class() {
        $sql = "SELECT * FROM brands";
        return $this-> db_fetch_all($sql);

    }


    //SELECT ALL CAT 
    public function select_all_cat_class() {
        $sql = "SELECT * FROM categories";
        return $this-> db_fetch_all($sql);

    }


    // SELECT ONE BRAND
    public function select_one_brand_class($bid){
        $sql = "SELECT * FROM brands WHERE brand_id = '$bid'";
        return $this-> db_fetch_one($sql);

    }

    //SELECT ONE CAT

    public function select_one_cat_class($cid){
        $sql = "SELECT * FROM categories WHERE cat_id = '$cid'";
        return $this-> db_fetch_one($sql);

    }

    public function select_total_qty_from_cart_class($cid){
        $sql = "SELECT SUM(qty) FROM cart WHERE c_id=$cid";
        return $this-> db_fetch_all($sql);   
    }


    public function get_all_product_class(){
        // code...
        $sql ="SELECT * FROM products";
        return $this-> db_fetch_all($sql);
    }

    public function get_one_product_class($pidd){
        $sql ="SELECT * FROM products WHERE product_id = '$pidd'";
        return $this-> db_fetch_one($sql);
    }



    

    //--UPDATE BRAND
    public function update_brand_class($bid,$bname){
        $sql = "UPDATE brands SET brand_name ='$bname' WHERE brand_id = '$bid'";
        return $this-> db_query($sql);
    }


    //UPDATE CAT
    public function update_cat_class($cid,$cname){
        $sql = "UPDATE categories SET cat_name ='$cname' WHERE cat_id = '$cid'";
        return $this-> db_query($sql);
    }

    public function update_product_class($pidd,$pcat,$pbrand,$ptitle,$pprice,$pdesc,$pimg,$pkey){
        $sql = "UPDATE products SET product_title='$ptitle', product_brand ='$pbrand', product_cat='$pcat', product_price='$pprice',product_desc='$pdesc', product_keywords='$pkey',product_image='$pimg' WHERE product_id='$pidd'";
        return $this-> db_query($sql); 
    }

    //--DELETE--//
    // public function delete_brand_class($bid){
    //     $sql = "DELETE FROM brands where brand_id ='$bid'";
    //     return $this-> db_query($sql);
    // }
}


?>
