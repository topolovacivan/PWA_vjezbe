<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vježba 3-2</title>
</head>
<body>

<h2>Kalkulator</h2>

<form method="post">
    Broj 1:
    <input type="number" name="broj1" step="any" required><br><br>

    Broj 2:
    <input type="number" name="broj2" step="any" required><br><br>

    Operacija:
    <select name="operacija">
        <option value="+">Zbrajanje</option>
        <option value="-">Oduzimanje</option>
        <option value="*">Množenje</option>
        <option value="/">Dijeljenje</option>
    </select>

    <input type="submit" value="Izračunaj">
</form>

<?php
if(isset($_POST['broj1']) && isset($_POST['broj2']))
{
    $a = $_POST['broj1'];
    $b = $_POST['broj2'];
    $op = $_POST['operacija'];

    switch($op)
    {
        case '+':
            $rezultat = $a + $b;
            break;

        case '-':
            $rezultat = $a - $b;
            break;

        case '*':
            $rezultat = $a * $b;
            break;

        case '/':
            if($b != 0)
            {
                $rezultat = $a / $b;
            }
            else
            {
                $rezultat = "Dijeljenje s nulom nije dozvoljeno!";
            }
            break;

        default:
            $rezultat = "Nepoznata operacija!";
    }

    echo "<h3>Rezultat: $rezultat</h3>";
}
?>

</body>
</html>
