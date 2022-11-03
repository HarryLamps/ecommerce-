<?php
include("../controllers/product_controller.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <title>Update Product</title>
</head>
<?php 
$get_id = $_GET['Cid'];
$one_cat = get_one_cat_ctr($get_id);
?>
<body style="background-color: blue;">
  <h1>Update Category</h1>
  <form id="form" action="../actions/update_category.php" method="POST">
    
 

    <div class="form-control">
      <input type="hidden" name="Cid" id="Cid"  value="<?php echo $one_cat['cat_id'];?>">
    </div>

    <div class="form-control">
      <label for="name" id="label-name">Category name</label>
      <input type="text" name="cnamee"id="cnamee" value="<?php echo $one_cat['cat_name']; ?>">
    </div>


    <button style="background-color:blue;" type="submit" name="editBtn" value="submit">Update</button>
    <a class ='btn btn-primary btn-sm' href='../view/Category.php'>Cancel</a>
     
  </form>
</body>

</html>
