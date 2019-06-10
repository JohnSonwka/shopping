<?php include_once('header.php'); ?>
	
	
	<div class="container-fluid">	
		
		<div class="mainContent" id="package">
			<!-- <section style="padding:0px;">
				<article> -->
					<h2 class="text-center">Easy shopping/T-Shirt</h2>
					<?php include('search.php'); ?>
				    
				<!-- </article>
			</section> -->
		<div class="col-md-12">
			<div class="col-md-3" style="padding-left:45px;">
					<?php include_once('all_cat.php'); ?>
			</div>
			<div class="col-md-9">
				<?php 
 					include('config.php');
					$sql="SELECT * FROM categories WHERE category='T-Shirt' ORDER BY price ASC";
					$result = mysqli_query($conn, $sql);
					$count=mysqli_num_rows($result);
					if($count == 0){
					 echo "No Image Found";
					}else{
						 while($row=mysqli_fetch_array($result)){	
			?>
						<?php include('all_data.php'); ?>

				 		<?php } ?> 
				 	<?php } ?> 
			</div>
		
		</div><!-- col-md-12 -->
		</div> <!-- mainContent -->
	</div> <!-- container-fluid -->

	<?php include_once('footer.php'); ?>







				