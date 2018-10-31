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

    <!-- <div class="recent-not" style="width:50%;margin:30px auto;">
      <div class="panel panel-success">
        <div class="panel-heading">
          <strong>Account Details</strong>
        </div>
        <div class="panel-body">
            <center>
            <table id="account-details"> -->
		<div class="cust-container">
			<div class="registration">	
			<h3><strong>Edit Details:</strong></h3>
            <?php
            $mysqli = util::connect();
            $stmt = $mysqli->prepare("SELECT * FROM meandyou.person WHERE person.userName = '" . $_SESSION['username'] . "'");
            $stmt->execute();
            $stmt->bind_result($email, $hash, $fname, $lname, $phoneNumber, $gender, $DOB, $address, $city, $state, $zip, $joinDate);

            while ( $stmt->fetch() ) 
            {
                /*echo "<tr>";
                echo "<td>"; */
                echo "<form class=\"log-in\" role=\"form\" method=\"post\" action=\"controller.php\">";
				echo "<div class=\"row\">";
				echo "<div class=\"col-md-6\">";
                echo "<div class=\"form-group\"><label>Email:</label><input class=\"form-control\" type=\"email\" name=\"userName\" value=\"$email\" required></div>";
      			echo "<div class=\"form-group\"><label>First Name:</label><input class=\"form-control\" type=\"text\" name=\"fname\" value=\"$fname\" required></div>";
      			echo "<div class=\"form-group\"><label>Last Name:</label><input class=\"form-control\" type=\"text\" name=\"lname\" value=\"$lname\" required></div>";
				echo "<div class=\"form-group\"><label>Phone Number:</label><input class=\"form-control\" type=\"tel\" pattern=\"\d{10}\" name=\"phoneNumber\" value=\"$phoneNumber\" required></div>";
                echo "<div class=\"form-group\">";
                echo "<label>Gender:</label>";
                echo "<select class=\"form-control\" name=\"gender\" required>";
                echo "<option selected=\"$gender\">$gender</option>";
				echo "<option value=\"Male\">Male</option>";
                echo "<option value=\"Female\">Female</option>";
                echo "</select>";				
                echo "</div>";
				echo "</div>";
				echo "<div class=\"col-md-6\">";
				echo "<div class=\"form-group\"><label>Date of Birth:</label><input class=\"form-control\" type=\"date\" pattern=\"(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d\" name=\"dob\" value=\"$DOB\" required></div>";
      			echo "<div class=\"form-group\"><label>Address:</label><input class=\"form-control\" type=\"text\" name=\"address\" value=\"$address\" required></div>";
				echo "<div class=\"form-group\"><label>City:</label><input class=\"form-control\" type=\"text\" name=\"city\" value=\"$city\" required></div>";
      		    echo "<div class=\"form-group\">";
                echo "<label>State:</label>";
                echo "<select class=\"form-control\" name=\"state\" required>";
                echo "<option value=\"$state\" selected=\"$state\"></option>";
                echo "<option value=\"AL\">Alabama</option>";
                echo "<option value=\"AK\">Alaska</option>";
                echo "<option value=\"AZ\">Arizona</option>";
                echo "<option value=\"AR\">Arkansas</option>";
                echo "<option value=\"CA\">California</option>";
                echo "<option value=\"CO\">Colorado</option>";
                echo "<option value=\"CT\">Connecticut</option>";
                echo "<option value=\"DE\">Delaware</option>";
                echo "<option value=\"DC\">District Of Columbia</option>";
                echo "<option value=\"FL\">Florida</option>";
                echo "<option value=\"GA\">Georgia</option>";
                echo "<option value=\"HI\">Hawaii</option>";
                echo "<option value=\"ID\">Idaho</option>
                        <option value=\"IL\">Illinois</option>
                        <option value=\"IN\">Indiana</option>
                        <option value=\"IA\">Iowa</option>
                        <option value=\"KS\">Kansas</option>
                        <option value=\"KY\">Kentucky</option>
                        <option value=\"LA\">Louisiana</option>
                        <option value=\"ME\">Maine</option>
                        <option value=\"MD\">Maryland</option>
                        <option value=\"MA\">Massachusetts</option>
                        <option value=\"MI\">Michigan</option>
                        <option value=\"MN\">Minnesota</option>
                        <option value=\"MS\">Mississippi</option>
                        <option value=\"MO\">Missouri</option>
                        <option value=\"MT\">Montana</option>
                        <option value=\"NE\">Nebraska</option>
                        <option value=\"NV\">Nevada</option>
                        <option value=\"NH\">New Hampshire</option>
                        <option value=\"NJ\">New Jersey</option>
                        <option value=\"NM\">New Mexico</option>
                        <option value=\"NY\">New York</option>
                        <option value=\"NC\">North Carolina</option>
                        <option value=\"ND\">North Dakota</option>
                        <option value=\"OH\">Ohio</option>
                        <option value=\"OK\">Oklahoma</option>
                        <option value=\"OR\">Oregon</option>
                        <option value=\"PA\">Pennsylvania</option>
                        <option value=\"RI\">Rhode Island</option>
                        <option value=\"SC\">South Carolina</option>
                        <option value=\"SD\">South Dakota</option>
                        <option value=\"TN\">Tennessee</option>
                        <option value=\"TX\">Texas</option>
                        <option value=\"UT\">Utah</option>
                        <option value=\"VT\">Vermont</option>
                        <option value=\"VA\">Virginia</option>
                        <option value=\"WA\">Washington</option>
                        <option value=\"WV\">West Virginia</option>
                        <option value=\"WI\">Wisconsin</option>
                        <option value=\"WY\">Wyoming</option>
                    </select>				
                    </div>";
				echo  "<div class=\"form-group\"><label>Zip Code:</label><input class=\"form-control\" type=\"text\" pattern=\"\d{5}\" name=\"zip\" value=\"$zip\" required></div><br>";
				echo  "<div class=\"form-group\"><input class=\"btn btn-default\" type=\"submit\" name=\"updateButton\" value=\"Update\"></div>";
				echo "</div>";
				echo "</div>";
				echo "</form>";
				echo "</td></tr>";
            }
            ?>
            <!-- </table>
            </center>
        </div> -->
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
