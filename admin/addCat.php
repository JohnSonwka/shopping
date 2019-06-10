<?php include_once('header.php'); ?>
	
	
	<div class="container-fluid">	
		
		<div class="mainContent" id="package">
			<!-- <section style="padding:0px;">
				<article> -->
					<h2 class="text-center">Easy shopping/add Category</h2>
					<?php include('search.php'); ?>
				    
				<!-- </article>
			</section> -->
		<div class="col-md-12">
			<div class="col-md-4" style="padding-left:45px;">
					<?php include_once('all_cat.php'); ?>
			</div>
			<div class="col-md-4" style="box-shadow: 2px 0px 2px 1px grey;padding: 15px;">
				<form action="" method="post" id="" enctype="multipart/form-data">
						
					  <div class="form-group">
					    <label for="exampleInputEmail1">Choose Image</label>
					    <input type="file" class="form-control" id="exampleInputEmail" name="image" required="required" style="padding: 0px;">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Code No.</label>
					    <input type="text" class="form-control" id="exampleInputPassword" placeholder="Code" name="code" required="required">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Price</label>
					    <input type="number" class="form-control" id="exampleInputEmail" placeholder="Price" name="price" required="required">
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

					  <button type="submit" class="btn btn-default" name="submit" style="float: right;width:80px;height:35px;">Add</button> <br> <br>

					  <!-- inserting data -->
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
							$sql1 = "SELECT * FROM categories WHERE image='". basename($_FILES["image"]["name"])."' OR code = '" . $_POST["code"] . "' ";
	              					$result = $conn->query($sql1);
	              					if($result->num_rows > 0){
	              						 echo "<script>alert('Sorry, Image/Code already exist!');</script>";
	              					}
	              					else{
									$sql = "INSERT INTO categories (image,code,price,category)
										VALUES ('" .basename($_FILES["image"]["name"]) ."', '" . $_POST["code"] . "', '" . $_POST["price"] . "','". $_POST["category"] . "')";

										if ($conn->query($sql) === TRUE) {
										    echo "<script>alert('New Item Has been Added Successfully!');</script>";
										} else {
										    echo "<script>alert('There was an Error')<script>";
										}
									}

									$conn->close();
							} else {
								echo "<script>alert('sorry there was an error!');</script>";
							}
							
							
						}
					}
					?>
					<!-- inserting data -->

					  
				</form><br>
			</div>
			<div class="col-md-4"></div>
		
		</div><!-- col-md-12 -->
		</div> <!-- mainContent -->
	</div> <!-- container-fluid -->

	<?php include_once('footer.php'); ?>







				