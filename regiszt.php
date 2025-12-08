<?php
session_start();
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
$lakcim = $_POST["telepules"];
$irszam = $_POST["iranyitoszam"];

$sql = "SELECT email FROM regisztráció";
$result = mysqli_query($conn, $sql);

$arrayEmail[] = "";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
    $arrayEmail[] = $row["email"];
  }
}
if (array_search($email, $arrayEmail)) {
  echo "Már van ilyen email-cím";
} else {
  $sql = "INSERT INTO regisztráció (email, jelszó, születési, telefonszám, Település, irányítószám)
  VALUES ('$email', '$jelszo', '$szulnap', '$tel', '$lakcim', '$irszam')";
  if ($conn->query($sql) === TRUE) {
    $_SESSION["email"] = $email;
    $_SESSION["jelszo"] = $jelszo;
    $_SESSION["szuletesnap"] = $szulnap;
    $_SESSION["telefonsz"] = $tel;
    $_SESSION["telepules"] = $lakcim;
    $_SESSION["irszam"] = $irszam;
    echo "Sikeres regisztráció";
    header('Location: bejelentkezve.php');
    exit;
  } else {
    echo "Hiba: " . $sql . "<br>" . $conn->error;
  }
}

mysqli_close($conn);
exit;
