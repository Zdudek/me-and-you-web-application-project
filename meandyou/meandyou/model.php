<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("util.php");

	class model{
		
	static function registrationTable($email, $hash, $fname, $lname, $phoneNumber, $gender, $DOB, $address, $city, $state, $zip) {
		$mysqli = util::connect();
		$mysqlprep = "";

			$mysqlprep = "INSERT INTO meandyou.person (person.userName, person.password, person.firstName, person.lastName, person.phoneNumber, person.gender, person.birthDate, person.address, person.city, person.st, person.zipCode)
						  VALUES ('$email','$hash','$fname','$lname','$phoneNumber','$gender','$DOB','$address','$city','$state',$zip);";
			echo $mysqlprep;
		if ($stmt = $mysqli->prepare($mysqlprep)){		
			$stmt->execute();
            echo "<p>*You have successfully registered. Re-directing to Dashboard...*</p>";
		}
		if(!$stmt) {
			//$mysqlprep = "UPDATE test_projects.puser SET puser.userpass = ".'"'.$newPassword.'"'." WHERE puser.userlogin = ".'"'.$userid.'"'.";";
			
			//$stmt = $mysqli->prepare($mysqlprep);
			//$stmt->execute();
			echo "<p>*Failed*</p>";
			printf("prepare() failed: (%s) %s", $mysqli->errno, $mysqli->error);
		}
		else {
			//close statement
			
			$stmt->close();
		}
	}
        
	static function checkLogin($username, $password) {
		
		$check = "";
		$mysqli = util::connect();
		$mysqlprep = "";
		
		$mysqlprep = "SELECT IF (person.userName = '$username' && person.password = '$password', 'true', 'false') 
					  FROM meandyou.person;";
				  
		echo $mysqlprep;
		if($stmt = $mysqli->prepare($mysqlprep)){
			$stmt->execute();
			$check = $stmt;
			
		}
		else {
			$stmt->close();
			printf("prepare() failed: (%s) %s", $mysqli->errno, $mysqli->error);
			$check = $stmt;
		}
		return $check;
	}
	
	static function createSearch($username, $fname, $lname) {
		
		$mysqli = util::connect();
		$mysqlprep = "";
		
		$mysqlprep = "INSERT INTO meandyou.searches (searches.userName, searches.firstName, searches.lastName)
						  VALUES ('$username','$fname','$lname');";
		echo $mysqlprep;
		if ($stmt = $mysqli->prepare($mysqlprep)){		
			$stmt->execute();
			printf("prepare() failed: (%s) %s", $mysqli->errno, $mysqli->error);
            echo "<p>*You have successfully registered. Re-directing to Dashboard...*</p>";
		}
		if(!$stmt) {
			//$mysqlprep = "UPDATE test_projects.puser SET puser.userpass = ".'"'.$newPassword.'"'." WHERE puser.userlogin = ".'"'.$userid.'"'.";";
			
			//$stmt = $mysqli->prepare($mysqlprep);
			//$stmt->execute();
			echo "<p>*Failed*</p>";
			printf("prepare() failed: (%s) %s", $mysqli->errno, $mysqli->error);
		}
		else {
			//close statement
			
			$stmt->close();
		}
    }
	
}
?>
