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

    <title>My Dashboard</title>

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
    require 'controller.php';
    
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
            <li role="presentation" class="active"><a href="dashboard.php">Dashboard</a></li>
            <li role="presentation"><a href="dashboard.php#notifications">Notifications <span class="badge">2</span></a></li>
            <li role="presentation"><a href="account.php">Account</a></li>
            <li role="presentation"><a href="logout.php">Log Out <span class="glyphicon glyphicon-user"></span></span></a></li>
          </ul>
      </div>
    </div>

    <div id="notifications" class="recent-not" style="width:70%;margin:30px auto;">
      <div class="panel panel-success">
        <div class="panel-heading">
          <strong>Recent Notifications</strong>
        </div>
        <div class="panel-body">
            You do not have any recent notifications.
        </div>
      </div>
    </div>
    
    <div class="cust-container"> 
      <div class="dashboard">
        <form class="new-search" method="post" action="controller.php">
        <div>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs dash-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#dashboard" aria-controls="dashboard" role="tab" data-toggle="tab">My Dashboard</a></li>
            <li role="presentation"><a href="#new-search" aria-controls="new-search" role="tab" data-toggle="tab">Search For Someone</a></li>
            <li role="presentation"><a href="#view-matches" aria-controls="view-matches" role="tab" data-toggle="tab">View Matches</a></li>
            <li role="presentation"><a href="#manage-searches" aria-controls="manage-searches" role="tab" data-toggle="tab">Manage Searches</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
          <!-- My Dashboard tab -->
              <div role="tabpanel" class="tab-pane fade in active" id="dashboard"><br><center><h2><strong>Welcome to your Dashboard!</strong></h2><h3>Use these tabs to search for people, view your matches, or manage your searches.</h3></center></div>
          <div role="tabpanel" class="tab-pane fade" id="new-search"><br>
            <div class="form-group">
                <h3><strong>1. Who Are You Looking For?</strong></h3><br>
              <select class="form-control" id="search-type" required>
                <option value="" selected disabled>I am looking for...</option>
                <option value="crush">a crush</option>
                <option value="friend">an old friend</option>
                <option value="family">a family member</option>
                <option value="love">a lost love</option>
              </select>
              </div>

              <div id="crush-fields" style="display:none;">
                <div class="form-group">
				
				<h3><strong>2. Crush Details</strong></h3>
                <p>Fill out as much information about your Crush as you can.</p>
				<form method="post" action="controller.php">
                <label>Name:</label>
				  <input class="form-control" type="text" placeholder="First Name" name="fname">
                  <input class="form-control" type="text" placeholder="Last Name" name="lname">
                  <input class="form-control" type="text" placeholder="Email" name="email">
                <label>Location:</label>
				  <input class="form-control" type="text" placeholder="City" name="city">
                  <input class="form-control" type="text" placeholder="State" name="state">
                  <input class="form-control" type="text" placeholder="Address" name="address">
                  <input class="btn btn-default" type="submit" name="crushButton" value="Search"></form></div>
				</div>

              <div id="friend-fields" style="display:none;">
                <div class="form-group">
                <h3><strong>2. Old Friend Details</strong></h3><br>
                <p>Fill out as much information about your old friend as you can.</p>
                <label>Name:</label>
                <input class="form-control" type="text" placeholder="First Name" name="first-name">
                <input class="form-control" type="text" placeholder="Last Name" name="last-name">
                </div>
              </div>

              <div id="family-fields" style="display:none;">
                <div class="form-group">
                <h3><strong>2. Family Member Details</strong></h3><br>
                <p>Fill out as much information about your family member as you can.</p>
                <label>Name:</label>
                <input class="form-control" type="text" placeholder="First Name" name="first-name">
                <input class="form-control" type="text" placeholder="Last Name" name="last-name">
                </div>
              </div>

                <div id="love-fields" style="display:none;">
                <div class="form-group">
                <h3><strong>2. Lost Love Details</strong></h3>
                <p>Fill out as much information about your lost love as you can.</p>
                <label>Name:</label>
                <input class="form-control" type="text" placeholder="First Name" name="first-name">
                <input class="form-control" type="text" placeholder="Last Name" name="last-name">
                </div>
              </div>

            </form>
            </div> <!-- End My Dashboard tab -->
			<div role="tabpanel" class="tab-pane fade" id="view-matches"><br>
			
<?php
			$mysqli = util::connect();
			$username = $_SESSION['username'];
	
			$query = "SELECT matches.userName2
				      FROM meandyou.matches 
				      WHERE matches.matchPercent > '50%' && matches.userName1 = '$username';";
		
			$stmt = $mysqli->query($query);
		
			while($row = $stmt->fetch_assoc()) {
				
				$userName2 = $row['userName2'];
				echo "<p>Match: ".$userName2."</p><br>";
			}
			if(!$stmt) {
			
			echo "<p>You have no matches. Sorry...not sorry.</p>";
			//printf("prepare() failed: (%s) %s", $mysqli->errno, $mysqli->error);
			}
			else {
			//close statement
			$stmt->close();
			}
?>
		
	</div>
    <div role="tabpanel" class="tab-pane fade" id="manage-searches"><br>...</div>
  </div>

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
            <center>You must be logged in before viewing this page. <br>Click <a href="login.php">here</a> to log in.</center>
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
    <script type='text/javascript' src="js/generateForm.js"></script>
  </body>
</html>
