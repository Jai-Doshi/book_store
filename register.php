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
								
								<div class="post">
									<center><i class="fa fa-user fa-3x mt-5 text-info"></i></center>
									<h1 class="title text-center text-info" ><font face="Cooper Std"> Register</font></h1>
						
									<div class="entry">
									<br><br>
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<script> alert("You are successfully Registered..");</script>';
												echo '<br><br>';
											}
										
										?>
									
										<table class="text-center text-info" style=" text-align: center; margin: auto;">

											<form action="process_register.php" method="POST" class="form">
												<tr>
													<td><b>Full Name :</b>&nbsp;&nbsp;</td>
													<td><input class="form-control" type='text' size="30" maxlength="30" name='fnm'></td>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													 <td><b>User Name :</b>&nbsp;&nbsp;</td>
													 <td><input class="form-control" type='text' size="30" maxlength="30" name='unm'></td>
													 <td>&nbsp;</td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Password :</b>&nbsp;&nbsp;</td>
													<td><input class="form-control" type='password' name='pwd' size="30"></td>
													 
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Confirm Password:</b>&nbsp;&nbsp;</td>
													<td><input class="form-control" type='password' name='cpwd' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Gender:</b>&nbsp;&nbsp;</td>
													<td><input type="radio"  value="Male" name="gender" id='m'><label> Male</label>&nbsp;&nbsp;&nbsp;
														<input type="radio" value="Female" name="gender" id='f'><label>Female</label></td>
														<td>&nbsp;</td>
												</tr>
												
												<tr><td>&nbsp;</tr>
																				
												<tr>
													<td><b>E-mail Address:</b>&nbsp;&nbsp;</td>
													<td><input class="form-control" type='text' name='mail' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Contact No.:</b>&nbsp;&nbsp;</td>
													<td><input class="form-control" type='text' name='contact' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												
												<tr>
													<td><b>City:</b>&nbsp;&nbsp;</td>
													<td>
													<select style="width: 195px;" name="city" class="form-control">
														
															<option>Ahmedabad
															<option>Baroda
															<option>Jamnagar
															<option>Rajkot
															<option>Porbandar
															<option>Anand
															<option>Surat
															<option>Surendranagar
															<option>Jamnagar
															<option>Junagadh
															<option>Amreli
															<option>Bhavnagar
															<option>Mehsana
															
														
													</select>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												
												
												<tr>
													<td colspan='2' align='center'>
														<input type='submit' class="btn btn-outline-info" value="  OK  ">
													</td>
												</tr>
											</form>
										</table>
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
