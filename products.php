<?php

// Noa Pereira Prada Schnor. Web Application Project May 2018.  Page that displays Products

$title = "Products"; //Title

// Include code to connect to database
include("conn.php");

// executes the query in the table of products
$query_select = "SELECT * FROM products_db ORDER BY id ASC"; // Query sql - table of products
$select = mysqli_query($conn, $query_select); // Executes the query

?>
<!doctype html>
<html lang="en">
<?php
include("head.php"); // Include the head's code
?>
<body>
<?php
include("header.php"); //Include the header's code
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

<!--LIST OF PRODUCTS-->
<div class="container">
    <div class="row">
    <?php
	// loop pelos registros de produtos
		while($row = mysqli_fetch_assoc($select))
    	{
	?>
  
  <!--PRODUCTS1 - SLEEP TEDDY BEAR-->
        <div class="col-md-4">
              <div class="thumbnail">
                 <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['product_name']; ?>" class="img-fluid">
                <div class="caption">
                  <h4 class="pull-right" style="font-family:'Open Sans Condensed', sans-serif; color:FireBrick;font-weight:bold; font-size:26px;">€<?php echo number_format($row['price'], 2, '.', ''); ?></h4>
                  <h4><a href="products-details.php?id=<?php echo $row['id']; ?>" style="font-family:'Open Sans Condensed', sans-serif; color:SlateBlue; font-weight:bold; font-size:30px;"><?php echo $row['product_name']; ?></a></h4>
                  <p style="font-family:'Open Sans Condensed', sans-serif; font-size:18px;"><?php echo $row['product_descriptions']; ?></p>
                </div><!--div caption-->
				<br>
				<!--BUTTONS-->
                <div class="btn-group text-center">
					<button type="button" class="btn btn-primary" style="font-family:'Open Sans Condensed', sans-serif;"><i class="fa fa-shopping-cart"></i><a href="cart.php?add=<?php echo $row['id']; ?>" style="color:#fff;">Add To Cart</a></button>
                    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#product_view" style="font-family:'Open Sans Condensed', sans-serif;"><a href="products-details.php?id=<?php echo $row['id']; ?>"><i class="fa fa-search"></i> More Info</a></button>
                </div><!--div btn group-->
               </div><!--div thumbnail-->
            </div> <!--div col-md-4-->
 
 <?php
	}
	?>
    </div><!--div row-->
</div><!--div container-->
<br><br>


<?php
include("footer.php");
mysqli_close($conn); //Close connection to database
?>
</body>
</html>
