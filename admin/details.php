<?php session_start();

$conn=mysqli_connect("localhost","id13077735_saty","aqs%o(AAXDDCs>X9","id13077735_bookstore")or die("Can't Connect...");

$query = "select * from shipping_details";
$result = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html>
<head>
	<?php
		include("includes/head.php");
	?>
	<title>Data List</title>
	
	
</head>
<body>
	<div id="header">
		<div id="menu">
			<?php
				include("includes/header.php");
			?>
		</div>
	</div>


	<table align="center" border="1px" class="text-center mt-4 table-striped table-hover text-white mb-5">
		<tr>
			<th colspan="6"><h2>Details</h2></th>
		</tr>

		<tr>
			<th style="width: 100px;">SR NO.</th>
			<th style="width: 300px;">Name</th>
			<th style="width: 600px;">Product</th>
			<th style="width: 80px;">Qunatity</th>
			<th style="width: 100px;">Price</th>
			<th style="width: 125px;">Phone No</th>
		</tr>

		<?php 
			while($rows=mysqli_fetch_assoc($result))
				{
		?>
			<tr>
				<td><?php echo $rows['id']; ?></td>
				<td><?php echo $rows['name']; ?></td>
				<td><?php echo $rows['product']; ?></td>
				<td><?php echo $rows['qty']; ?></td>
				<td><?php echo $rows['price']; ?></td>
				<td><?php echo $rows['phone']; ?></td>
			</tr>
		<?php 
			}
		?>
	</table>
</body>
</html>