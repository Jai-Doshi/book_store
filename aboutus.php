<?php session_start(); 
	include("includes/config.php");
?>

<!DOCTYPE>

<html>
<head>
		<?php
			include("includes/head.php");
		?>
</head>

<body>
			<!-- start header -->
				<header>
					<div id="header">
						<div id="menu">
							<?php
								include("includes/header.php");
							?>
					</div>			
					</div>
					
				</header>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content" class="container-fluid">
						<div class="post">
							
							<h1 class="title text-center mt-5 text-info"><font face="Cooper Std"><i class="fa fa-eercast fa-spin text-info"></i> About Us</h1></font>
							<div class="entry">
								
								<p class="text-capitalize text-center">
									<p>The best place to buy Books.All fields all streams all books are available here at the best price.no need to go in store and wait for the queue to end.</p>
									<p>now buying books in just one click.this will help to save time and all things will be rulling on your fingers.you can easily order the books from here and also you can cancel the order within 24hrs.</p>
									<p>best books and services are available.
									only cash on delivery is available so on payment issues as well as book will be given to every individual hand to hand.</p>
								</p>
								<center><img src="images/founder.png" class="img-fluid"></center>
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
						
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
