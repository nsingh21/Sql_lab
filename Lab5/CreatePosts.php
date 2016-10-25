<td><a href="AdminHome.html">Home</a></td>
<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "nsingh", "Password123!", "nsingh");


	$username = $_POST["pick"];
	$post     = $_POST["post"];
	$userQuery = "SELECT user_id FROM users WHERE user_id = '$username'";
	
	
	$result= $mysqli->query($userQuery);
	
	
	if (!$result) {
    echo "Could not successfully run query";
    exit;
}

	if($result > 0)
	{ 
	 	while($row = $result->fetch_assoc())
	 	{
			echo $row['user_id'];
	 	}
	}
	
	if($result->num_rows > 0)
	{
		
		if($mysqli->query("INSERT INTO `Posts` (`content`, `author_id`) VALUES ('$post', '$username')"))
			echo "   -You have successfully posted a message";
		
	}
	else
	{
		echo "This is not correct.";
	}
	
	$results->free();
$mysqli->close();

?>
<td><a href="AdminHome.html">Home</a></td>