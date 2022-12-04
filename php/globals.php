<?php
	/* Marketplace DB:*/

	function open_db_conn() {
		$servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "website";
    
        $conn =  mysqli_connect($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
    		return NULL;
		} 
		
		return $conn;
	}

	function close_db_conn($conn){
		// Close MySQL connection
		mysqli_close($conn);
	}

?>