<?php
    $naslov="Vjezba 2-4";
    $autor="Ivan Topolovac";
?>

<?php
    if(isset($_GET['abr']) && isset($_GET['bbr']))
    {
        $a=htmlentities($_GET['abr']);
        $b=htmlentities($_GET['bbr']);
        $c=(3*$a-$b)/2;
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($naslov); ?></title>
</head>
<body>
    <form action="" method="get">
        <label for="a">Vrijednost a:</label>
        <input type="number" id="a" name="abr"></input><br>
        <label for="b">Vrijednost b:</label>
        <input type="number" id="b" name="bbr"></input><br>
        <button type="submit" value="submit">Pošalji</button>
    </form>

</body>
</html>

<?php if(isset($c)) echo "<br><p>Rješenje = $c</p>" ?>
