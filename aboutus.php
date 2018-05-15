<?php 
//Noa Pereira Prada Schnor - Web Applications Project May 2018

$title = 'About us'; //title
//Start session
session_start();
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
                    About us <br> <small>We do love Teddy Bear</small></h1>
            </div>  <!--div col-->
        </div>  <!--div row-->
    </div>  <!--div container-->
</div>  <!--div jumbotron-->
  <!--end of jumbotron-->
  
  
  <div class="container-fluid">
	<div class="row">
		<div class="col-lg-7">	
			<p class="text-justify" style="font-size:18px; font-family: 'Open Sans Condensed', sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nulla pharetra, tincidunt tellus eget, rhoncus orci. Duis risus purus, ornare vitae iaculis posuere, pharetra nec risus. Etiam viverra sem sagittis, eleifend arcu sed, euismod felis. Donec commodo nunc eget elit rhoncus auctor. Mauris condimentum elementum mattis.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam at enim ut urna commodo tristique. </p>
			<p class="text-justify" style="font-size:18px; font-family: 'Open Sans Condensed', sans-serif;">Nulla ut finibus quam. Curabitur felis tortor, pellentesque nec ante sit amet, commodo sollicitudin urna. Etiam eget sollicitudin leo. Sed tristique leo in metus euismod fermentum. Nunc massa nibh, rutrum tempor nulla non, finibus porta purus. Proin blandit ex sed dui sagittis posuere. Pellentesque placerat molestie neque, et auctor eros pulvinar cursus.Sed elementum vestibulum mi in egestas. Ut non ipsum urna. Aliquam at tempus odio, sed vestibulum elit. Quisque tristique posuere velit nec tristique.</p>
			<p class="text-justify" style="font-size:18px; font-family: 'Open Sans Condensed', sans-serif;">Nunc massa nibh, rutrum tempor nulla non, finibus porta purus. Proin blandit ex sed dui sagittis posuere. Pellentesque placerat molestie neque, et auctor eros pulvinar cursus. Etiam viverra sem sagittis, eleifend arcu sed, euismod felis. Donec commodo nunc eget elit rhoncus auctor. Mauris condimentum elementum mattis. </p>
					
		</div> <!--div col-->
		<div class="col-lg-5">
		<img src="images\teddy-3296851_1920.jpg" alt="teddy bear" class="img-fluid">
        </div>  <!--div col-->
    </div>  <!--div row-->
 </div> <!--div col-->
<?php
include("footer.php"); // Includes footer's code
?>
</body>
</html>
