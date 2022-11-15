<?php
include("../controllers/cart_controller.php");

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

//select email
$user_email = select_email_ctr($cid);
// var_dump($user_email);
// print_r($user_email);
$user_email=$user_email['customer_email'];

?>


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cart managment</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/cart.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
    <center>

        <div style=" min-height: 400px; width: 300px; ">
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
                     <form id="paymentForm">

                        <!-- customer email -->
                        <input type="hidden" name="email-address"  value="<?php echo$user_email?>" id="email-address" required />
                        <input type="hidden" id="amount" value="<?php echo$overall_price_a?>" name="amount" required />
                                       <div class="form-submit">
                        <button type="submit" value="submit"class='btn btn-warning' name="pay" onclick="payWithPaystack()"> Pay </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</center>

</body>
</html>
<script type="text/javascript">
    function payWithPaystack() {
        const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);

    // store email and amount a variable
    var a = document.getElementById("email-address").value;
    var b = document.getElementById("amount").value;

    event.preventDefault();
    let handler = PaystackPop.setup({
    key: 'pk_test_1dd9294e097a3d10fe5c394795e31ab9d8a15924', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    currency:'GHS',
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
  },
  callback: function(response){
      //let message = 'Payment complete! Reference: ' + response.reference;
     // alert(message);
      // window.location = 'form_proc.php?email-address='+a+'&amount='+b;
      window.location.href = "../actions/process_payment.php";
      $.ajax({
    url: '../actions/process_payment.php?email-address='+a+'&amount='+b,
    success: function (response) {
        // alert(response);
        window.location.href = "../actions/process_payment.php";
        // windows.open.(location("../view/allproducts.php");
      // the transaction status is in response.data.status\
    //   header('location:home.php');
    }
  });
  }
});
      handler.openIframe();
  }
</script>
