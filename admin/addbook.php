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
			<h1 class="title text-center mt-5" style="color: slateblue;"><font face="Cooper Std">Add Book	</font></h1>
			<div class="entry" >
				<form action='process_addbook.php' method='POST' enctype="multipart/form-data" class="text-white">
				
						Book Name:
						<input type='text' class="form-control" name='name' size='40'>
						<br>
						
						Category:<br>
						<select class="form-control" name="cat">
								<?php
									
											
			
											$query="select * from category ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option disabled>".$row['cat_nm'];
												
												$q2 = "select * from subcat where parent_id = ".$row['cat_id'];
												
												$res2 = mysqli_query($conn,$q2) or die("Can't Execute Query..");
												while($row2 = mysqli_fetch_assoc($res2))
												{	
												
										echo '<option value="'.$row2['subcat_id'].'"> ---> '.$row2['subcat_nm'];
												
													
												}
												
											}
											mysqli_close($link);
								?>
						</select>
						<br>
						
						Description:
						<textarea class="form-control" cols="40" rows="6" name='description' ></textarea><br>
						
						
						Publisher:
						<input class="form-control" type='text' name='publisher' size='40'>
						<br>
						
						Edition:
						<input class="form-control" type='text' name='edition' size='40'>
						<br>
						
						ISBN:
						<input class="form-control" type='text' name='isbn' size='40'>
						<br>
						
						PAGES:
						<input class="form-control" type='text' name='pages' size='40'>
						<br>
						
						PRICE:
						<input class="form-control" type='text' name='price' size='40'>
						<br>
						
						Image:
						<input class="form-control" type='file' name='img' size='35'>
						<br>
						
						
						E-Book:
						<input class="form-control" type='file' name='ebook'  size='35'>
						
						<br><br>
						<input class="btn btn-outline-info" onclick="add()" type='submit'  value='   OK   '  >
				</form>
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

<script type="text/javascript">
	function add()
	{
					var confirmmessage = "Book Added";
					var go = "addbook.php";
					var message = "Action Was Cancelled..";

					if (confirm(confirmmessage)) {
						window.location = go;
					}
					else{
						alert(message);
					}
				}
				
</script>
</body>
</html>
