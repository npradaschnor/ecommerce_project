<head>
<!--Noa P Prada Schnor - Web Application Project May 2018. Head code (CSS, external font family, etc-->

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<!--EXTERNAL FONT FAMILY-->
<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Rammetto+One|Trade+Winds" rel="stylesheet">
<!---Amatics CS,cursive-->

<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<!--'Open Sans Condensed', sans-serif;-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body, td, th {
	font-size: 1em;
}
<!--FOOTER CSS-->
  .description {
	list-style-type: none;
 margin="auto";
 position="absolute";
	justify-content: center;
}
.description li {
	float: left;
	display: inline-block;
}
<!--CSS LINE BETWEEN BODY AND FOOTER-->
  hr {
	border: 0;
	height: 1px;
	background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}
.add-to-cart .btn-qty {
	width: 52px;
	height: 46px;
	float: right;
}
.add-to-cart .btn {
	border-radius: 12px;
	float: left;
}
<!--SHOPPING CART-->
  .table>tbody>tr>td, .table>tfoot>tr>td {
	vertical-align: middle;
}
.img-responsive {
	max-width: 100%;
}
.top-menu {
	text-align: right;
    padding: 3px 34px 3px 0;
    font-family: 'Open Sans Condensed', sans-serif;
    border-bottom: 1px solid rgba(0,0,0,.1);
    background-color: #e9ecef;
}
@media screen and (max-width: 600px) {
  table#cart tbody td .form-control {
	  width: 20%;
	  display: inline !important;
  }
  .actions .btn {
	  width: 36%;
	  margin: 1.5em 0;
  }
  .actions .btn-info {
	  float: left;
  }
  .actions .btn-danger {
	  float: right;
  }
  table#cart thead {
	  display: none;
  }
  table#cart tbody td {
	  display: block;
	  padding: .6rem;
	  min-width: 320px;
  }
  table#cart tbody tr td:first-child {
	  background: #333;
	  color: #fff;
  }
  table#cart tbody td:before {
	  content: attr(data-th);
	  font-weight: bold;
	  display: inline-block;
	  width: 8rem;
  }
  table#cart tfoot td {
	  display: block;
  }
  table#cart tfoot td .btn {
	  display: block;
  }
}
</style>
<title>Teddy Bear | <?php echo $title; ?></title>
</head>