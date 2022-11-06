<?php 
include"../controllers/product_controller.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <title> Add Product</title>
</head>

<body>
  <h1>Add Products</h1>
  <form id="form" action="../actions/AddProduct.php" method="POST" enctype="multipart/form-data">
    <div class="form-control">
      <label for="role" id="label-role">Product Category</label>
      <!-- Dropdown options -->
      <select name="pbrand" id="pbrand">
        <option>-- Select Category --</option>
        <?php 
        $category_list = get_all_cat_ctr();
        if ($category_list) {
                        

          foreach ($category_list as $category_brand) {
            $category_id = $category_brand['cat_id'];
            $category_name = $category_brand['cat_name'];
                           
            echo "<option value='$category_id' >$category_name</option>";
          }
        }else{
                        //no course found
          echo "<option value='no_found'>No Categories found</option>";
        }
        ?>
      </select>
    </div>
    <div class="form-control">
      <label for="role" id="label-role">Product Brand</label>
      <!-- Dropdown options -->
      <select name="pcat" id="pcat">
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

    <div class="form-control">
      <label for="name" id="label-name">Product Title</label>
      <input type="text" name="ptitle"id="ptitle" placeholder="Enter product title">
    </div>


    <div class="form-control">
      <label for="age" id="label-age">Product Description</label>
      <input type="textarea" name="pdesc"id="pdesc" placeholder="Enter product description">
    </div>

    <div class="form-control">
      <label for="age" id="label-age">Product Keyword</label>
      <input type="textarea" name="pkey" id="pkey" placeholder="Enter product keyword">
    </div>


    <div class="form-control">
      <label for="age" id="label-age">Product Prize (Ghs)</label>
      <input type="number" name="pprice" id="pprice" id="age"placeholder="Enter product prize">
    </div>

    <div class="form-control">
      <label for="age" id="label-age">Product Image</label>
      <input type="file" name="pimg">
    </div>

    <button type="submit" value="submit" name="addProd">Submit</button>

  </form>
</body>

</html>


