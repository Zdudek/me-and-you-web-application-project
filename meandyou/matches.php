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

    <title>My Details</title>

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
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation" class="active"><a href="editdetails.php">My Details</a></li>
            <li role="presentation"><a href="login.php">Log In <span class="glyphicon glyphicon-user"></span></span></a></li>
          </ul>
      </div>
    </div>
    
    <div class="cust-container">
      <div class="registration">
        <h3>My Matches</h3>
        <form class="register" role="form">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group"><label>Email:</label><input class="form-control" type="email" name="email" readonly required></div>
      			  <div class="form-group"><label>First Name:</label><input class="form-control" type="text" name="fname" required></div>
      			  <div class="form-group"><label>Last Name:</label><input class="form-control" type="text" name="lname" required></div><br>
      			  <div class="form-group"><button type="submit" class="btn btn-default">Save</button></div>
      			</div>
      		  <div class="col-md-6">
      			  <div class="form-group"><label>City:</label><input class="form-control" type="text" name="city" required></div>
      		    <div class="form-group"><label>State:</label><input class="form-control" type="text" name="state" required></div>
      	      <div class="form-group"><label>Zip Code:</label><input class="form-control" type="text" name="zip code" required></div>
            </div>
          </div>
        </form>
      </div>
    </div>
	
	<!-- <ul>
   <li class="menu">
       group1
       <div class="dropdown">dropdown content1</div>
   </li>
   <li class="menu">
       group2
       <div class="dropdown">dropdown content2</div>
   </li>
   <li class="menu">
       group3
       <div class="dropdown">dropdown content3</div>
   </li>
   <li class="menu">
       group4
       <div class="dropdown">dropdown content4</div>
   </li>
<ul> -->
    
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
  </body>
</html>
