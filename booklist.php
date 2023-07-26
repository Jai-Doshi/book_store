<?php

 session_start();

	require('includes/config.php');
	
	
	$cat=$_GET['subcatid'];
	
	$totalq="select count(*) \"total\" from book where b_subcat='$cat'";
	
	$totalres=mysqli_query($conn,$totalq) or die("Can't Execute Query...");
	$totalrow=mysqli_fetch_assoc($totalres);
	
	
	$page_per_page=8;
	
	$page_total_rec=$totalrow['total'];
	
	$page_total_page=ceil($page_total_rec/$page_per_page);
	
	
	if(!isset($_GET['page']))
	{
		$page_current_page=1;
	}
	else
	{
		$page_current_page=$_GET['page'];
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
							
						?>
					</div>
				</div>
				<?php
							
							
						?>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
							<div id="content">
								<div class="post container-fluid mt-5">
									<h1 class="title text-secondary"><?php echo $_GET['subcatnm'];?></h1>
									<div class="entry">
										
											<div class="container-fluid">

											<br><br><br><br><br>
											<?php
												
												include('includes/config.php');


												$k=($page_current_page-1)*$page_per_page;
											
												$query="select *from book where b_subcat='$cat' LIMIT ".$k .",".$page_per_page;
	
												$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	
												$count=0;
												while($row=mysqli_fetch_assoc($res))
												{
													if($count==0)
													{
														echo '<div class="row text-center">';
													}	
													echo '<div class="col-lg-3 col-md-6 col-12 mb-5">
														<a href="detail.php?id='.$row['b_id'].'&cat='.$_GET['subcatnm'].'" style="text-decoration:none;" class="text-secondary">
														<img src="'.$row['b_img'].'" width="150" height="200"class="mt-4 mr-2">
														<br>'.$row['b_nm'].'</a>
													</div>';
													$count++;							
													
													if($count==4)
													{
														echo '</div>';
														$count=0;
													}
												}
											?>
											
										
										
										</div>
										<br><br><br>
										<center>
										<?php

											
											if($page_current_page>1)
											{	
												echo '<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page-1).'" class="text-info" style="text-decoration:none;">Previous</a>';
											}

											for($i=1;$i<=$page_total_page;$i++)
											{
												echo '&nbsp;&nbsp;<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.$i.'"class="text-info" style="text-decoration:none;">'.$i.'</a>&nbsp;&nbsp;';
											}
											
											if($page_total_page>$page_current_page)
											{
												echo '<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page+1).'"class="text-info" style="text-decoration:none;">Next</a>';
											}

										?>
										</center>
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
			
				<br><br><br><br><br><br><br><br><br>
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
