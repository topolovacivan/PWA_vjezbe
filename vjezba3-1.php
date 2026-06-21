<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vježba 3-1</title>
</head>
<body>

<h2>Pogodi broj (1-9)</h2>

<form method="post">
    Unesite broj:
    <input type="number" name="broj" min="1" max="9" required>
    <input type="submit" value="Pogodi">
</form>

<?php
if(isset($_POST['broj']))
{
    $korisnik = $_POST['broj'];
    $randomBroj = rand(1, 9);

    echo "<p>Zamišljeni broj je: $randomBroj</p>";

    if($korisnik == $randomBroj)
    {
        echo "<h3>Pogodili ste broj!</h3>";
    }
    else
    {
        echo "<h3>Niste pogodili broj.</h3>";
    }
}
?>

</body>
</html>
