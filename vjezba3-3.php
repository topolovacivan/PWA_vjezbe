<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Vježba 3-3</title>

<style>
body{
    font-family: Arial, sans-serif;
    width: 500px;
    margin: 30px auto;
}

form{
    padding: 20px;
    border: 1px solid #ccc;
}

input{
    margin: 5px 0;
}
</style>

</head>
<body>

<h2>Izračun konačne ocjene</h2>

<form method="post">

    Ocjena I. kolokvija:
    <input type="number" name="kol1" min="1" max="5" required><br>

    Ocjena II. kolokvija:
    <input type="number" name="kol2" min="1" max="5" required><br><br>

    <input type="submit" value="Izračunaj">

</form>

<?php
if(isset($_POST['kol1']) && isset($_POST['kol2']))
{
    $kol1 = $_POST['kol1'];
    $kol2 = $_POST['kol2'];

    if($kol1 < 1 || $kol1 > 5 || $kol2 < 1 || $kol2 > 5)
    {
        echo "<p>Ocjene moraju biti između 1 i 5!</p>";
    }
    else
    {
        $prosjek = ($kol1 + $kol2) / 2;

        if($kol1 == 1 || $kol2 == 1)
        {
            $konacna = 1;
        }
        else
        {
            $konacna = round($prosjek);
        }

        echo "<h3>Prosjek: " . number_format($prosjek, 2) . "</h3>";
        echo "<h3>Konačna ocjena: $konacna</h3>";
    }
}
?>

</body>
</html>
