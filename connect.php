<?php
$servername = "localhost";
$username = "local_usr";
$password = "password";
$dbname = "projekt";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "";
$result = mysqli_query($conn, $sql);

$kiirhato = mysqli_fetch_assoc($result);
mysqli_close($conn);
?>
