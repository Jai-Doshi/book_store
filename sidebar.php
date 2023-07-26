<?php
	session_start();
	require('includes/config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<?php
		include("includes/head.php");
	?>
</head>
<body>


	<header>
		<div id="header">
			<div id="menu">
				<?php
					include("includes/header.php"); 
				?>
			</div>			
		</div>
		
	</header>


	<section>
		<!-- start page -->
			<div class="container-fluid">
				
				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title text-center mt-5" style="color: slateblue;"><font face="Cooper Std">Welcome to</font> 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo '<font face="Cooper Std">Book Store</font>';
								}
							?>
							</h1>
							<div class="entry text-center">
								<br>
								
								<br>		
								
								<img src="images/logo.png" class="img-fluid">

								<br><br>
								
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					<!-- start sidebar -->
					<div id="sidebar">
						<?php
							include("includes/sidebar.php"); 
						?>
					</div>
					<!-- end sidebar -->
					
					<div style="clear: both;">&nbsp;</div>
				</div>
			</div>
				
			</div>
			<!-- end page -->
		</div>
	</section>


	<footer>
		<?php
			include("includes/footer.php");
		?>
	</footer>


</body>
</html>