
<nav class="navbar navbar-expand-lg navbar-light">
					<img src="images/logo.png" width="50" height="50" class="mr-1">
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					
					<ul class="navbar-nav ml-5">
						<li class="nav-item"><a class="nav-link" href="index.php"><i class="fa fa-home"> Home</i></a></li>
						
						<?php 
							if(isset($_SESSION['status']))
							{
								
								echo '<li class="nav-item"><a class="nav-link" href="logout.php"><i class="fa fa-power-off">   Logout</i></a></li>';
							}
							else
							{
								echo '<li class="nav-item"><a class="nav-link" href="register.php"><i class="fa fa-book">   Register</i></a></li>';
							}
						?>
						
						
						
						<li class="nav-item"><a class="nav-link" href="aboutus.php"><i class="fa fa-eercast">   About Us</i></a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php"><i class="fa fa-phone-square" style="font-size: 17px;">   Contuct</i></a></li>
						<li class="nav-item"><a class="nav-link" href="viewcart.php"><i class="fa fa-shopping-cart">   View Cart</i></a></li>

						<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bullseye">  Category</i></a>
							<ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
							<div class="ml-3">
								
								
											<?php
													
						
													$query="select * from category ";
						
													$res=mysqli_query($conn,$query);
														
													while($row=mysqli_fetch_assoc($res))
														{
															echo '<li><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'"style=color:white;"><i class="fa fa-dot-circle-o"> '.$row["cat_nm"].'</i></a></li>';
															//pass catid not catnm
														}
						
														mysqli_close($conn);
											?>
										</div>
							</ul>
						
						</li>
						
						<li class="nav-item"><a class="nav-link" href="login.php"><i class="fa fa-user">   Login</i></a></li>
						
					</ul>
					<form class="form-inline my-2 my-lg-0 ml-auto">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search  <i class="fa fa-search"></i></button>
			        </form>
				</div>
			</nav>

			