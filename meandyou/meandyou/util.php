<?php

	class util {
	//Logs into test projects db
	static function connect() {
		//config.txt provides connection info
		$textFile = file_get_contents("config.txt");
		$textArray = explode(",", $textFile);
		$connection = new mysqli($textArray[0], $textArray[1], $textArray[2]);
		//check connection
		if($connection->connect_error){
			echo "Failed to connect to MYSQL";
			die($connection->connect_error);
		}
		return $connection;
	}
}
		
?>