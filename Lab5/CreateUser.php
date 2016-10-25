<?php
    
    $user = $_POST["user_id"];
    
    $mysqli = new mysqli("mysql.eecs.ku.edu", "nsingh", "Password123!", "nsingh");
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
	printf("User is " . $user);
	 
    
    $query = "INSERT INTO users(user_id)
                VALUES('". $user . "')";
                
    
    if ($result = $mysqli->query($query)) {
        echo "Username sucessfully created!";
    }
    else
        
        echo "Error: " . $mysqli->error;
  
    $mysqli->close();
?>
 <td><a href="AdminHome.html">Home</a></td>