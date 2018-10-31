<?php

//$serveradd = "localhost";
//$username = "root";
//$password = null;
//$dbname = "youandme"

// Create connection
$db = new mysqli('127.0.0.1', 'root', null);

// Check connection
if ($db->connect_errno > 0) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection successful.";


if ($resultp = $db->query("SELECT COUNT(*) FROM meandyou.person"))
{
	$rowp = $resultp->num_rows;
	
	printf("Result set has %d rows.\n", $rowp);
	 
	$resultp->close();
	

}
	
//mysqli_free_result($resultp);



//$sizep = $rowp['COUNT(*)'];

//$resultm = mysql_query("SELECT COUNT(*) FROM matches");
//$rowm = mysql_fetch_assoc($resultm);
//$sizem = $rowm['COUNT(*)'];

//$results = mysql_query("SELECT COUNT(*) FROM searches");
//$rows = mysql_fetch_assoc($results);
//$sizes = $rows['COUNT(*)'];

mysqli_close($db);
?>

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

    <title>MeAndYou</title>

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
            <li role="presentation" class="active"><a href="index.php">Overview</a></li>
            <li role="presentation"><a href="register.php">Get Started</a></li>
            <li role="presentation"><a href="login.php">Log In <span class="glyphicon glyphicon-user"></span></span></a></li>
          </ul>
      </div>
    </div>

    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="container">
            <div class="carousel-caption">
			<img src="img/maylogo2.png" height="50%" width="50%">
              <h2><strong>Find who you've been looking for</strong></h2>
              <p>MeAndYou.us is a platform for making intimate connections between two people.  Whether it is to rekindle an old relationship or to reach out to distant family members, MeAndYou.us is the tool to do so!</p>
              <p><a class="btn btn-lg btn-primary" href="aboutus.php" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
			<img src="img/crush.png">
			<br>
			<br>
			<br>
			  <h2><strong>Find a Crush</strong></h2>
              <p>Cute girl in the next cubicle?  Handsome guy at the gym?  Let them know your true feelings, maybe they feel the same way about you!</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
			<img src="img/friend.png">
			<br>
			<br>
			<br>
			<h2><strong>Find an Old Friend</strong></h2>
			<p>Summer camp with your best bud was the greatest.  But what have they been up to these past years?</p>
            </div>
          </div>
        </div>
		<div class="item">
          <div class="container">
            <div class="carousel-caption">
			<img src="img/family.png">
			<br>
			<br>
			<h2><strong>Find a Family Member</strong></h2>
              <p>Disagreements among family members can drive loved ones apart.  You could be the key to bringing your family members back together.  Sometimes it just takes some time to heal wounds.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
			<img src="img/love.png">
			<br>
			<br>
			<h2><strong>Find a Lost Love</strong></h2>
              <p>Maybe it was the one that got away or maybe it just wasn't the right time for the two of you.  You know they are on your mind, see if they're still thinking about you.</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <div class="container" align="center">
       <!-- Four columns of text below the carousel -->
      
      <div class="row">
      <div class="col-lg-6">
      <div class="panel panel-success">
        <div class="panel-heading">
          <strong>News and Updates</strong>
        </div>
        <div class="panel-body">
          <ul style="text-align:left;">
            <li><strong>4/6/16</strong> - Updated UI with several new features.</li>
          </ul>
        </div>
      </div>
      </div>
      <div class="col-lg-6">
      <div class="panel panel-success">
        <div class="panel-heading">
          <strong>Statistics</strong>
        </div>
        <div class="panel-body">
          <ul style="text-align:left;">
		  <?php echo "<li><strong>" . $rowp . "</strong>" . " registered users.</li>" ?>
          <!--?php echo "<li><strong>" . $sizem . "</strong>" . " new matches have been made today.</li>" ?>
          php echo "<li><strong>" . $sizes . "</strong>" . " people in New Hampshire are currently looking for <strong>old friends</strong>.</li>" ?> -->
          </ul>
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type='text/javascript' src="js/jquery-1.12.3.js"></script>
    <script type='text/javascript' src="js/bootstrap.min.js"></script>
  </body>
</html>
