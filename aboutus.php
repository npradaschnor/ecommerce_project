<?php 
//Noa Pereira Prada Schnor - Web Applications Project May 2018. About us Page.

$title = 'About us'; //title

//Start session
session_start();
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
                    About us <br> <small>We do love Teddy Bear</small></h1>
            </div>  <!--div col-->
        </div>  <!--div row-->
    </div>  <!--div container-->
</div>  <!--div jumbotron-->
  <!--end of jumbotron-->
  
<!--ABOUT 'TEDDY BEAR' AND ABOUT THE COMPANY-->  
  <div class="container-fluid">
	<div class="row">
		<div class="col-lg-7">	
			<p class="text-justify quote" style="font-size:18px; font-family: 'Open Sans Condensed', sans-serif;">Did you know that Teddy bears date back to the early twentieth century, but the origin of the name is uncertain? One of the the most popular story is that the US President Theodore "Teddy" Roosevelt refused to kill an injured bear on a bear-hunting trip, choosing to spare its life instead. As this story was picked up by the newspapers, especially cartoonists, it led a enterprising shop that sold toy bears to label them "Teddy's Bears" in their window. </p>
			<p class="text-justify quote" style="font-size:18px; font-family: 'Open Sans Condensed', sans-serif;">Teddy bears have become an have to have children's toy, as well as a popular theme of children's stories, such as Winnie The Pooh, Paddington Bear, and the Teddy Bears' Picnic. Because of many adults' nostalgia for hand-crafted bears, a whole industry of "bear artists" making expensive, individual bears has sprung up alongside the cheap toys, and 'teddies' remain popular as gifts as well.</p>
			<p class="text-justify" style="font-size:18px; font-family: 'Open Sans Condensed', sans-serif;">Our Company Teddy Bear is a dream that became true. Nanny Phillips used to make Teddy Bear to all her grandkids and the kids in the neighbourhood. She loved to make them and to see kids happily playing with them. The passion of making Teddy Bear was passed down from generation to generation and became a business 15 year ago. We couldn't be happier to make people happy!  </p>
					
		</div> <!--div col-->
		<div class="col-lg-5">
		<img src="images\teddy-3296851_1920.jpg" alt="teddy bear" class="img-fluid">
        </div>  <!--div col-->
    </div>  <!--div row-->
 </div> <!--div container-->
<!--end of text about us/Teddy Bear-->

<!--FOOTER-->
 <?php
include("footer.php"); // Include footer's code
?>
<!--end of footer-->

</body>
</html>
