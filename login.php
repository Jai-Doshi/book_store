<?php session_start(); 
	include("includes/config.php");
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
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
						<!-- start content -->
				
							<div id="content">
								
								<div class="post container-fluid">
									<div class="row">
										<div class="col-md-4">
											
										</div>
										<div class="col-md-4">
											<center><i class="fa fa-user-o fa-3x  mt-5 text-info"></i></center>
									<h1 class="title text-center text-info"><font face="Cooper Std"> Login</font></h1>
						
									<div class="entry" style="margin: auto;">
									<br><br>
										<?php
											require('includes/config.php');
												if(isset($_SESSION['status']))
												{
													echo '<h2>Hello :  '.$_SESSION['unm'].'</h2>';
												}
												else
												{
													echo '<form action="process_login.php" method="POST">
															
																<b class="text-info"><font face="Cooper Std">Username:</font></b>
																<br><input type="text" name="usernm" class="form-control" >
																<br>
																
																
																<b class="text-info"><font face="Cooper Std">Password:</font></b>
																<br><input type="password" class="form-control" name="pwd" ><br>
																<input type="submit" class="btn btn-outline-success" id="x" value="Login"  />
															</form>';
												}
											?>
									
										
								<br>
								<h5>Dont Have a Account<a href="register.php" class="text-danger"> SignUp</a></h5>
							</div>
						</div>
						<div class="col-md-4"></div>
					</div>
				<br><br><br>
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

