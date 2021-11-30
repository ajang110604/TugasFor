<?php
for($a=1; $a<=5; $a++){
    for($b=1; $b<=$a; $b++){
        echo " &nbsp";
    }
    for($c=5; $c>=$a; $c--){
        echo "*";
    }
    echo "<br>";
}
?>