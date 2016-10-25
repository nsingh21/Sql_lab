<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "nsingh", "Password123!", "nsingh");
if ($mysqli->connect_error)
{
    die("Connection failed: ".$mysqli->connect_error);
    exit();
}
$poststodelete=$_POST['delete'];
foreach($poststodelete as $post)
{
  $query="DELETE FROM Posts WHERE post_id='{$post}'";
  if ($mysqli->query($query))
  {
    echo "Post '{$post}' was deleted successfully!<br>";
  }
  else
  {
    echo 'Error: ' . $query . '<br>' . $mysqli->error;
  }
}
$mysqli->close();
?>
 <td><a href="AdminHome.html">Home</a></td>