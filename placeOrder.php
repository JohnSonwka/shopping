<?php include_once('header.php'); ?>
	
	
	<div class="container-fluid">	
		
		<div class="mainContent" id="package">
			<!-- <section style="padding:0px;">
				<article> -->
					<h2 class="text-center">Easy shopping/Place Order</h2>
					<?php include('search.php'); ?>
				    
				<!-- </article>
			</section> -->
		<div class="col-md-12">
			<div class="col-md-3" style="padding-left: 45px;">
					<?php include_once('all_cat.php'); ?>
			</div>
			
			<div class="col-md-6">
				<?php $cat_id = isset($_GET['cat_id'])?$_GET['cat_id']:""; 
	 					include('config2.php');
						$sql=" SELECT * FROM categories WHERE cat_id = $cat_id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							    	$cat_id  = $row["cat_id"];
							        $image   = $row["image"];
							        $code    = $row["code"];
							        $price   = $row["price"];
							        $category   = $row["category"];
							        									
							    }
							}
							
							$conn->close();
				?>
							

		<!-- alternatively fetching data -->
				<form action="" method="post" id="" enctype="multipart/form-data">
						
					 <!--  <div class="form-group">
					    <label for="exampleInputEmail1">Choose Image</label>
					    <input type="file" class="form-control" id="exampleInputEmail" name="image" required="required" style="padding: 0px;">
					  </div> -->

					  <div class="form-group">
					    <label for="exampleInputPassword1">Code No.</label>
					    <input type="text" class="form-control" id="exampleInputPassword" placeholder="Code" name="code" required="required" value="<?php echo $code; ?>">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Price</label>
					    <input type="number" class="form-control" id="exampleInputEmail"  name="price"  value="<?php echo $price; ?>">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Category</label>
					    	<select name="category" id="" style="width: 420px !important;">
						           	<option value="">Select</option>
						           	<option value="Causal Shirt">Causal Shirt</option>
						           	<option value="Jeans">Jeans</option>
						           	<option value="Watch">Watch</option>
						           	<option value="Glass">Glass</option>
						           	<option value="Shoes">Shoes</option>
						           	<option value="T-Shirt">T-Shirt</option>
						    </select>
					  </div>

					  <button type="submit" class="btn btn-default" name="submit" style="float: right;width:80px;height:35px;">Confirm</button> <br> <br>
					  
				</form><br>
							<!-- alternatively fetching data -->
					 		
				</div> <!-- col-md-9 -->
		</div><!-- col-md-12 -->
		</div> <!-- mainContent -->
	</div> <!-- container-fluid -->

	<?php include_once('footer.php'); ?>







				