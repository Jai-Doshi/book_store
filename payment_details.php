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
				
				
			<!-- end header -->
			<h1 class="title text-center mt-5 text-info"><font face="Cooper Std">Payment Options</font> </h1>
<div class="container">			
			<hr style="margin-left:260px;margin-right:260px;"></hr>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);font-size:20px;"><a href="#" onclick="payment()">Secure Online Payment</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);font-size:20px;"><a href="#" onclick="payment()">PayUmoney</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);font-size:20px;"><a href="#" onclick="payment()">PAYTM Wallet</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);font-size:20px;"><a href="#" onclick="payment()">Mobikwik</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);font-size:20px;"><a href="#" onclick="cash()">Cash On Delivery</a></div></br>

			<hr>
			<h5 class="text-warning">Cash On Delivery Is Preferable</h5>
			<hr>

			<script type="text/javascript">
				function cash()
				{
					var confirmmessage = "SuccessFull!!!";
					var go = "index.php";
					var message = "Action Was Cancelled..";

					if (confirm(confirmmessage)) {
						window.location = go;
					}
					else{
						alert(message);
					}
				}
				function payment()
				{
					alert('Action Was Cancelled...');
				}
			</script>


			