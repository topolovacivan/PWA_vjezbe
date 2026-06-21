<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba4-4</title>
</head>
<body>
    <form action="" method="get">
        <label for="br">Broj: </label>
        <input type="number" name="br"></input><br>
        <button type="submit" value="submit">Jel' prost</button>
    </form>
    <br>
    
</body>
</html>

<?php

    if(isset($_GET['br'])){
        $broj=htmlentities($_GET['br']);
        for($i=$broj-1; $i>1; $i--){
            if(($broj % $i)==0){
                $prost=false;
                break;
            }
            else{
                $prost=true;
            }
        }
        if($prost==true){
            echo "Broj $broj je prost.<br><br>";
        }
        else if($prost==false){
            echo "Broj $broj nije prost.<br><br>";
        }
        echo "Prosti brojevi: <br>";
        for($j=100; $j>0; $j--){
            for($k=$j-1; $k>1; $k--){
                if(($j % $k)==0){
                    $pro=false;
                    break;
                }
                else{
                    $pro=true;
                }
            }
            if($pro==true){
                echo "$j<br>";
            }
            else if($pro==false){
                continue;
            }
        }
    }
