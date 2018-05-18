<!--Noa P Prada Schnor - Web Application Project May 2018. Header code (navbar)-->

<?php if(isset($_SESSION['user'])) { ?>
  <div class="col-md-12 top-menu"> Hi <?php echo $_SESSION['user']; ?> |  <a href="logout.php"><i class="fa fa-share-square-o"></i> logout </a></div>
<?php } ?>
<!--NAVBAR-->
<nav class="navbar" id="nav link"> <a class="navbar-brand" href="index.php"><img style="max-width:350px; margin-top: -7px;" src="images\teddybear-logo3.png" title="Teddy Bear" alt="teddyBear" width=20%></a>
  <div class="navbar">

    <ul class="nav nav-pills">
      <li class="nav-item" id="nav link"> <a class="nav-link" href="aboutus.php" id="nav link" style ="font-size: 21px; font-family: Amatic Sc, cursive; color:SlateBlue;">About us</a> </li>
      <li class="nav-item" id="nav link"> <a class="nav-link" href="products.php" id="nav link" style ="font-size: 21px; font-family: Amatic Sc, cursive; color:SlateBlue;">Products</a> </li>
      <li class="nav-item" id="nav link"> <a class="nav-link" href="contactus.php" id="nav link" style ="font-size: 21px; font-family: Amatic Sc, cursive; color:SlateBlue;">Contact us</a> </li>
    </ul>
    <!--NAV BUTTONS-->
    <ul class="nav justify-content-end">
      <li id="nav link">
        <button type="button" class="btn btn-outline-primary btn-sm">
        <a class="nav-link" href="loginRegister.php" id="nav link" style ="font-size: 21px; font-family: Amatic Sc, cursive; color:SlateBlue;">Login | Register</a>
        </button>
      </li>
      &nbsp;&nbsp;
      <li id="nav link">
        <button type="button" class="btn btn-outline-primary btn-sm">
        <a class="nav-link" href="cart.php" id="nav link" style ="font-size: 21px; font-family: Amatic Sc, cursive; color:SlateBlue;"> Cart
        
		<?php // check if there is a product added in the shopping
		if(isset($_SESSION['cart'])) {
			$arraycart = $_SESSION['cart'] ;
			if($arraycart) {
				echo '('.count($arraycart).')'; //show between brackets the number of products added in the shopping cart
			}	
		}
		?>
        
		</a>
        </button>
      </li>
    </ul>
  </div>
  <!--div navbar--> 
</nav>
<!--end of navbar--> 