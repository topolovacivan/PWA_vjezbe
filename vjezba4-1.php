<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba4-1</title>
</head>
<body>

        <?php echo"<p>Označi vozilo: </p><ul>";
        echo"<form action='' method='get'>";
        $cars=array("Audi","BMW","Renault","Citroen");
        foreach($cars as $car){
            echo"<input type='radio' name='auto' value='$car'>$car</input><br>";
        }
        echo '<br><button type="submit" value="submit">POŠALJI</button><br>';   
        echo"</form>";?>
        
    
    <br>
</body>
</html>

<?php

if(isset($_GET['auto'])){
    $auto=htmlentities($_GET['auto']);
    echo "$auto";
}

?>
