<?php
include("../controllers/product_controller.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Product Page</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/brandCrud.css">
	<script src="../js/brand.js"></script>



</head>
<body>
	<div class="container">
		<div class="table-responsive" >
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-6">
							<h2>Products</h2>
						</div>
						<div class="col-sm-6">
							<a class ='btn btn-primary btn-sm' href='../view/add_product.php'>Add</a>		
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover" style="overflow-y:scroll;">
					<thead>

						<!-- <th>ID</th> -->
						<th>Product Name</th>
						<th>Product Brand</th>
						<th>Product Category</th>
						<th>Product Price</th>
						<th>Product Description</th>
						<th>Product Keyword</th>
						<th style="width: 260px;">Actions</th>
					</tr>
				</thead>
				<tbody>
					<div>
						<?php
						$product_list = get_all_product_ctr();
						foreach ($product_list as $product) {

							$pid = $product['product_id'];
							$pname = $product['product_title'];
							$pcat = $product['product_cat'];
							$pbrand = $product['product_brand'];
							$pprice = $product['product_price'];
							$pdesc = $product['product_desc'];
							$pkey = $product['product_keywords'];
							echo"
							<tr>
							<td>$pname</td>
							<td>$pcat</td>
							<td>$pbrand</td>
							<td>$pprice</td>
							<td>$pdesc</td>
							<td>$pkey</td>
							<td>
							<a class ='btn btn-outline-primary' href='../view/single_product.php?pid=$pid''>View</a>
							<a class ='btn btn-outline-info' href='../view/updateProduct.php?pid=$pid'''>Update</a>
							<a class = 'btn btn-outline-danger'>Delete</a>
							</td>
							</tr>";
						}

						?>
					</div>
				</tbody>
			</table>
			
		</div>
	</div>        
</div>

</body>
</html>