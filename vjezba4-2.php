<?php

    function ducan($stanje){echo "Ducan je $stanje.";}
    
    $date = new DateTimeImmutable();
    $dan = $date->format('D');
    $sat = $date->format('G');

    if($dan=="Sun"){
        ducan("zatvoren");
    }
    else if($dan=="Sat"){
        if($sat>=9 && $sat<=14){ducan("otvoren");}
        else ducan("zatvoren");
    }
    else {
        if($sat>=8 && $sat<=20){ducan("otvoren");}
        else ducan("zatvoren");
    }
?>
