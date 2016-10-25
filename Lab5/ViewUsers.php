<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "nsingh", "Password123!", "nsingh");

if($mysqli->connect_errno){
	printf("Connection Failed: %s\n",$mysqli->connect_error);
	exit();
}

$user = $mysqli->query("SELECT user_id FROM users");

echo '<table border = "1" style = "width = 100%">';
echo '<th>Users</th>';
while($row = mysqli_fetch_array($user)){
	
	$individual = $row['user_id'];
	echo '<tr><td>'.$individual.'</td><tr>';
	
}
echo '</table>';
$mysqli->close();
?>
 <td><a href="AdminHome.html">Home</a></td>
 <style>
     user {
      background-color:  #00FFFF;
      border-style: solid;
      border-width: 10px;
      border-color:#black;
      font-size:20px;
        font-weight: bold;
    }
    th {
font-family: Arial, Helvetica, sans-serif;
background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;
}
td {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
border: 1px solid #DDD;
}
    </style>