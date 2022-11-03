<?php
include("../controllers/product_controller.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/products.css">
  <title>Update Product</title>
</head>
<?php 
$get_id = $_GET['Bid'];
$one_brand = get_one_brand_ctr($get_id);
?>
<body style="background-color: blue;">
  <h1>Update Brand</h1>
  <form id="form" action="../actions/update_brand.php" method="POST">
    
 

    <div class="form-control">
      <input type="hidden" name="Bid" id="Bid"  value="<?php echo $one_brand['brand_id'];?>">
    </div>

    <div class="form-control">
      <label for="name" id="label-name">Brand name</label>
      <input type="text" name="bnamee"id="bnamee" value="<?php echo $one_brand['brand_name']; ?>">
    </div>


    <button style="background-color:blue;" type="submit" name="editBtn" value="submit">Update</button>
    <a class ='btn btn-primary btn-sm' href='../view/Brand.php'>Cancel</a>
     
  </form>
</body>

</html>
