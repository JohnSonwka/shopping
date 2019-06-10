						<div class="img-width" >	
						 	<section style="float:left;padding-right: 0px;">
								<article>
									<ul>
										<li><a href="orderCat.php?code=<?php echo $row['code'];?>"><img src="admin/photo/<?php echo $row['image'];?>" class="img-responsive"></a></li>
										<li><h4 class="text-center">Code: <?php echo $row['code'];?></h4></li>
										<li><h4 class="text-center">Price: <?php echo $row['price'];?></h4></li>
										<a href="orderCat.php?cat_id=<?php echo $row['cat_id'];?>"><button class="btn btn-default" style="width:75px;height: 30px;background-color:#fff;margin-right:60px;">View</button></a>
										<a href="orderCat.php?cat_id=<?php echo $row['cat_id'];?>"><button type="" class="btn btn-default" style="width:75px;height:30px;background-color:#fff;">Order</button></a>

									</ul>
						   		</article>
							</section>
						</div>