<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST["email"];
$jelszo = $_POST["jelszo"];
$szulnap = $_POST["szuletesnap"];
$tel = $_POST["telefonszam"];

$sql = "SELECT email FROM regisztráció";
$result = mysqli_query($conn, $sql);
$arrayEmail = ["a"];
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
    $arrayEmail[] = $row["email"];
  }
}
print_r($arrayEmail);
if (array_search($email, $arrayEmail)) {
  echo "Már van ilyen email-cím";
} else {
  $sql = "INSERT INTO regisztráció (email, jelszó, születési, telefonszám)
  VALUES ('$email', '$jelszo', '$szulnap', '$tel')";
  if ($conn->query($sql) === TRUE) {
    echo "Sikeres regisztráció";
    header('Location: bejelentkezve.html');
    exit;
  } else {
    echo "Hiba: " . $sql . "<br>" . $conn->error;
  }
}

mysqli_close($conn);
exit;
