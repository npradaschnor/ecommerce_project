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
			<p class="text-justify" style="font-size:18px; font-family: 'Open Sans Condensed', sans-serif;">Did you know that Teddy bears date back to the early twentieth century, but the origin of the name is uncertain. The most popular story is that then-US President Theodore "Teddy" Roosevelt refused to kill an injured bear on a bear-hunting trip, choosing to spare its life instead? This story was then picked up by the newspapers, especially cartoonists, leading one enterprising shop that sold toy bears to label them "Teddy's Bears" in the window (John Gibb). </p>
			<p class="text-justify" style="font-size:18px; font-family: 'Open Sans Condensed', sans-serif;">Teddy bears have become an enduring children's toy, as well as a popular theme of children's stories, such as Paddington Bear, Winnie the Pooh and the Teddy Bears' Picnic. Because of many adults' nostalgia for the pre-war hand-crafted bears, a whole industry of "bear artists" making expensive, individual bears has sprung up alongside the cheap toys, and teddy bears remain popular as gifts as well (John Gibb).</p>
			<p class="text-justify" style="font-size:18px; font-family: 'Open Sans Condensed', sans-serif;">Our Company Teddy Bear is a dream that became reality. Nanny Phillips used to make Teddy Bear to all her grandkids and the kids in the neighbourhood. She loved to make Teddy Bear and to see kids happily playing with them. The passion of making Teddy Bear was passed down from generation to generation and became a business 15 year ago. We are proudly happy to make people happy!  </p>
					
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
