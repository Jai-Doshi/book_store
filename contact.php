<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE>

<html>
<head>
		<?php
			include("includes/head.php");
		?>
</head>
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
							<div id="content">
								<div class="post">
									<h1 class="title text-center mt-5 text-info"><font face="Cooper Std"><i class="fa fa-phone text-info"></i> Contuct Us</h1></font>
									
									<div class="entry text-info container-fluid" >
										<div class="row">
											<div class="col-md-4"></div>
											<div class="col-md-4">
										<form action="process_contact.php" method="POST">
												

											<br>Name :<br>
												<input class="form-control" type='text' name='nm' size=35>
												<br>
												
												E-mail ID:<br>
												<input class="form-control" type='text' name='email' size=35>
												<br>
												
												Query:<br>
												<textarea class="form-control" cols="40" rows="10" name='query' ></textarea>
												<br>
												<input  type='submit' class="btn-outline-info btn" name='btn' value='   OK   '  >

												
										</form>
									</div>
									
								</div>
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
