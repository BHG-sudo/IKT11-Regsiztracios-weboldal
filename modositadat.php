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


$id = $_SESSION["ID"];
$email = $_POST["email"];
$jelszo = $_POST["jelszo"];
$szulnap = $_POST["szuletesnap"];
$telefonsz = $_POST["telefonszam"];
$telep = $_POST["telepules"];
$irszam = $_POST["iranyitoszam"];

$sql = "UPDATE `regisztráció` SET 
`email` = '$email', 
`jelszó` = '$jelszo', 
`születési` = '$szulnap', 
`telefonszám` = '$telefonsz', 
`Település` = '$telep', 
`irányítószám` = '$irszam' 
WHERE `regisztráció`.`id` = $id;";

if (mysqli_query($conn, $sql)) {
    echo "Sikeres adatmódosítás";
    $_SESSION["email"] = $email;
    $_SESSION["jelszo"] = $jelszo;
    $_SESSION["szuletesnap"] = $szulnap;
    $_SESSION["telefonsz"] = $telefonsz;
    $_SESSION["telepules"] = $telep;
    $_SESSION["irszam"] = $irszam;
    header('Location: bejelentkezve.php');
} else {
    echo "Hiba! Nem sikerült az adatmódosítás: " . mysqli_error($conn);
}

mysqli_close($conn);
exit;
