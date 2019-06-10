<?php include_once('header.php'); ?>
	
	
	<div class="container-fluid">	
		
		<div class="mainContent" id="package">
			<!-- <section style="padding:0px;">
				<article> -->
					<h2 class="text-center">Easy shopping/Causal Shirt</h2>
					<?php include('search.php'); ?>
				    
				<!-- </article>
			</section> -->
		<div class="col-md-12">
			<div class="col-md-3" style="padding-left:45px;">
					<?php include_once('all_cat.php'); ?>
			</div>
			<div class="col-md-9">
				<?php if (isset($_POST["search"])) { 
				$key = $_POST["search"];
				
			?>
			
			<?php 
 					include('config.php');
					// $sql="SELECT pic, title, description FROM images ORDER BY pic_id DESC WHERE title like '%$key%'";
					$sql = "SELECT * FROM categories WHERE code like '%$key%' OR category like '%$key%' ";
					$result = mysqli_query($conn, $sql);
					$count=mysqli_num_rows($result);
					if($count == 0){
					 echo "<script>alert('Result Not Found');<script>";
					}else{
						 while($row=mysqli_fetch_array($result)){	
			?>
						<?php include('all_data.php'); ?>

				 		<?php } ?> 
				 	<?php } ?> 
			</div>
			<?php } ?> 
			</div>
		
		</div><!-- col-md-12 -->
		</div> <!-- mainContent -->
	</div> <!-- container-fluid -->

	<?php include_once('footer.php'); ?>







				