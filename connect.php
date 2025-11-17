<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$email = $_POST["email"];
$jelszo = $_POST["jelszo"];
$szulnap = $_POST["szuletesnap"];
$tel = $_POST["telefonszam"];

$sql = "SELECT * FROM regisztráció";
$result = mysqli_query($conn, $sql);
$csekkolom = mysqli_fetch_assoc($result);
print_r($csekkolom);



$sql = "INSERT INTO regisztráció (email, jelszó, születési, telefonszám)
VALUES ('$email', '$jelszo', '$szulnap', '$tel')";
if ($conn->query($sql) === TRUE) {
  echo "Sikeres regisztráció";
} else {
  echo "Hiba: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
