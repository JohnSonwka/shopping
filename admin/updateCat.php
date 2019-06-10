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
	 					include('config.php');
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
											<li><img src="photo/<?php echo $row['image'];?>" style="width:330px!important;height: 250px!important;"></li>
											<li><h4 class="text-center">Code: <?php echo $row['code'];?></h4></li>
											<li><h4 class="text-center">Price: <?php echo $row['price'];?></h4></li>
											<button type="submit" class="btn btn-default" id="searchform" style="width:75px;height: 30px;background-color:#fff;margin-right:120px;">Back</button> 
											<button type="" class="btn btn-default" style="width:75px;height:30px;background-color:#fff;">Update</button>

										</ul>
							   		</article>
								</section>
							</div>
					 		<?php } ?> 
					 	<?php } ?> 

				</div>
					 	<!-- fil up form -->
				<div class="col-md-4" style="box-shadow: 2px 1px 2px 1px grey;">
				<form action="" method="post" id="" enctype="multipart/form-data">
						
					  <div class="form-group">
					    <label for="exampleInputEmail1">Choose Image</label>
					    <input type="file" class="form-control" id="exampleInputEmail" name="image" required="required" value="photo/<?php echo $image ?>" style="padding: 0px;">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Code No.</label>
					    <input type="text" class="form-control" id="exampleInputPassword" placeholder="Code" name="code" value="<?php echo $code ?>" >
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Price</label>
					    <input type="number" class="form-control" id="exampleInputEmail" placeholder="Price" name="price" required="required" value="<?php echo $price ?>">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Category</label>
					    	<select name="category" id="" style="width: 435px !important;">
						           	<option value="">Select</option>
						           	<option value="Causal Shirt">Causal Shirt</option>
						           	<option value="Jeans">Jeans</option>
						           	<option value="Watch">Watch</option>
						           	<option value="Glass">Glass</option>
						           	<option value="Shoes">Shoes</option>
						           	<option value="T-Shirt">T-Shirt</option>
						    </select>
					  </div>

					  <button type="submit" class="btn btn-default" name="submit" style="float: right;width:80px;height:35px;">Update</button> <br> <br>

					  <!-- updating data -->
     				 <?php  
						 if(isset($_POST['submit'])){
							$target_dir = "photo/";
							$target_file = $target_dir . basename($_FILES["image"]["name"]);
							$uploadOk = 1;
							$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
							// Check if image file is a actual image or fake image

						    $check = getimagesize($_FILES["image"]["tmp_name"]);
						    if($check !== false) {
						        // echo "File is an image - " . $check["mime"] . ".";
						        $uploadOk = 1;
						    } else {
						        echo "File is not an image.";
						        $uploadOk = 0;
						    }

							//Check if file already exists
							if (file_exists($target_file)) {
							    echo "<script>alert('Sorry, file already exists.');</script>";
							    $uploadOk = 0;
							}
							//aloow certain file formats
							if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
								echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
								$uploadok=0;
							}	
						else{
							if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
								include('config.php');
								$sql1 = "SELECT * FROM categories WHERE image='". basename($_FILES["image"]["name"])."' ";
	              					$result = $conn->query($sql1);
	              					if($result->num_rows > 0){
	              						 echo "<script>alert('Sorry, Image already exist!');</script>";
	              					}
		              					else{
											$sql = "UPDATE categories SET image = '" .basename($_FILES["image"]["name"]). "', code='" .$_POST["code"]."', price='" .$_POST["price"]."', category='" .$_POST["category"]."'  WHERE cat_id = $cat_id";
											if ($conn->query($sql)===TRUE) {
												echo "<script>alert('Successfully Updated!');</script>";
											} else {
												echo "<script>alert('Error Updating file!');</script>";
												
											}

									}

									$conn->close();
							} else {
								echo "<script>alert('sorry there was an error!');</script>";
							}
							
							
						}
					} 	//isset if
					?>
					<!-- updating data -->

					  
				</form><br>
					 	<!-- fil up form -->
				</div> <!-- col-md-5 -->
		</div><!-- col-md-12 -->
		</div> <!-- mainContent -->
	</div> <!-- container-fluid -->

	<?php include_once('footer.php'); ?>







				