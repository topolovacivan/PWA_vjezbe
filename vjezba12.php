<?php
if(isset($_POST['naslov']))
{
    setcookie("naslov", $_POST['naslov'], time()+86400, "/");
    setcookie("tekst", $_POST['tekst'], time()+86400, "/");

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Unos vijesti</title>
</head>
<body>

<h2>Unos vijesti</h2>

<form method="post">
    Naslov:<br>
    <input type="text" name="naslov" required><br><br>

    Tekst:<br>
    <textarea name="tekst" rows="5" cols="40" required></textarea><br><br>

    <input type="submit" value="Spremi">
</form>

</body>
</html><?php
if(isset($_POST['naslov']))
{
    setcookie("naslov", $_POST['naslov'], time()+86400, "/");
    setcookie("tekst", $_POST['tekst'], time()+86400, "/");

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Unos vijesti</title>
</head>
<body>

<h2>Unos vijesti</h2>

<form method="post">
    Naslov:<br>
    <input type="text" name="naslov" required><br><br>

    Tekst:<br>
    <textarea name="tekst" rows="5" cols="40" required></textarea><br><br>

    <input type="submit" value="Spremi">
</form>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prikaz vijesti</title>
</head>
<body>

<h2>Vijest iz kolačića</h2>

<?php
if(isset($_COOKIE['naslov']) && isset($_COOKIE['tekst']))
{
    echo "<h3>" . $_COOKIE['naslov'] . "</h3>";
    echo "<p>" . $_COOKIE['tekst'] . "</p>";
}
else
{
    echo "Nema spremljenih podataka.";
}
?>

<br>
<a href="news.php">Dodaj vijest</a>

</body>
</html>
