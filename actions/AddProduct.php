<?php
//connect the controller
require("../controllers/product_controller.php");

//check for 
if (isset($_POST['addProd'])){
	$target_directory = "../images/";
	$target= $target_directory.basename($_FILES['pimg']['name']);
	$pbrand = ($_POST['pbrand']);
	$pcat = ($_POST['pcat']);
	$ptitle = ($_POST['ptitle']);
	$pprice = ($_POST['pprice']);
	$pdesc = ($_POST['pdesc']);
	$pimg = ($_FILES['pimg']['name']);
	$pkey = ($_POST['pkey']);

	

	//call a controller
	$check = insert_product_ctr($pcat,$pbrand,$ptitle,$pprice,$pdesc,$pimg,$pkey);

	if ($check){
		header("location:../Admin/Product.php");
		if(move_uploaded_file($_FILES['pimg']['tmp_name'], $target)){

		}
		else{
			echo"failed";
		}
	} else {
		echo "Insertion failed";
	}

}


?>