<?php session_start();
	require('includes/config.php');
?>
<!DOCTYPE>

<html>
<head>
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
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
								<div class="post container-fluid mt-5">
									<h1 class="title"><?php echo $row['b_nm'];?></h1>
									<div class="entry">
										<?php
											$conn=mysqli_connect("localhost","id13077735_saty","aqs%o(AAXDDCs>X9","id13077735_bookstore")or die("Can't Connect...");
	
											$id=$_GET['id'];
											
											$q="select * from book where b_id=$id";
											
											$res=mysqli_query($conn,$q) or die("Can't Execute Query..");
											$row=mysqli_fetch_assoc($res);

											echo '<center>	<table border="0" width="100%">
												 <tr>
													<td><hr ></td>
												</tr>
												 <tr align="center" >
													 <td>Item Details</td>
												</tr>
												<tr>
													<td><hr ></td>
												</tr>
											 </table>
											
											<table border="0"  width="100%">
												<tr> 
													
													<td width="15%" rowspan="3">
														<center><img src="'.$row['b_img'].'" width="100"></center>
													
													</td>
													
												</tr>
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td align="right" width="10%">NAME</td>
																<td width="6%">: </td>
																<td align="left">'.$row['b_nm'].'</td>
															</tr>

															
															<tr>
																<td align="right">ISBN</td>
																<td>: </td>
																<td align="left">'.$row['b_isbn'].'</td>
																
															</tr>
															
																					
															<tr>
																<td align="right">Publisher </td>
																<td>: </td>
																<td align="left">'.$row['b_publisher'].'</td>
																
															</tr>											
															
															<tr>
																<td align="right"> Edition</td>
																<td>: </td>
																<td align="left">'.$row['b_edition'].'</td>
																
															</tr>
															
															<tr>
																<td align="right">  PAGES</td>
																<td>: </td>
																<td align="left">'.$row['b_page'].'</td>
															</tr>
															
															<tr>
																<td align="right"> PRICE</td>
																<td>: </td>
																<td align="left">'.$row['b_price'].'</td>
															</tr>
														</table>
										
														
													</td>
												</tr>
											</table>
										
												
											
											<table border="0" width="100%">
												 <tr>
													<td><hr ></td>
												</tr>
												 <tr align="center" >
													 <td>DESCRIPTION</td>
												</tr>
												<tr>
													<td><hr ></td>
												</tr>
																		
											 </table>
											 
											 '.$row['b_desc'].'
																				

											 
											 
											
											<table>
												
												 <tr>';
												 
												 if(isset($_SESSION['status']))
												 {
													echo ' <td><a href="process_cart.php?nm='.$row['b_nm'].'&cat='.$_GET['cat'].'&rate='.$row['b_price'].'">
														<br>
														<button class="btn btn-outline-primary">Add To Cart</button>
													</a></td>
													<td width="15%" rowspan="3">
														<a href="'.$row['b_pdf'].'">
															<button class="btn btn-outline-success">E Book
														</button>
														</a>
													
													</td>';
												}
												else
												{
													echo '<a href="login.php"><button class="btn btn-outline-warning">Please Login...</button></a></td>';
												}
												echo '</tr>
											</table></center>';
										?>
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
			<!-- end page --><br><br><br>
						<!-- start footer -->
						<div id="footer">
									<?php
										include("includes/footer.php");
									?>
						</div>
						<!-- end footer -->
</body>
</html>
