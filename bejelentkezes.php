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

$sql = "SELECT email, jelszó FROM regisztráció";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $arrayEmail[] = $row["email"];
        $arrayJelszo[] = $row["jelszó"];
    }
}
echo array_search($email, $arrayEmail);
echo $arrayJelszo[array_search($email, $arrayEmail)];
if (array_search($email, $arrayEmail) and $jelszo == $arrayJelszo[array_search($email, $arrayEmail)]) {
    echo "Sikeres bejelentkezes";
    header('Location: bejelentkezve.html');
    exit;
} else {
    echo "Sikertelen bejelentkezés";
}
