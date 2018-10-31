<?php

//Processes inputs from user and sends them to specific areas for processing 
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("model.php");
require_once("util.php");


	//grabs error message
	//if(isset($_COOKIE['success'])){
	//	echo $_COOKIE['success'];
	//}
	
	//goes to corresponding class depending on what submit button user clicked
	if(isset($_POST['login-submit'])) {
			processLogin();
	}
	if(isset($_POST['registerButton'])) {
			registrationForm();
	}
	if(isset($_POST['crushButton'])) {
			addSearch();
	}
	if (isset($_POST['logout'])) {
			logout();
	}

	function registrationForm() {
		
		$email = $_POST['userName'];
		$password = $_POST['password'];
            $options = ['cost' => 12]; // Set algorithmic cost
            $hash = password_hash($password, PASSWORD_BCRYPT, $options); // Generate password hash
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phoneNumber = $_POST['phoneNumber'];
		$gender = $_POST['gender'];
		$DOB = $_POST['dob'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		
		//if($email != null && $fname != null && $lname != null && $city != null && $state != null && $zip != null){
			
			model::registrationTable($email, $hash, $fname, $lname, $phoneNumber, $gender, $DOB, $address, $city, $state, $zip);
            echo header("refresh:4;url=login.php");

		//}
		
		//else{
			
			//echo "<p class=''>Something was missed. Please enter information again. All is required.<br></p>";
			//registrationForm();
		//}
	
	}
    
    function processLogin() {
        if (isset($_POST['login-email']) && isset($_POST['login-password'])) {
            $username = $_POST['login-email'];
            $password = $_POST['login-password'];

            //checks login to see if it is a user or admin
            $check = model::checkLogin($username, $password);
            
            if($check == true) {
                //setcookie('username', $username, time() + (86400 * 30), "/"); // 86400 = 1 day
                //setcookie('password', $password, time() + (86400 * 30), "/");
                
                //Set session variables
                //model::getDetails($email, $hash, $fname, $lname, $phoneNumber, $gender, $DOB, $address, $city, $state, $zip);
                $_SESSION['logged_in'] = TRUE;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
/*              $_SESSION['fname'] = $fname;
                $_SESSION['lname'] = $lname;
                $_SESSION['phone'] = $phoneNumber;
                $_SESSION['gender'] = $gender;
                $_SESSION['DOB'] = $DOB;
                $_SESSION['address'] = $address;
                $_SESSION['city'] = $city;
                $_SESSION['state'] = $state;
                $_SESSION['zip'] = $zip;*/
                
                echo "<p class=''>Success<br></p>";
                //also needs to grab matches info from db and send to matches.php
                echo header("Location: dashboard.php");
            } else if($check == false) {
                //removes cookies
                echo "<p class=''>Incorrect username or password. Please try again.<br></p>";
                echo header("Location: login.php");
            }
        }
	}
	
    function logOut() {
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), "", time()-3600, "/");
            $_SESSION = array();
            session_destroy(); 
        }
    }
	
	function addSearch(){
		
		$username = $_SESSION['username'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		//$email = $_POST['email'];
		//$city = $_POST['city'];
		//$state = $_POST['state'];
		//$address = $_POST['address'];
		
		model::createSearch($username, $fname, $lname);
		echo header("refresh:0;url=dashboard.php");
	}

?>