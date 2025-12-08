<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bejelent.css">
    <title>Adatok módosítása</title>
</head>

<body>
    <form>
        <div>
            <h1>Adatok módosítása</h1>
            <form action="bejelentkezes.php" method="post">
                <fieldset>
                    <div id="sha">
                        <label for="e-mail">E-mail cím</label>
                        <input type="email" id="email" name="email" required value="<?php echo $_SESSION["email"] ?>">
                        <label for="jelszo">Jelszó</label>
                        <input type="password" id="jelszo" name="jelszo" required value="<?php echo $_SESSION["jelszo"] ?>">
                        <label for="szuletesnap">Szuletési év</label>
                        <input type="date" name="szuletesnap">
                        <label for="telszam">Telefonszám</label>
                        <input type="tel" name="telefonszam" maxlength="11" required value="<?php echo $_SESSION["telefonsz"] ?>">
                        <label for="telepusles">Településed</label>
                        <input type="text" name="telepules" maxlength="50" value="<?php echo $_SESSION["telepules"] ?>">
                        <label for="iranyitoszam">Irányítószám</label>
                        <input type="number" name="iranyitoszam" maxlength="4" required value="<?php echo $_SESSION["irszam"] ?>">
                        <button type="submit" value="Submit">Módosítás</button>
                    </div>
                </fieldset>
        </div>
    </form>


</body>

</html>