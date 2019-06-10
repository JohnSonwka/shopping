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
			
			<div class="col-md-4">
				<?php $cat_id = isset($_GET['cat_id'])?$_GET['cat_id']:""; ?>
				<?php 	 
	 					include('config2.php');
						$sql="SELECT * FROM categories WHERE cat_id = $cat_id ";
						$result = mysqli_query($conn, $sql);
						$count=mysqli_num_rows($result);
						if($count == 0){
						// if(mysqli_num_rows($result) == 0){
						 echo "No Image Found";
						}else{
							 while($row=mysqli_fetch_array($result)){
							 		$cat_id  = $row["cat_id"];
							        $image   = $row["image"];
							        $code    = $row["code"];
							        $price   = $row["price"];
							        $category   = $row["category"];	
				?>
							<div class="img-width" >	
							 	<section style="float:left;padding-right: 0px;">
									<article>
										<ul>
											<li><img src="admin/photo/<?php echo $row['image'];?>" style="width:330px!important;height: 250px!important;" class="img-responsive"></li>
											<li><h4 class="text-center">Code: <?php echo $row['code'];?></h4></li>
											<li><h4 class="text-center">Price: <?php echo $row['price'];?></h4></li>
											<a href="index.php"><button type="submit" class="btn btn-default" id="searchform" style="width:75px;height: 30px;background-color:#fff;margin-right:120px;">Back</button> </a>
											<button type="" class="btn btn-default" style="width:75px;height:30px;background-color:#fff;">Order</button>

										</ul>
							   		</article>
								</section>
							</div>
					 		<?php } ?> 
					 	<?php } ?> 

				</div>
					 	<!-- fil up form -->
				<div class="col-md-4" style="box-shadow: 2px 1px 2px 1px grey;">
				<form action="confirmOrder.php" method="post" id="" enctype="multipart/form-data">
						
						<h3 class="text-center">Booking Form</h3>
					 <div class="form-group">
					    <label for="exampleInputPassword1">Code No.</label>
					    <input type="text" class="form-control" id="exampleInputPassword"  name="code" value="<?php echo $code; ?>">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Price</label>
					    <input type="number" class="form-control" id="exampleInputEmail"  name="price"  value="<?php echo $price; ?>" >
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Size</label>
					    	<select name="size" id="" style="width: 435px!important;">
						           	<option value="S">S</option>
						           	<option value="M">M</option>
						           	<option value="L">L</option>
						           	<option value="XL">XL</option>
						           	<option value="XXL">XXL</option>
						    </select>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Name</label>
					    <input type="text" class="form-control" id="exampleInputPassword"  name="name" value="" required>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Address</label>
					    <input type="text" class="form-control" id="exampleInputEmail"  name="address"  value="" required>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Contact</label>
					    <input type="number" class="form-control" id="exampleInputEmail" name="contact" value="" required>
					  </div>

					  <button type="submit" class="btn btn-default" name="submit" style="float: right;width:105px;height:35px;">Confirm Order</button> <br> <br>
					  
				</form><br>
					 	<!-- fil up form -->
				</div> <!-- col-md-5 -->
		</div><!-- col-md-12 -->
		</div> <!-- mainContent -->
	</div> <!-- container-fluid -->

	<?php include_once('footer.php'); ?>







				