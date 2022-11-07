<?php
//connect the controller
require("../controllers/product_controller.php");

//check for 
if (isset($_POST['udpProd'])){
	$target_directory = "../images/";
	$target= $target_directory.basename($_FILES['pimg']['name']);
	$pidd = ($_POST['pidd']);
	$pcat = ($_POST['pCat']);
	$pbrand = ($_POST['pBrand']);
	$ptitle = ($_POST['ptitle']);
	$pprice = ($_POST['pprice']);
	$pdesc = ($_POST['pdesc']);
	$pimg = ($_FILES['pimg']['name']);
	$pkey = ($_POST['pkey']);

	

	//call a controller
	$check = update_product_ctr($pidd,$pcat,$pbrand,$ptitle,$pprice,$pdesc,$pimg,$pkey);
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