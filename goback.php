<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movement";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


echo "stop";
echo "<br>";

    $sql = "insert into robot (backward)
    values('backward')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>