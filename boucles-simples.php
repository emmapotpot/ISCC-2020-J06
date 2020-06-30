<?php
function compter($max)
{
    $number=1;
    while($number <= $max) {
        echo "<p> $number </p> <br>";
        $number = $number +1;
    }
}
compter(100) 
?>