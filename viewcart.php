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

<body>
		<header>
			<div id="header">
				<div id="menu">
					<?php
						include("includes/header.php");
						  
					?>
				</div>			
			</div>
			<div id="logo">
				<div id="menu">
					<?php
						//include("includes/imgscroll.php"); 
					?>
				</div>			
			</div>
			
		</header>
				
			<!-- end header -->
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					
					<div id="content">
						<div class="post container-fluid mt-5">
							<center><i class="fa fa-shopping-cart fa-5x text-info"></i></center>
							<h1 class="title text-center text-info"><font face="Cooper Std"> View Cart</h1></font>
							<div class="entry">
						
							<pre><?php
							//	print_r($_SESSION);
							?></pre>
						
							<form action="process_cart.php" method="POST">
							<table width="100%" border="0">
								<tr >
									<Td> <b>No
									<td> <b>Category
									<td name="prd"> <b>Product
									<td name="qty"> <b>Qty
									<td> <b>Rate
									<td name="prc"> <b>Price
									<td> <b>Delete
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<Td> '.$i.'
											<td> '.$x['cat'].'
											<td> '.$x['nm'].'
											<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
											<td> <a href="process_cart.php?id='.$id.'">Delete</a>
										</tr>
										';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
									}
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>Total:</h4>
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<Br>
								</table>						

								<br><br>
							<center>
							
							<a href="checkout.php" style="text-decoration: none; color: white;"><button class="btn btn-outline-info ">CONFIRM & PROCEED</button><a/>
								<br><hr>
								<div class="text-warning">
								<span>If Qunatity Is More Than One Plz Re-Calculate</span><br>
								<span>Only One At a Time Can Be Purchased</span><hr>
								</div>
							</center>
							</form>
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
