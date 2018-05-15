<?php

//Noa Pereira Prada Schnor - Web Applications Project May 2018.

//Include connection to database
include("conn.php");
//session_destroy();

//Check if was selected Update
if(isset($_POST['update'])) {

	//Receives the products that have been checked for update
	$v_update = $_POST['prod'];
		
	foreach($v_update as $key=>$value) { //Loop in the variable data
		if($value['amount'] <= 0) { //If the amount value is negative, it excludes the item from the session variable 'cart'
			unset($_SESSION['cart'][$key]);
		}else {
			$_SESSION['cart'][$key]['amount'] = $value['amount']; // Updates the quantity of the item in the session variable 'cart'
		}
	}

}//End of IF

//CHECK IF DELETE OPTION WAS SELECTED
if(isset($_GET['delete'])) {
	//GET RECEIVED PRODUCTS FOR EXCLUSION
	$delete = $_GET['delete'];
	
	//DESTROY THE SPECIFIED VARIABLE
	unset($_SESSION['cart'][$delete]);
}//End of IF

//CHECK IF VARIABLE ADD WAS SENT WITH PRODUCT ID TO BE ADDED
if(isset($_GET['add'])) {
	$v_prod = $_GET['add'];
	$cart = array();
	//CHECK PRODUCT DATA
	$query_select = "SELECT * FROM products_db WHERE id = ".$v_prod; // sql query - products table
	$select = mysqli_query($conn, $query_select); // Executes the query
	if($select) {
		$row = mysqli_fetch_array($select); //puts the product data in the variable $ row
		
		//IF THERE ARE DATA ON THE CART, RECOVER THE SESSION VALUES FOR THE VARIABLE $ cart
		$cart = $_SESSION['cart'];
		//INCLUDES PRODUCT DATA IN THE SHOPPING CART MATRIX
		$cart[$row['id']]['id'] = $row['id'];
		$cart[$row['id']]['product_name'] = $row['product_name'];
		$cart[$row['id']]['image'] = $row['image'];
		$cart[$row['id']]['product_descriptions'] = $row['product_descriptions'];
		$cart[$row['id']]['price'] = $row['price'];
		$cart[$row['id']]['amount'] = 1;
		//RECORD ARRAY AT THE SESSION
		$_SESSION['cart'] = $cart;
	}
	//CHECK IF THE USER IS LOGGED IN
	if(!$_SESSION['logged']) {
		$redirect = "products.php"; //Page that will be redirected
		header("location:$redirect"); // Redirection
	}	
	
}

//VERIFY IF THE PRODUCT VARIABLE WAS SENT WITH THE PRODUCT ID FROM PRODUCT DETAILS PAGE
if(isset($_POST['product'])) {
	$v_prod = $_POST['product'];
	$cart = array();
	//CHECK PRODUCT DATA
	$query_select = "SELECT * FROM products_db WHERE id = ".$v_prod; // sql query - products table
	$select = mysqli_query($conn, $query_select); // Executes the query
	if($select) {
		$row = mysqli_fetch_array($select); //puts the product data in the variable $ row
		
		//IF THERE ARE DATA ON THE CART, RECOVER THE SESSION VALUES FOR THE VARIABLE $ cart
		$cart = $_SESSION['cart'];
		//INCLUDES PRODUCT DATA IN THE SHOPPING CART MATRIX
		$cart[$row['id']]['id'] = $row['id'];
		$cart[$row['id']]['product_name'] = $row['product_name'];
		$cart[$row['id']]['image'] = $row['image'];
		$cart[$row['id']]['product_descriptions'] = $row['product_descriptions'];
		$cart[$row['id']]['price'] = $row['price'];
		$cart[$row['id']]['amount'] = $_POST['qty'];
		//RECORD the ARRAY of THE SESSION
		$_SESSION['cart'] = $cart;
	}
}

//CHECK IF THE USER IS LOGGED IN
if(!$_SESSION['logged']) { // If the user is not logged in he redirects it to login / registration page
	$redirect = "loginRegister.php"; //Page that will be redirected
	header("location:$redirect"); // Redirection
}else { // If logged in, let him see the cart
?>
		
<!doctype html>
<html lang="en">
<?php
include("head.php"); // Includes head's code
?>
<body>
<?php
include("header.php"); //Includes header's code
?>
  
  
 <!--JUMBOTRON-->
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1" style="font-family:'Amatic SC', cursive; color:SlateBlue; font-weight:bold;">
                    Teddy Bear <br><small><i>A friend for life</small></i></h1>
            </div>
        </div><!--div row-->
    </div><!--div container-->
</div>
<!--end of jumbotron--> 
 
   <div class="container-fluid">
	<div class="row">
    	<div class="col-lg-12">
                <table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
                    <form action="cart.php" method="post">
                    <input type="hidden" name="update" value="1">
                    <?php
                    if(isset($_SESSION['cart'])) { 
					$cart = $_SESSION['cart'];
					$total = 0;
					foreach($cart as $key => $value) {
						$total += ($value['price']*$value['amount']);
					?>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="<?php echo $value['image']; ?>" alt="<?php echo $value['product_name']; ?>" class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?php echo $value['product_name']; ?></h4>
										<p><?php echo $value['product_descriptions']; ?></p>
									</div>
								</div>
							</td>
							<td data-th="Price">€ <?php echo number_format($value['price'], 2, '.', ''); ?></td>
							<td data-th="Quantity">
								<input type="number" name="prod[<?php echo $key;?>][amount]" class="form-control text-center" value="<?php echo $value['amount']; ?>">
							</td>
							<td data-th="Subtotal" class="text-center">€ <?php echo number_format(($value['price']*$value['amount']), 2, '.', ''); ?></td>
							<td class="actions" data-th="">
								<a href="#" onClick="javascript: document.forms[0].submit();" title="Update amount"><img src="images/refresh.png" width="25" height="25" alt=""/></a>
								<a href="cart.php?delete=<?php echo $key;?>"><img src="images/delete.png" width="25" height="25" alt=""/></a>								
							</td>
						</tr>
                    <?php } 
					}
					?>
                    </form>
					</tbody>
					<tfoot>
						<tr>
							<td><a href="products.php" class="btn btn-outline-primary btn-sm" style="padding:25px 30px"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total € <?php echo number_format($total, 2, '.', ''); ?></strong></td>
							<td><a href="#" class="btn btn-outline-primary btn-sm" style="padding:25px 30px">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
    </div>
   </div>
</div>
<br><br>
<?php
	include("footer.php"); // Includes footer's code
	mysqli_close($conn); //Close connection to database
?>
 </body>
</html>
        
<?php
}
?>
