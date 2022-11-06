<?php 
include"../controllers/product_controller.php";
?>
<!DOCTYPE html>
<html lang="en">
  <?php 
  $get_id = $_GET['pid']; 

  $one_product = get_one_product_ctr($get_id);
 
  ?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/products.css">
  <title> Add Product</title>
</head>

<body style="background-color:#6767b8d1;">
  <h1>Update Products</h1>
  <form id="form" action="../actions/update_product.php" method="POST">
    <div class="form-control">

      <!-- Hidden input field for id -->
      <input  value = "<?php echo $one_product['product_id']; ?>" type="hidden" name="pidd" >



      <!-- product category -->
      <label for="role" id="label-role">Product Category</label>
      <!-- Dropdown options -->
      <select name="pCat" id="pCat" required>
            <option>-- Select Category --</option>
            <?php 
            $cat_list = get_all_cat_ctr();
            if ($cat_list) {
                            // course found

              foreach ($cat_list as $cat) {
                $cat_id = $cat['cat_id'];
                $cat_name = $cat['cat_name'];
                echo "<option value='$cat_id' >$cat_name</option>";
              }
            }else{
                            //no course found
              echo "<option value='no_found'>No Categories found</option>";
            }
            ?>
        </select>
    </div>

    <!-- product brand -->
    <div class="form-control">
      <label for="role" id="label-role">Product Brand</label>
      <!-- Dropdown options -->
      <select name="pBrand" id="pBrand" required> 
        <option>-- Select Brand --</option>
        <?php 
        $brand_list = get_all_brands_ctr();
        if ($brand_list) {
            // course found
          foreach ($brand_list as $one_brand) {
            $brand_id = $one_brand['brand_id'];
            $brand_name = $one_brand['brand_name'];
            echo "<option value='$brand_id' >$brand_name</option>";
          }
        }else{
        //no course found
          echo "<option value='no_found'>No Brand found</option>";
        }
        ?>
      </select>
    </div>

    <!-- Product title -->
    <div class="form-control">
      <label for="name" id="label-name">Product Title</label>
      <input type="text" name="ptitle"id="ptitle" value = "<?php echo $one_product['product_title']; ?>">
    </div>

    <!-- product description -->
    <div class="form-control">
      <label for="age" id="label-age">Product Description</label>
      <input type="textarea" name="pdesc"id="pdesc" value = "<?php echo $one_product['product_desc']; ?>">
    </div>


    <!-- product keyword -->
    <div class="form-control">
      <label for="age" id="label-age">Product Keyword</label>
      <input type="textarea" name="pkey" id="pkey" placeholder="Enter product keyword"
       value = "<?php echo $one_product['product_keywords']; ?>">
    </div>


    <!-- product prize -->
    <div class="form-control">
      <label for="age" id="label-age">Product Prize (Ghs)</label>
      <input type="number" name="pprice" id="pprice" id="age" value = "<?php echo $one_product['product_price']; ?>">
    </div>

    <div class="form-control">
      <label for="age" id="label-age">Product Image</label>
      <input type="file" name="pimg" id="pimg">
    </div>

    <button type="submit" value="submit" name="udpProd" style="background-color: #6767b8d1;">Submit</button>

  </form>
</body>

</html>
