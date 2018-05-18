<?php $title = 'Contact us';
//Noa Pereira Prada Schnor. Web Applications Project May 2018. Contact us Page.

//Start the session
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
<!---end of header-->
 
  <!--JUMBOTRON-->
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1" style="font-family:'Amatic SC', cursive; color:SlateBlue; font-weight:bold;">
                    Contact us <br><small><i>Feel free to contact us</small></i></h1>
            </div>
        </div><!--div row-->
    </div><!--div container-->
</div>
<!--end of jumbotron-->


<!--FORM CONTACT US-->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" style="font-family:'Open Sans Condensed', sans-serif; color:SlateBlue;">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" style="font-family:'Open Sans Condensed', sans-serif;"required />
                        </div>
                        <div class="form-group">
                            <label for="email" id="opensans" style="font-family:'Open Sans Condensed', sans-serif; color:SlateBlue;">
                                Email Address</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="email" placeholder="Enter email" style="font-family:'Open Sans Condensed', sans-serif;" required /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject" id="opensans" style="font-family:'Open Sans Condensed', sans-serif; color:SlateBlue;">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" style="font-family:'Open Sans Condensed', sans-serif;"style="font-family:'Open Sans Condensed', sans-serif;" required>
                                <option value="na" selected="" style="font-family:'Open Sans Condensed', sans-serif;">Choose One:</option>
                                <option value="service" style="font-family:'Open Sans Condensed', sans-serif;">General Customer Service</option>
                                <option value="suggestions" style="font-family:'Open Sans Condensed', sans-serif;">Suggestions</option>
                                <option value="product" style="font-family:'Open Sans Condensed', sans-serif;">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" id="opensans" style="font-family:'Open Sans Condensed', sans-serif; color:SlateBlue;">
                                Message</label>
                            <textarea name="message" id="opensans" class="form-control" rows="9" cols="25" style="font-family:'Open Sans Condensed', sans-serif;" required placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs" style="font-family:'Open Sans Condensed', sans-serif;">
                            Send Message</button> <br><br><br>
                    </div>
                </div>
                </form>
            </div>
        </div>
<!--end of form contact us-->

<!--CONTACT DETAILS--->
        <div class="col-md-4">
            <form>
            <legend id="opensans" style="font-family:'Open Sans Condensed', sans-serif; color:SlateBlue;"> Our office</legend>
            <address id="opensans" style="font-family:'Open Sans Condensed', sans-serif;">
                <strong style= "font-family: Amatic Sc, cursive; font-size:22px; color:SlateBlue; text-shadow: 1.2px 1px FireBrick;">Teddy Bear</strong><br>
                12 Suite Ave,<br>
                Dublin, <br> Ireland<br>
                <abbr title="Phone" style="font-family:'Open Sans Condensed', sans-serif;">
                    </abbr>
                (01) 843 843843
            </address>
            <address id="opensans" style="font-family:'Open Sans Condensed', sans-serif;">
                <strong style="font-family:'Open Sans Condensed', sans-serif;">Email</strong><br>
                <a href="mailto:info@teddybear.ie" style="font-family:'Open Sans Condensed', sans-serif;">info@teddybear.ie</a>
            </address>
            </form>
        </div>
    </div>
</div>
<!--end of contact details-->

<!--FOOTER-->
<?php
include("footer.php"); // Include footer's code
?>
<!--end of footer-->

</body>
</html>