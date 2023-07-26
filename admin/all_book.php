<?php 
session_start();
require('includes/config.php');

	$q="select * from book";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	?>

<!DOCTYPE>
<!--

Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Lotus Flower
Version    : 1.0
Released   : 20080501
Description: A two-column, fixed-width and lightweight template ideal for 1024x768 resolutions. Suitable for blogs and small websites.

-->
<html>
<head>
		<?php
			include("includes/head.php");
		?>
		<style>
			table{padding:5px;border:10px solid gray}
			td,th{padding:15px}
			
		</style>
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
<div id="logo-wrap">
<div id="logo">
		
</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post container-fluid">
			<h1 class="title"></h1>
			<div class="entry">
				
					<table border='1' WIDTH='100%'>
						<tr>
						<td colspan="7"><a href="addbook.php"><button class="btn btn-outline-success">Add New Book</button></a></td>
						</tr>
						<tr>
<td style="color:white" WIDTH='10%'><font face="Cooper Std">SR.NO</font></td>
<TD style="color:white" WIDTH='50%'><font face="Cooper Std">NAME</font></TD>
<TD style="color:white" WIDTH='20%'><font face="Cooper Std">PUBLISHER</font></TD>
<TD style="color:white" WIDTH='20%'><font face="Cooper Std">ISBN</font></TD>
<TD style="color:white" WIDTH='25%'><font face="Cooper Std">PRICE</font></TD>
<TD style="color:white" WIDTH='25%'><font face="Cooper Std">IMAGE</font></TD>
<TD style="color:white" WIDTH='25%'><font face="Cooper Std">DELETE</font></TD>				
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['b_nm'].'
										<td>'.$row['b_publisher'].'
										<td>'.$row['b_isbn'].'
										<td>'.$row['b_price'];
				echo "<td><img src='../$row[b_img]' width='50'/>";
										
										
									echo 	'<td><a href="process_del_book.php?sid='.$row['b_id'].'"><img src="images/drop.png" ></a>
												
									
									</tr>';
									$count++;
							}
						?>

					</TABLE>
				
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
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
