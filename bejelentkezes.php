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

$sql = "SELECT * FROM regisztráció where email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $_SESSION["ID"] = $row["id"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["jelszo"] = $row["jelszó"];
        $_SESSION["szuletesnap"] = $row["születési"];
        $_SESSION["telefonsz"] = $row["telefonszám"];
        $_SESSION["telepules"] = $row["Település"];
        $_SESSION["irszam"] = $row["irányítószám"];
    }
}
if ($jelszo == $_SESSION["jelszo"]) {
    header('Location: bejelentkezve.php');
    exit;
} else {
    echo "Sikertelen bejelentkezés";
}
