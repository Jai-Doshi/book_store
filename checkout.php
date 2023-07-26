<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
 
require('includes/config.php'); 



	//echo $uid;
	if(isset($submit))
	{
	$query="insert into shipping_details(name,address,postal_code,city,state,phone,f_id,product,qty,price) values('$name','$address','$pc','$city','$state','$phone','$uid','$product','$qty','$price')";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	header("location:payment_details.php");
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
				<
				
			<!-- end header -->
			<!------------------------------->
			<h1 class="title text-center mt-5 text-info"><font face="Cooper Std">Shipping Details</font></h1> 	
			<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <div class="clr"></div>
				
            </div><!--/ freshdesignweb top bar -->    
		
      <div  class="form text-info">
    		<form id="contactform" method="post"> 
    			<label for="name">Name</label>
    			<input class="form-control" id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> <br>
    			 
    			<label for="email">Address</label>
    			<textarea class="form-control" id="address" name="address" placeholder="Address" required="" cols="55" row="10"type="email"> </textarea><br>
                
                <label for="username">Postal Code</label> 
    			<input class="form-control" id="pc" name="pc" placeholder="201001" required="" tabindex="2" type="text"> <br>
    			 
                <label for="city">City</label>    			<input class="form-control" type="text" id="city" name="city" required="" placeholder="delhi"><br>

                <label for="state">State</label>
    			<input class="form-control" type="text" id="state" name="state" required="" placeholder="delhi"> <br>

            <label for="phone">Mobile phone</label>
            <input class="form-control" id="phone" name="phone" placeholder="phone number" required="" type="text"> <br>

            <?php
				$tot = 0;
				$i = 1;
				if(isset($_SESSION['cart']))
				{

					foreach($_SESSION['cart'] as $id=>$x)
					{	
						echo '<label for="product">Product</label> 
   						<input type="text" id="product" name="product" required="" placeholder="delhi"
   						 value="'.$x['nm'].'" class="form-control"><br>';

   						echo '<label for="qty">Quantity</label>
   						<input type="text" id="qty" name="qty" required="" placeholder="delhi" value="'.$x['qty'].'" class="form-control"><br>';

   						echo '<label for="rate">Rate</label> 
   						<input type="text" id="rate" name="rate" required="" placeholder="delhi" value="'.$x['rate'].'" class="form-control"><br>';

   						echo '<label for="price">Total Price</label>
   						<input type="text" id="price" name="price" required="" placeholder="delhi" value="'.($x['qty']*$x['rate']).'" class="form-control"><br>';
										
						$tot = $tot + ($x['qty']*$x['rate']);
						$i++;
					}
				}
								
			?>
			<br>
            <input class="buttom btn btn-outline-info" name="submit" id="submit" tabindex="5" value="Confirm & Proceed" type="submit"> 	 
   </form> 
</div>      
</div>

</body>