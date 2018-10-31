<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="MeAndYou.us - Find who you've been looking for.">
    <meta name="author" content="Dunya Al Bayati, Saverna Ahmad, Brenden Collins, Justin Gauthier, Dylan Lindstrom">
    <link rel="icon" href="favicon.ico">

    <title>Get Started</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles -->
    <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
  </head>

    <body>
    
    <!-- Header -->
    <div class="header">
      <img id="main-logo" src="img/sm-maylogo.png" alt="MeAndYou" />
    </div>
    
    <!-- Navigation bar -->
    <div class="navbar-wrapper">
      <div class="container-fluid">
        <nav class="navbar navbar-inverse navbar-right" role="navigation">
          <ul class="nav nav-tabs">
            <li role="presentation"><a href="index.php">Overview</a></li>
            <li role="presentation" class="active"><a href="register.php">Get Started</a></li>
            <li role="presentation"><a href="login.php">Log In <span class="glyphicon glyphicon-user"></span></span></a></li>
          </ul>
      </div>
    </div>
    
    <div class="cust-container">
      <div class="registration">
        <h3><strong>Sign up for your free account today!</strong></h3>
        <p>Fill out the form below to get started.</p><br>
        <form class="register" method="post" action="controller.php">
          <div class="row">
            <div class="col-md-6">
                  <div class="form-group"><label>Email:</label><input class="form-control" type="email" name="userName" required></div>
      		      <div class="form-group"><label>Password:</label><input class="form-control" type="password" id="password" name="password" required></div>
                  <div class="form-group"><label>Re-type Password:</label><input class="form-control" type="password" id="password-verify" name="password-verify" required></div>
                    <span id="pass-match"></span><br><br>
                                  <div class="form-group">
                    <label>Gender:</label>
                    <select class="form-control" name="gender" required>
                    <option value="" selected disabled>Select your gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>				
                    </div>
				  <div class="form-group"><label>Date of Birth:</label><input class="form-control" type="date" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" placeholder="mm/dd/yyyy" name="dob" required></div>
      			  <div class="form-group"><label>Address:</label><input class="form-control" type="text" name="address" required></div>
				  </div>
				  <div class="col-md-6">
      			  <div class="form-group"><label>First Name:</label><input class="form-control" type="text" name="fname" required></div>
      			  <div class="form-group"><label>Last Name:</label><input class="form-control" type="text" name="lname" required></div>
				  <div class="form-group"><label>Phone Number:</label><input class="form-control" type="tel" pattern="\d{10}" name="phoneNumber" placeholder="xxxxxxxxxx" required></div>
                 <br><br>
				  <div class="form-group"><label>City:</label><input class="form-control" type="text" name="city" required></div>
      		      <div class="form-group">
                    <label>State:</label>
                    <select class="form-control" name="state" required>
                    <option value="" selected disabled>Select your state</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>				
                    </div>
      	         <div class="form-group"><label>Zip Code:</label><input class="form-control" type="text" placeholder="xxxxx or xxxxx-xxxx" pattern="\d{5}" name="zip" required></div><br>
			     <div class="form-group"><input class="btn btn-default" type="submit" name="registerButton" id="registerButton" value="Sign Up"></div>
            </div>
          </div>
        </form>
      </div>
    </div>
    
	<footer class="footer">
      <div class="container text-center">
        <p class="text-muted">&copy; 2016 University of New Hampshire<br /> </p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type='text/javascript' src="js/jquery-1.12.3.js"></script>
    <script type='text/javascript' src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src="js/register.js"></script>
  </body>
</html>