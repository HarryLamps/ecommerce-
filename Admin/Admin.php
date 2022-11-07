<?php
session_start();

if(empty($_SESSION['role'])and $_SESSION['role']!= 1){
    header('Location:../view/login.php');
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<a href="../actions/logout.php"><button> logout</button></a>
<br>
<br>
<a href="Brand.php">Manage Brands</a>
<br>
<br>
<a href="Category.php">Manage Categories </a> <br>
<br>

<a href="Product.php">Manage Products</a>
</body>
</html>
