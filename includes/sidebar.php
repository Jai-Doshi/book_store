<ul style="list-style: none;">
			

			
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><i class="fa fa-bullseye">  Category</i></a>
				<ul class="dropdown-menu" style="background-color: slateblue;" aria-labelledby="navbarDropdown">
				<div class="ml-3">
					
					
					<!--
					<li><a href="#">Economics</a></li>
					<li><a href="#">Fiction</a></li>
					<li><a href="#">Forestry & WildLife</a></li>
					<li><a href="#">Health & Physics</a></li>
					<li><a href="#">Historical</a></li>
					<li><a href="#">Social</a></li>
					<li><a href="#">Sports & Physical Education</a></li>
					<li><a href="#">Terrorism</a></li>
					<li><a href="#">Tourism</a></li>
					<li><a href="#">Tracking </a></li>
					<li><a href="#">Yoga</a></li>
					-->
								<?php
										
			
										$query="select * from category ";
			
										$res=mysqli_query($conn,$query);
											
										while($row=mysqli_fetch_assoc($res))
											{
												echo '<li style="list-style:none; margin-right:auto;"><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'" style="color:white;><i class="fa fa-dot-circle-o">'.$row["cat_nm"].'</i></a></li>';
												//pass catid not catnm
											}
			
											mysqli_close($conn);
								?>
							</div>
				</ul>
			
			</li>
			
		</ul>