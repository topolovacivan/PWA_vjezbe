<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba4-3</title>
    <style>
        p{color:red; background-color:pink; opacity:50%;width:10%;}
    </style>
</head>
<body>
    <form action="" method="get">
        <label for="rec"><b>Ulazni niz: </b></label><br>
        <input type="text" name="rec"></input><br><br>
        <button type="submit" value="submit">Ispiši broj riječi</button>
    </form>
    <br>
</body>
</html>


<?php

if(isset($_GET['rec'])){
    $rec=htmlentities($_GET['rec']);
    $br=str_word_count($rec);

echo "<span>Ulazni niz: </span><p>$rec</p><span>Broj rjeci u recenici:$br";
}
?>
