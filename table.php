<?php
echo "<h1>Table in php</h1>";

$num = 2;
$multiplier = 0;

for ($i=1; $i <=10 ; $i++) {
    $multiplier++;
    $result = $num * $multiplier;

    echo "$num x $i = $result <br>";
}

?>