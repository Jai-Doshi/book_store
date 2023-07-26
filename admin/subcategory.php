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
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
			<h1 class="title"></h1>
			<div class="entry">
				
				<form action='process_addsubcategory.php' method='POST'>
							<h1 class="title text-center mt-5" style="color: slateblue;"><font face="Cooper Std">SubCategory	</font></h1>
							<br><br>
							<h4 class="title  mt-5" style="color: slateblue;"><font face="Cooper Std">Parent Category	</font></h4>
									
										<select  name="parent" class="form-control">
											<?php
											
												require('includes/config.php');
					
													$query="select * from category ";
					
													$res=mysqli_query($conn,$query);
													
													while($row=mysqli_fetch_assoc($res))
													{
														echo "<option value='".$row['cat_id']."'>".$row['cat_nm'];
														//PASS ID NOT NAME
													}
					
													mysqli_close($link);
											?>
										</select>
									
									
							<h4 class="title  mt-5" style="color: slateblue;"><font face="Cooper Std">Sub Category	</font></h4>
									
										<input type='text' class="form-control" name= 'subcat' size='25'>
										<br>
										<input type='submit' class="btn btn-outline-primary"  onclick="add()" value='  ADD  '>
									
									<br><br>	
				</form>
				<hr>
				<form action='process_addcategory.php' method='POST'>
				</form>			
						
				<form action='process_delsubcategory.php' method='POST'>
						
						<h4 class="title  mt-5" style="color: slateblue;"><font face="Cooper Std">Delete Sub Category	</font></h4>					
							
								<select  name="subcatnm" class="form-control">
									<?php
									
										
			
											$query="select * from category ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option>".$row['cat_nm'];
												$qq = "select * from subcat where parent_id=".$row['cat_id'];
												
												$ress = mysqli_query($conn,$qq) or die("wrong delete subcat query..");
												while($roww = mysqli_fetch_assoc($ress))
												{
													echo "<option value='".$roww['subcat_id']."'> ---> ".$roww['subcat_nm'];
												}
												
											}
			
											mysqli_close($link);
									?>
								</select>
						
							<br>
							<input type='submit' class="btn btn-outline-danger"  onclick="add()"  value=' DELETE '>
				

				<form action='process_delsubcategory.php' method='POST'>
				</form>
			</div>
			</form>
		</div>
		<div class="col-md-4"></div>
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

<script type="text/javascript">
				function add()
				{
					var confirmmessage = "SubCategory Added...";
					var go = "subcategory.php";
					var message = "Action Was Cancelled..";

					if (confirm(confirmmessage)) {
						window.location = go;
					}
					else{
						alert(message);
					}
				}
				function del()
				{
					var confirmmessage = "SubCategory Deleted...";
					var go = "subcategory.php";
					var message = "Action Was Cancelled..";

					if (confirm(confirmmessage)) {
						window.location = go;
					}
					else{
						alert(message);
					}
				}
			</script>

</html>
