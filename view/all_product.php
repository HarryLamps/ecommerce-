<?php
include("../controllers/product_controller.php");
include("../settings/core.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display all Products</title>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

	<div class="container py-5">
		<!-- For Demo Purpose-->
		<header class="text-center mb-5">
			<h1 class="display-4 font-weight-bold">Products</h1>
			<!-- <p class="font-italic text-muted mb-0">Quatilty from the leading technology industries such as Apple,Google,Samsung and others</p>
			<p class="font-italic text-muted">Powered By <a href="https://bootstrapious.com" class="text-muted">
				<u>Bootstrapious</u></a> -->
			</p>
		</header>

		<!-- First Row [Prosucts]-->
		<!-- <h2 class="font-weight-bold mb-2">Phones,Laptops and more</h2>
		<p class="font-italic text-muted mb-4">Purchase your affordable tech products here on Techpoint</p> -->

		<div class="container">
			<div class="row row-cols-1 row-cols-md-3 g-4">
				<?php
				$product_list = get_all_product_ctr();
				foreach ($product_list as $product) {

					$pid = $product['product_id'];
					$pname = $product['product_title'];
							// $pbrand = $product['product_brand'];
					$pprice = $product['product_price'];
					$pdesc = $product['product_desc'];
					$pimg = $product['product_image'];
					echo"<!-- Card-->
					<div class='card-colums'>
					<div class='card' style='box-shadow: 5px 10px 8px #88; 40px;margin-left:30px;'>
					<img src='../images/$pimg' alt='$pname' width='300' height='250' >
					<div class='card-body'>
					<center>
					<h5> <a href='single_product.php?pid=$pid' class='text-dark'>$pname</a></h5>
					<p class='small text-muted font-italic'>$pdesc</p>
					<p class='small text-muted font-italic'>Price: GHs$pprice</p>


					<a href='../actions/add_to_cart.php?pid=$pid' class='btn btn-primary'>Add to cart</a>
					<a href='single_product.php?pid=$pid' class='btn btn-info'>View Product</a>
					<a href='cart.php?pid=$pid' class='btn btn-info'>Go to cart</a>
					
					</center>
					</div>
					</div>
					</div>


					";

				}

				
				?>


 <script>

    function fireSweetAlert() {
        Swal.fire(
            'Awesome!',
            'Added to cart',
            'success'
        )
    }

  </script>
			</body>
			</html>