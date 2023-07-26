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
			<div class="entry" style="min-height:400px">
				<form action='process_addcategory.php' method='POST'>
						<h1 class="title text-center mt-5" style="color: slateblue;"><font face="Cooper Std">Add Category	</font></h1>
							<br/>
							<input type='text' class="form-control" name= 'cat' size='25'>
							<br>
							<input type='submit' class="btn btn-outline-success" onclick="add()" value='  ADD  '>
							
							<br><br>
				</form>
				<hr>
				<form action='process_addsubcategory.php' method='POST'>
							
				</form>			
							
									
							
					<form action='process_delcategory.php' method='POST'>	
						<h1 class="title text-center mt-5" style="color: slateblue;"><font face="Cooper Std">Delete Category	</font></h1>						
							<br>
								<select name="del" class="form-control">
									<?php
									
										
			
											$query="select * from category ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option>".$row['cat_nm'];
											}
			
											
									?>
								</select>
						
							<br>
							<input type='submit' class="btn btn-outline-danger" onclick="del()" value='  DELETE  '>
				

				<form action='process_delcategory.php' method='POST'>
							<hr>
				</form>		
			</div>
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
<!-- start footer --><br><br>
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
					var confirmmessage = "Category Added...";
					var go = "category.php";
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
					var confirmmessage = "Category Deleted...";
					var go = "category.php";
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
