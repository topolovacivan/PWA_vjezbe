<?php
session_start();

if(isset($_POST['korisnik']))
{
    $_SESSION['korisnik'] = $_POST['korisnik'];

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prijava</title>
</head>
<body>

<h2>Prijava korisnika</h2>

<form method="post">
    Korisničko ime:
    <input type="text" name="korisnik" required>

    <input type="submit" value="Prijava">
</form>

</body>
</html>

<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Početna</title>
</head>
<body>

<?php
if(isset($_SESSION['korisnik']))
{
    echo "<h2>Dobrodošli " . $_SESSION['korisnik'] . "</h2>";
    echo "<a href='odjava.php'>Odjava</a>";
}
else
{
    echo "<h2>Niste prijavljeni!</h2>";
    echo "<a href='login.php'>Prijava</a>";
}
?>

</body>
</html>

<?php
session_start();

session_destroy();

header("Location: login.php");
exit();
?>
