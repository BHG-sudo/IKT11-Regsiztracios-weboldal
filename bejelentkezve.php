<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <link rel="stylesheet" href="bejelent.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejelenkezett felhasználó</title>
    <style>
        fieldset {
            height: 230px;
        }
    </style>
</head>

<body>
    <h1>Bejelenkezve</h1>
    <div id="sha">
        <form>
            <fieldset>
                <p><?php echo "Email címe: " . $_SESSION["email"] ?></p>
                <p><?php echo "Születesnap: " . $_SESSION["szuletesnap"] ?></p>
                <p><?php echo "Telefonszám: " . $_SESSION["telefonsz"] ?></p>
                <button type="submit"><a href="bejelentkezes.html">Kijelentkezés</a></button>
                <button type="submit"><a href="modadat.php">Adat Módosítás</a></button>
            </fieldset>
        </form>
    </div>
</body>


</html>