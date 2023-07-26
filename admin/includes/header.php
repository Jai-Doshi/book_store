


<nav class="navbar navbar-expand-lg navbar-dark">
					<img src="images/logo.png" width="50" height="50" class="mr-1">
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					
					<ul class="navbar-nav ml-5">
						<li class="nav-item"><a class="nav-link" href="index.php"><i class="fa fa-home"> Home</i></a></li>
						<li class="nav-item"><a class="nav-link" href="category.php"><i class="fa fa-eercast">   Category</i></a></li>
						<li class="nav-item"><a class="nav-link" href="subcategory.php"><i class="fa fa-bullseye">   SubCategory</i></a></li>
						<li class="nav-item"><a class="nav-link" href="all_book.php"><i class="fa fa-book">   Books</i></a></li>
						<li class="nav-item"><a class="nav-link" href="details.php"><i class="fa fa-shopping-cart">   Orders</i></a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php"><i class="fa fa-phone">   Contact</i></a></li>
						
						<?php
							if(isset($_SESSION['status'])&& $_SESSION['unm']=="admin")
							{
								echo '<li class="nav-item"><a class="nav-link" href="..//logout.php"><i class="fa fa-power-off">   Logout</i></a></li>';
							}
							
						?>
						
						
						
						
						
					</ul>
					<form class="form-inline my-2 my-lg-0 ml-auto">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search  <i class="fa fa-search"></i></button>
			        </form>
				</div>
			</nav>

			