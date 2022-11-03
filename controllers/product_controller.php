<?php
//connect to the user account class
include '../classes/product_class.php';

//sanitize data
function cleanText($data)
{
    $data = trim($data);
    //$data = stripslashes($data);
    //$data = htmlspecialchars($data);
    return $data;
}


// insert new brand
function insert_new_brand_ctr($b_name){
    $add_brand = new product_class();
    return $add_brand->add_brand_class($b_name);
}

//insert new categories
function insert_new_cat_ctr($c_name){
    $add_cat = new product_class();
    return $add_cat->add_cat_class($c_name);
}
//insert product
function insert_product_ctr($pcat,$pbrand,$ptitle,$pprice,$pdesc,$pimg,$pkey){
  $insert = new product_class();
  return $insert->add_product_class($pcat,$pbrand,$ptitle,$pprice,$pdesc,$pimg,$pkey);
}


//--SELECT ALL BRANDS
function get_all_brands_ctr(){
    $brand_list = new product_class();
    return $brand_list -> select_all_brands_class();
}

//SELECT ALL CAT
function get_all_cat_ctr(){
    $cat_list = new product_class();
    return $cat_list -> select_all_cat_class();
}

// SELECT ONE BRAND
function get_one_brand_ctr($bid){
    $one_brand = new product_class();
    return $one_brand -> select_one_brand_class($bid);
}

// SELECT ONE CAT
function get_one_cat_ctr($cid){
    $one_cat = new product_class();
    return $one_cat -> select_one_cat_class($cid);
}
function get_all_product_ctr(){
  $product_list = new product_class();
  return $product_list->get_all_product_class();
}

function get_one_product_ctr($pidd){
  $one_product = new product_class();
  return $one_product->get_one_product_class($pidd);
}

//total quantity
function select_total_qty_from_cart_ctr($cid){
  $quant= new product_class;
  return $quant -> select_total_qty_from_cart_class($cid);
}

//--UPDATE BRAND 
function update_brand_ctr($bid, $bname){
    $up_brand = new product_class();
    return $up_brand -> update_brand_class($bid, $bname);
}


//--UPDATE CAT
function update_cat_ctr($cid, $cname){
    $up_cat = new product_class();
    return $up_cat -> update_cat_class($cid, $cname);
}
// updaate product
function update_product_ctr($pidd,$pcat,$pbrand,$ptitle,$pprice,$pdesc,$pimg,$pkey){
  $update_cat = new product_class();
  return $update_cat->update_product_class($pidd,$pcat,$pbrand,$ptitle,$pprice,$pdesc,$pimg,$pkey);
}



?>
