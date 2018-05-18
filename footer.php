 <!---Noa Pereira Prada Schnor. Web Applications Project. May 2018. Footer code.-->
 
 <!--FOOTER-->
<footer class="page-footer"><hr>   
    				
	<div class="container">
		<ul class="description">
		<div class="row align-items-center justify-content-center">
			<div class="col">
				<li><img src="images\securepayment.jpg" width=55% class="img-fluid">
				</li>
			</div>
			<div class="col">
				<li><img src="images\fastdelivery.jpg" width=55% class="img-fluid">
				</li>
			</div>
			<div class="col">
				<li><img src="images\easyreturnsandexchanges.jpg" width=55% class="img-fluid">
				</li>
			</div>
			<div class="col">
				<li><img src="images\satisfaction.jpg" width=55% class="img-fluid">
				</li>
			</div>
		</div>	<!--div row-->
		</ul>
		<p class="text-center" style="font-family:'Amatic SC', cursive;"> © 2018 Teddy Bear</p>
	</div><!--div container-->		
</footer>
<!--end of footer-->	

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> 

<script>

<!--JS VALIDATE USERNAME-->
function validateForm() {
    var usn = document.forms["tab"]["username"].value;
	var x = document.forms[“tab”][“email”].value;
	var atpos = x.indexOf(“@”);
    var dotpos = x.lastIndexOf(“.”);

	
	if (usn == "") {
		alert("Username must be filled out");
		return false;
	}
	
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {

		alert(“Please enter a valid email address.”);

		return false;
	}
}

</script>

<script>
<!--JS Adds or Decreases the quantity of products-->
	$(document).ready(function(){	
		$("#plus").click(function() {
		  var qty = $('#btn-qty').val(); // recupera o valor atual do campo '#btn-qty'
		  qty = parseInt(qty);
		  qty = qty + 1; //Incrementa em 1 a quantidade
		  $('#btn-qty').val(qty); // atualiza o valor do campo '#btn-qty'
		});
		
		$("#minus").click(function() {
		  var qty = $('#btn-qty').val(); // recupera o valor atual do campo '#btn-qty'
		  qty = parseInt(qty);
		  qty = qty - 1; // Diminui em 1 a quantidade
		  if(qty < 1) { // Se o valor ficar abaixo de um altera para um
			  qty = 1;
		  }
		  $('#btn-qty').val(qty); // atualiza o valor do campo '#btn-qty'
		});
	})
</script>


<script>
<!--CHANGES USING DOM-->
document.getElementById("topSales").style.font = "bold 80px Amatic SC, cursive"; <!--STYLE-->
document.getElementById("jumbotronLove").innerHTML = "Who doesn't love a Teddy Bear?";<!--HTML-->
</script>
