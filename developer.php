<?php session_start();?>

<!DOCTYPE>

<html>
<head>
		<?php
			include("includes/head.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/header.php");
						?>
					</div>
				</div>
				
				
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title"></h1>
							<div class="entry">
							
								<table  align="center" width="100%">
										<tr  bgcolor="#EEE9F3">
										
										
									<td align="center" width="100%"><b>Developer And Management Team</b></td>
										</tr>
										
										<tr><td><br><br></td></tr>
								<tr>
									<td >
												<strong><font color="#433" size="2">Information about Developers:</font></strong><br><br>
														<U><B> Abhishek Sharma  :</B></U><BR><br>
														<UL>
														<LI>Mobile No.<font color="purple">  9015322640</font></LI>
														</UL>
														<U><B>Jai Doshi</B></U><BR>		<br>		
														<UL>
														<LI>Mobile No.<font color="purple">  7021181116</font></LI>
														</UL>
														<U><B> Yash Panda  :</B></U><BR><br>
														<UL>
														<LI>Mobile No.<font color="purple">  9015896540</font></LI>
														</UL>
												</strong>										
											<center><strong>Contact US :</strong><font color="purple">+91 1231231234</font></center><br><br>						
												The Software used in TheBookShop GreedyPDF&nbsp;:<font color="purple">PHP,MYSQL,APACHE,XAMPP.</font> 
									</td>
								</tr>
								</table>
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
