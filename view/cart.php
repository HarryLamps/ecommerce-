<?php
include("../controllers/cart_controller.php");
// include("sidebar.php");
include("../settings/core.php");
$cartlist=view_cart_ctr();
//for the number of items in the cart
$cid= get_id();
$total= select_total_qty_from_cart_ctr($cid);
$total=$total[0];
$total1=$total['SUM(qty)'];

// total price controller
$overall_price = select_total_price_ctr($cid);
$overall_price = $overall_price[0];
$overall_price_a = $overall_price['SUM(products.product_price*cart.qty)'];
?>


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cart managment</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/cart.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
    <div class="container mt-5 mb-5" >
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="p-2">
                    <h4>Shopping cart</h4>
                </div>

                <?php
                foreach ($cartlist as $oneproduct) {
                    $product_id = $oneproduct['product_id'];
                    $product_title = $oneproduct['product_title'];
                    $product_price = $oneproduct['product_price'];
                    $product_image = $oneproduct['product_image'];
                    $product_qty=  $oneproduct['qty'];
                    $itemtotal_price= $product_price * $product_qty;
                    
                    if($product_qty ==1){
                        echo"
                        <div class='d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded'>
                        <div class='mr-1'><img class='rounded' src='../images/$product_image' width='70'></div>
                        <div class='d-flex flex-column align-items-center product-details'><span class='font-weight-bold'>$product_title</span>
                        </div>
                        <div class='d-flex flex-row align-items-center qty'><a href='../actions/manage_cart_quantity.php?decrease=$product_id'class='btn'><i class='fa fa-minus text-danger'></i></a>
                        $product_qty<a href='../actions/manage_cart_quantity.php?update1=$product_id'class='btn'><i class='fa fa-plus text-success'></i></a></div>
                        <div>
                        <h5 class='text-grey'>GHs$product_price</h5>
                        </div>
                       <a href='../actions/remove_from_cart.php?delete=$product_id' class='btn btn-outline-danger'>Remove</a>
                        </div>
                        ";
                    }
                    else {

                        echo"                       
                        <div class='d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded'>
                        <div class='mr-1'><img class='rounded' src='../images/$product_image' width='70'></div>
                        <div class='d-flex flex-column align-items-center product-details'><span class='font-weight-bold'>$product_title</span>
                        </div>
                        <div class='d-flex flex-row align-items-center qty'><a href='../actions/manage_cart_quantity.php?decrease=$product_id'class='btn'><i class='fa fa-minus text-danger'></i></a>
                        $product_qty<a href='../actions/manage_cart_quantity.php?update1=$product_id''class='btn'><i class='fa fa-plus text-success'></i></a></div>
                        <div>
                        <h5 class='text-grey'>GHs$product_price</h5>
                        </div>
                        <a href='../actions/remove_from_cart.php?delete=$product_id' class='btn btn-outline-danger'>Remove</a>
                        </div>


                        ";
                    }
                }
                ?>
                <!-- <div class='d-flex flex-row align-items-center mt-3 p-2 bg-white rounded'><input type='text' class='form-control border-0 gift-card' placeholder='discount code/gift card'><button class='btn btn-outline-warning btn-sm ml-2' type='button'>Apply</button></div> -->
                <div class='d-flex flex-row align-items-center mt-3 p-2 bg-white rounded'><button class='btn btn-warning btn-block btn-lg ml-2 pay-button' type='button'>Proceed to Pay</button></div>
            </div>
        </div>
    </div>


<!-- check out form -->

<center>

<div style=" min-height: 400px; width: 300px;  ">
            <div class="container" style="margin-top: 40px;">
                <div class="card">
                    <div class="card-header"><h4>Cart Summary</h4> </div>
                    <div class="card-body">
                        <?php
                        foreach ($cartlist as $oneproduct) {

                            $product_title = $oneproduct['product_title'];
                            $product_price = $oneproduct['product_price'];
                            $product_qty=  $oneproduct['qty'];
                            $itemtotal_price= $product_price * $product_qty;
                            echo "<h6>$product_title ($product_qty):</h6> <h6> GHS $itemtotal_price</h6> <br>";
                        }

                        ?>

                        <?php

                        echo"<h6>Subtotal: $total1 items</h6> <h6>Total Price:GHS $overall_price_a</h6> <br>";

                        ?>
                    </div> 
                    <div class="card-footer">
                        <a href='payment.php' class='btn btn-warning'>Check Out</a>
                        <a href='all_product.php' class='btn btn-outline-secondary' style="margin-top:20px;">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>

</body>
</html>