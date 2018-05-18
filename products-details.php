<?php
//Noa Pereira Prada Schnor - Web Applications Project May 2018. Page that displays products details when the user hit the "More Info" button on Products.php.

// Include connectio to database
include("conn.php");

//CHECK IF PRODUCT CODE HAS BEEN SENT
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$query_select = "SELECT * FROM products_db WHERE id = $id"; // sql query - products table
	$select = mysqli_query($conn, $query_select); // Executes the query
	if (mysqli_num_rows($select) > 0) { // Checks if any line returned from query
		$productArray = mysqli_fetch_assoc($select); // Stores product data in $ productArray variable
	}else { // If the query did not return anything, it returns an error message
		echo "<script language='javascript' type='text/javascript'>alert('Invalid product code');window.location.href='products.php'</script>";
	}
}else { // If not sent the variable id returns an error message
	echo "<script language='javascript' type='text/javascript'>alert('Invalid product code');window.location.href='products.php'</script>";
	
}
?>

<!doctype html>
<html lang="en">

<!--HEAD-->
<?php
include("head.php"); // Include head's code
?>
<!--end of head-->

<body>

<!--HEADER-->
<?php
include("header.php"); //Include header's code
?>
<!--end of header-->

 <!--JUMBOTRON-->
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1" style="font-family:'Amatic SC', cursive; color:SlateBlue; font-weight:bold;">
                    Teddy Bear <br><small><i>A friend for life</i></small></h1>
            </div><!--div col-->
        </div><!--div row-->
    </div><!--div container-->
</div><!--div jumbotron-->
<!--end of jumbotron--> 
  
<!---PRODUCT-->
<div class="container-fluid" id="product-section">
  <div class="row">
    <div class="col-md-6"> <img src="<?php echo $productArray['image']; ?>" class="img-fluid" width=80% alt="<?php echo $productArray['product-name']; ?>"> </div><!--div col-->
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <h3  style="font-family:'Open Sans Condensed', sans-serif; color:SlateBlue; font-weight:bold; font-size:35px;"><?php echo $productArray['product_name']; ?></h3>
          <br>
          <br>
        </div><!--div col-->
      </div> <!--div row-->
      <div class="row">
        <div class="col-md-12">
          <p class="text-justify" style="font-family:'Open Sans Condensed', sans-serif;font-size:20px;"><?php echo $productArray['product_descriptions']; ?></p>
          <br>
          <div class="row">
            <div class="col-md-12">
              <div class="description">
                <p class="text-justify" style="font-family:'Open Sans Condensed', sans-serif;font-size:20px;"><?php echo $productArray['details']; ?></p>
                <br>
              </div><!--div description-->
            </div><!--div col-->
          </div><!--div row-->
         
          <div class="row">
            <div class="col-md-12 bottom-rule">
              <h4 class="product-price text-center" style="font-family:'Open Sans Condensed', sans-serif; color:FireBrick;font-weight:bold;font-size:30px;">€ <?php echo number_format($productArray['price'], 2, '.', ''); ?></h4>
              <hr>
            </div><!--div col-->
          </div><!--div row-->
          <!-- end row --> 
          <br>
          <form action="cart.php" method="post"><!--FORM ADD TO CART-->
          <div class="row add-to-cart"> 
            <div class="col-md-4 product-qty">
            	<span class="btn btn-default btn-lg btn-qty" id="plus"> 
            		<span class="fa fa-plus" aria-hidden="true"></span>
                 </span><!--span btn-->
                 <input type="hidden" name="product" value="<?php echo $productArray['id']; ?>">
              <input type="text" class="btn btn-outline-primary btn-lg btn-qty pull-right" name="qty" id="btn-qty"  style="font-family:'Open Sans Condensed', sans-serif;" value="1" />
              <span class="btn btn-default btn-lg btn-qty" id="minus"> 
              	<span class="fa fa-minus" aria-hidden="true"></span> 
              </span> <!--span btn-->
            </div><!--div col-->
            <div class="col-md-3">
              <button class="btn btn-lg btn-primary btn-full-width pull-left"  style="font-family:'Open Sans Condensed', sans-serif;" > Add to Cart </button>
            </div><!--div col-->
           </div><!-- end row -->
          </form> <!--end of form-->
		  
          <div class="row"> 
            <div class="col-md-7 text-center"> <span class="monospaced" style="font-family:'Open Sans Condensed', sans-serif; font-size:18 px;">In Stock</span> </div><!--div col-->
          </div><!--div row-->
          		  
          <div class="row">
            <div class="col-md-12 bottom-rule top-10">
			</div><!--div col-->
          </div><!--div row-->
                    
        </div><!--div col-lg-12-->
		
      </div>
      <!-- end row --> 
	  
    </div><!--div col-md-6-->
  </div> <!-- end row --> 
</div>
<!-- end container -->

<!--FOOTER-->
<?php
include("footer.php"); //Include footer's code
//end of footer

mysqli_close($conn); //Close connection to database
?>

</body>
</html>