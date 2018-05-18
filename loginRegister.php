<?php
// Noa Pereira Prada Schnor. Web Applications Project May-2018. Sign Up Page.

$title = "Login & Register"; // Title
// Include code to connect with database
include("conn.php");

//  Verify if there is possible to login or if the customer needs to create an account
if(!empty($_POST)) {
	$action = $_POST['action'];
	if($action == 'login') { // If the 'action' is Login
		//Verify the username and password
		if($_POST['username'] and $_POST['password']) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			// Verify the username typed in the database
			$query_select = "SELECT * FROM users_db WHERE username = '$username' AND password = '$password'"; // Query to database(sql) to check the username
			$select = mysqli_query($conn,$query_select); // Send the query to database
			if (mysqli_num_rows($select) > 0) { // Check if there is any line returned from query
				$usrArray = mysqli_fetch_assoc($select); // If there is any result returned from query, the results goes into an array
				// Create the customer's session
				$_SESSION['logged'] = true;
				$_SESSION['user'] = $usrArray['username'];
				$redirect = "products.php"; // Website page that will be redirect
				header("location:$redirect"); // Redirection
			} else { // If there is no error message 
				echo "<script language='javascript' type='text/javascript'>alert('Invalid login or password');</script>";
			}
		} else { // If there is an error when the customer tries to login
				echo "<script language='javascript' type='text/javascript'>alert('Enter your username and password or register');</script>";
		}
	} elseif($action == 'register') { // If the action is to create an account
		//Check if were sent username, email address and password
		if($_POST['username']=='') {
			$msg = 'Please type an username';
		}elseif($_POST['email'] == '') {
			$msg = 'It is required a valid email address';
		}elseif($_POST['password'] == '') {
			$msg = 'Type the password';
		}else {
			// Retrieves the data passed in the registration form
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			// Query the database to check if that the username already exists
			$query_select = "SELECT username FROM users_db WHERE username = '$username'"; // sql query to check if that user exists in the database
			$select = mysqli_query($conn,$query_select); // Send the query to databaase
			
			if (mysqli_num_rows($select) > 0) { // Check if there is any line returned from query
				$array = mysqli_fetch_assoc($select); // If there is any result returned from query, the results goes into an array
				$usernamedb = $array['username']; // Assigns the variable usernamedb the value of the username key of the array obtained in the query
			}else {
				$usernamedb = '';	
			}
			
			if($username == "" || $username == null){ // If the username variable is empty or is null displays an alert
			  echo "<script language='javascript' type='text/javascript'>alert('Username field must be filled in');window.location.href='loginRegister.php'</script>";
			}else{
				if($usernamedb == $username){ // If the username variable is not empty, but is equal to a value found in the database, it issues an alert
				  echo"<script language='javascript' type='text/javascript'>alert('This Username already exists');window.location.href='loginRegister.php'</script>";
				  die();
				}else{ // If the typed variable does not match any value in the database, then it writes to the database
				  $query = "INSERT INTO users_db (username,password,email) VALUES ('".$username."','".$password."','".$email."')";
				  $insert = mysqli_query($conn,$query); // Sends the sql command to the database
				  // Creates the user's Session - create an  account
					$_SESSION['logged'] = true;
					$_SESSION['user'] = $username;
				  if($insert){ // If the insert command was accepted by the database it issues a successful message and refers the user to the products page
					echo"<script language='javascript' type='text/javascript'>alert('Username registered successfully!');window.location.href='products.php'</script>";
				  }else{ // Otherwise it issues an error alert
					echo"<script language='javascript' type='text/javascript'>alert('Could not register this user');</script>";
				  }
				}
			  }
		}
	}	
	
}
mysqli_close($conn); // Close the connection with database

?>
<!doctype html>
<html lang="en">

<!--HEAD-->
<?php
include("head.php"); // include the head's code
?>
<!--end of head-->

<body>

<!--HEADER-->
<?php
include("header.php"); //include the header's code
?>
<!--end header-->

<!--JUMBOTRON-->
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1" style="font-family:'Amatic SC', cursive; color:SlateBlue; font-weight:bold;">
                    Teddy Bear <br><small><i>A friend for life</small></i></h1>
            </div> <!--div col-->
        </div><!--div row-->
    </div><!--div container-->
</div><!--div jumbotron-->
<!--end of jumbotron-->
  
 <!--LOG IN OR REGISTRATION-->
<div class="container-fluid">
  <div class="row">
    <div class= "col-md-4">
      <div class="span12">
        <div class="" id="loginModal">
          <div class="modal-body">
            <div class="well"> 
              <!--nav login and create account options-->
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true" style="font-family:'Open Sans Condensed', sans-serif; color:FireBrick; font-size:22px;">Login</a></li>
                &nbsp &nbsp
                <li class="nav-item"><a class="nav-link" id="register-tab" data-toggle="tab" href="#create" role="tab" aria-controls="register" aria-selected="false" style="font-family:'Open Sans Condensed', sans-serif; color:FireBrick; font-size:22px;">Create Account</a></li>
                <br>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab"> <br>
                  <!--LOGIN FORM-->
                  <form action="loginRegister.php" method="POST" class="form-horizontal" id="login">
                    <fieldset>
                      <div id="legend">
                        <legend class="" style="font-family:'Open Sans Condensed', sans-serif; color:SlateBlue; font-weight:bold;">Login</legend>
                      </div>
                      <br>
                      <div class="control-group"> 
                        <!-- Username -->
                        <label class="control-label"  for="username" style="font-family:'Open Sans Condensed', sans-serif; color:SlateBlue; font-size:18px;">Username</label>
                        <div class="controls">
                          <input name="username" type="text" required class="input-xlarge" id="username" placeholder="username">
                          <input name="action" value="login" type="hidden">
                        </div>
                      </div>
                      <br>
                      <div class="control-group"> 
                        <!-- Password-->
                        <label class="control-label" for="password" style="font-family:'Open Sans Condensed', sans-serif; color:SlateBlue; font-size:18px;">Password</label>
                        <br>
                        <div class="controls">
                          <input name="password" type="password" required class="input-xlarge" id="password" placeholder="password">
                        </div>
                      </div>
                      <br>
                      <div class="control-group"> 
                        <!-- Login Button -->
                        <div class="controls">
                          <button class="btn btn-success" style="font-family:'Open Sans Condensed', sans-serif; ">Login</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                  <!--end login form--> 
                </div>
                <br>
                <div class="tab-pane fade" id="create" role="tabpanel" aria-labelledby="register-tab"> 
                  <!-- CREATE ACCOUNT FORM-->
                  <form id="tab" method="post" action="loginRegister.php">
                    <div id="legend">
                      <legend class="" style="font-family:'Open Sans Condensed', sans-serif; color:SlateBlue; font-weight:bold;">Create Account</legend>
                    </div>
                    <br>
                    <!-- Username-->
                    <label for='username' style="font-family:'Open Sans Condensed', sans-serif; color:SlateBlue; font-size:18px;">Username</label>
                    &nbsp &nbsp
                    <input name="username" type="text" required class="form-control" placeholder="username" />
                    <input name="action" value="register" type="hidden">
                    <br>
                    <!---USERNAME VALIDATION FUNCTION JS CALLED VALIDATEFORM--> 
                    <!-- email-->
                    <label for='email' style="font-family:'Open Sans Condensed', sans-serif; color:SlateBlue; font-size:18px;">Email</label>
                    &nbsp &nbsp &nbsp &nbsp &nbsp
                    <input type="email" id="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="email" required />
                    <br>
                    <!--INFO REQUIRED AND PATTERN OF EMAIL ADDRESS--> 
                    <!-- Password-->
                    <label for='password 'style="font-family:'Open Sans Condensed', sans-serif; color:SlateBlue; font-size:18px;">Password</label>
                    &nbsp &nbsp
                    <input type="password" id="password-register" name="password" class="form-control" pattern=".{6,}" title="Six or more characters" placeholder="password" required />
                    <br>
                    <!--INFO REQUIRED AND PATTERN OF PASSWORD--> 
                    <!-- Address--> 
                    <!-- Create account button-->
                    <input type="submit" class="btn btn-primary col-md-4 col-md-offset-10" style="font-family:'Open Sans Condensed', sans-serif;" value="Submit" />
                  </form>
                  <!--ed of create account form--> 
                </div>
                <!--div tab-pane--> 
              </div>
              <!--div myTabContent--> 
            </div>
            <!--div well--> 
          </div>
          <!--div modal-body--> 
        </div>
        <!--div loginModal--> 
      </div>
      <!--div span12--> 
    </div>
    <!--div col-->
    <div class="col-md-8"> <br>
      <br>
      <br>	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <img src="images\teddy-2439215__340.jpg" class="img-fluid rounded"> 
	</div><!--div col-->
</div><!--div row-->
</div><!--div container-->

<!--FOOTER-->
<?php
include("footer.php"); // include the footer's code
?>
<!--end of footer-->

</body>
</html>