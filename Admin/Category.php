<?php
include("../controllers/product_controller.php");

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
<div class="container" style="width:700px">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-6">
							<h2>Category</h2>
						</div>
						<div class="col-sm-6">
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Category</span></a>		
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>

						<th>ID</th>
						<th>Name</th>
						<th style="width:200px;">Action</th>
					</tr>
				</thead>
				<tbody>
					<div style="overflow-y: scroll;">
					<?php
					$cat_list = get_all_cat_ctr();
					foreach ($cat_list as $cat) {
						$cid = $cat['cat_id'];
						$cname = $cat['cat_name'];
					    echo"
					    <tr>
					    <td>$cid</td>
						<td>$cname</td>
						<td>
							<a class ='btn btn-primary btn-sm' href='updateCategory.php?Cid=$cid''>Update</a>
						    <a class = 'btn btn-danger btn-sm remove'>Delete</a>
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
<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">


			<!-- Add product form -->
			<form action="../actions/add_category.php" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Add Category</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="cname" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add" name="addCat">
				</div>
			</form>


		</div>
	</div>
</div>

</body>
</html>