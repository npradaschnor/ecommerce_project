<?php $title = ''; 

//Noa Pereira Prada Schnor - Web Applications Project May 2018. Home/Index Page.

//Start session
session_start();

session_destroy(); // Destroy session to be able to start new tests
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
  <div class="jumbotron" id="jumbotronDiv">
   <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 id="jumbotronTeddybear"class="text-center jumbotronTeddybear" style=" font-family:Amatic SC, cursive; color:SlateBlue; text-shadow: 1.5px 1px FireBrick; font-weight=bold">Teddy Bear</h1><br>
                <h4 class="text-center" id="jumbotronLove" style="color:SlateBlue;"><i>A friend for life</i></h4><br>
				<p id="jumbotronP" class="text-justify" style="font-size: 19px; font-family: 'Open Sans Condensed', sans-serif;">Teddy Bear is a friend from life! What’s the most universal doll that both boys and girls accept as a cuddly friend? So if you're ever thinking of buying a gift for a young kid and that gift happens to be some sort of stuffed animal get a teddybear.<br> 
				Check our Teddies there is no way you are not going to fall in love with one or with all Teddies. Shop our fantastic collection and discover the perfect teddy bear for your child. Choose from a giant teddy bear, to cute pint sized friends.</p>
            </div>
            <div class="col-lg-5">
                <img src="images/girl-797837__340.jpg" width=100% class="img-fluid rounded float-right" align="right">
            </div>
        </div><!--div row-->
      </div><!--div container-->
 </div><!--div jumbotron-->
 <!--end of jumbotron-->
 
 
<!--SLIDESHOW--> 
  <h2 class="text-center" id="topSales" style="color: FireBrick;">Top Sales</h2><br><br>
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-6 offset-md-3">
				<div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="hover">
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<a href="products.php"><img class="d-block img-fluid" title="Sleepy Teddy Bear" src="images\teddy-3094151__340.jpg" width= "600px" alt="First slide"></a>
						</div>
						<div class="carousel-item">
							<a href="products.php"><img class="d-block img-fluid" title="Spring Teddy Bear" src="images\teddy-3100391_960_720.jpg" width= "600px"  alt="Second slide"></a>
						</div>
						<div class="carousel-item">
							<a href="products.php"><img class="d-block img-fluid" title="Brown Teddy Bear with Bow" src="images\teddy-bear-2771252__340.jpg" width= "600px"  alt="Third slide"></a>
						</div>
						<div class="carousel-item">
							<a href="products.php"><img class="d-block img-fluid" title="I love you Teddy Bear" src="images\teddy-1641__340.jpg" width= "600px"  alt="Fourth slide"></a>
						</div>
	
					</div> <!--carousel-inner-->
				</div><!--caroulsel slide-->
			</div><!--col-->
		</div><!--row-->
	</div><!--container-fluid-->
<!--end of slideshow-->
  
 <!--FOOTER-->  
<?php
include("footer.php"); //Include footer's code
?>
<!---end of footer-->

</body>
</html>