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

    <title>My Account</title>

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
        
    <?php
    include 'controller.php';

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == TRUE) {
    ?>
        
    <!-- Header -->
    <div class="header">
      <img id="main-logo" src="img/sm-maylogo.png" alt="MeAndYou" />
    </div>
    
    <!-- Navigation bar -->
    <div class="navbar-wrapper" style="padding-top:8px !important;">
      <div class="container-fluid">
        <nav class="navbar navbar-inverse navbar-right" role="navigation">
          <ul class="nav nav-tabs">
            <li role="presentation"><a href="dashboard.php">Dashboard</a></li>
            <li role="presentation"><a href="dashboard.php#notifications">Notifications <span class="badge">2</span></a></li>
            <li role="presentation" class="active"><a href="account.php">Account</a></li>
            <li role="presentation"><a href="logout.php">Log Out <span class="glyphicon glyphicon-user"></span></span></a></li>
          </ul>
      </div>
    </div>

    <div class="recent-not" style="width:50%;margin:30px auto;">
      <div class="panel panel-success">
        <div class="panel-heading">
          <strong>Account Details</strong>
        </div>
        <div class="panel-body">
            <center>
            <table id="account-details"> 
            <?php
            $mysqli = util::connect();
            $stmt = $mysqli->prepare("SELECT * FROM meandyou.person WHERE person.userName = '" . $_SESSION['username'] . "'");
            $stmt->execute();
            $stmt->bind_result($email, $hash, $fname, $lname, $phoneNumber, $gender, $DOB, $address, $city, $state, $zip, $joinDate);

            while ( $stmt->fetch() ) 
            {
                echo "<tr>";
                echo "<td><strong>Email</strong></td>";
                echo "<td>$email</td>";
                echo "</tr><tr>";
                echo "<td><strong>First Name</strong></td>";
                echo "<td>$fname</td>";
                echo "</tr><tr>";
                echo "<td><strong>LastName</strong></td>";
                echo "<td>$lname</td>";
                echo "</tr><tr>";
                echo "<td><strong>Phone Number</strong></td>";
                echo "<td>$phoneNumber</td>";
                echo "</tr><tr>";
                echo "<td><strong>Gender</strong></td>";
                echo "<td>$gender</td>";
                echo "</tr><tr>";
                echo "<td><strong>Date of Birth</strong></td>";
                echo "<td>$DOB</td>";
                echo "</tr><tr>";
                echo "<td><strong>Address</strong></td>";
                echo "<td>$address</td>";
                echo "</tr><tr>";
                echo "<td><strong>City</strong></td>";
                echo "<td>$city</td>";
                echo "</tr><tr>";
                echo "<td><strong>State</strong></td>";
                echo "<td>$state</td>";
                echo "</tr><tr>";
                echo "<td><strong>Zip Code</strong></td>";
                echo "<td>$zip</td>";
                echo "</tr><tr>";
                echo "<td><strong>Date Joined</strong></td>";
                echo "<td>$joinDate</td>";
                echo "</tr>";
            }
            ?>
            </table>
            </center>
        </div>
      </div>
    </div>
    
  
  	<br /><br /><br />
  	<footer class="footer">
      <div class="container text-center">
        <p class="text-muted">&copy; 2016 University of New Hampshire<br /> </p>
      </div>
    </footer>
    
    <?php
    } else {
    ?>
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
            <li role="presentation"><a href="register.php">Get Started</a></li>
            <li role="presentation"><a href="login.php">Log In <span class="glyphicon glyphicon-user"></span></span></a></li>
          </ul>
      </div>
    </div>

    <div class="recent-not" style="width:70%;margin:30px auto;">
      <div class="panel panel-success">
        <div class="panel-body">
            <center>You must be signed in before viewing this page. <br>Click <a href="login.php">here</a> to sign in.</center>
        </div>
      </div>
    </div>

    <?php
    }
    ?>
    
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type='text/javascript' src="js/jquery-1.12.3.js"></script>
    <script type='text/javascript' src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src="js/custom.js"></script>
  </body>
</html>
