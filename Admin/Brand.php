<?php
include("../controllers/product_controller.php");
include("../settings/core.php");

?>
<html>
<body>
	<div class="container" style="width:700px">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-6">
							<h2>Brand</h2>
						</div>
						<!-- <div class="col-sm-6">
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Brand</span></a>		
						</div> -->
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
					$brand_list = get_all_brands_ctr();
					foreach ($brand_list as $brand) {
						$bid = $brand['brand_id'];
						$bname = $brand['brand_name'];
					    echo"
					    <tr>
					    <td>$bid</td>
						<td>$bname</td>
						<td>
							<a class ='btn btn-primary btn-sm' href='updateBrand.php?Bid=$bid''>Update</a>
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
			<form action="../actions/Add_brand.php" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Add Brand</h4>
					<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="bname" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add" name="addBrand">
				</div>
			</form>


		</div>
	</div>
</div>



</body>
</html>