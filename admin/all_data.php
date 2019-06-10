						<div class="img-width" >	
						 	<section style="float:left;padding-right: 0px;">
								<article>
									<ul>
										<li><img src="photo/<?php echo $row['image'];?>"></li>
										<li><h4 class="text-center">Code: <?php echo $row['code'];?></h4></li>
										<li><h4 class="text-center">Price: <?php echo $row['price'];?></h4></li>
										<a href="delCat.php?cat_id=<?php echo $row['cat_id'];?>"><button  class="btn btn-default"  style="width:75px;height: 30px;background-color:#fff;margin-right:60px;">Delete</button></a>
										<a href="updateCat.php?cat_id=<?php echo $row['cat_id'];?>"><button  class="btn btn-default"  style="width:75px;height: 30px;background-color: #fff;">Update</button></a>
										
						  			</ul>
						   		</article>
							</section>
						</div>