<?php session_start();

	if(!(isset($_SESSION['status'])&& $_SESSION['unm']=="admin"))
	{
		header("location:../index.php");
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
<div id="logo-wrap">
<div id="logo">
		<?php
			//include("includes/imgscroll.php");
		?>
</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title text-center mt-5" style="color: slateblue;"><font face="Cooper Std">Welcome to Admin...	</font></h1>
			<div class="entry">
				
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
