<?php
require('includes/config.php');
 session_start();


	
	
	
	$q = "select * from subcat where parent_id = ".$_GET['cat'];
	$res = mysqli_query($conn,$q) or die("Can't Execute Query..");
	
	$row1 = mysqli_fetch_assoc($res);
	
	if($_GET['catnm']==$row1['subcat_nm'])
	{
		header("location:booklist.php?subcatid=".$row1['subcat_id']."&subcatnm=".$row1["subcat_nm"]);
		
	}
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
				<div id="header">
					<div id="menu">
						<?php
							include("includes/header.php");
							//include("includes/imgscroll.php");
						?>
					</div>
				</div>
				<?php
								include("includes/sidebar.php");
							?>
				
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title"><?php echo $_GET['catnm'];?></h1>
							<div class="entry">
						
								<?php
									Do
									{
										
										echo '<li><a href="booklist.php?subcatid='.$row1['subcat_id'].'&subcatnm='.$row1["subcat_nm"].'">'.$row1['subcat_nm'].'</a></li>';
										//&subcatnm='.$row1["subcat_nm"].'
									}while($row1 = mysqli_fetch_assoc($res))
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
