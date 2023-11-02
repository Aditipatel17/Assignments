<?php
$n1 = 0;
$n2 = 1;
$count = 10;

echo "Fibonacci series:\n";

echo $n1 . " " . $n2 . " ";

for ($i = 2; $i < $count; $i++) {
    $n3 = $n1 + $n2;
    echo $n3 . " ";
    $n1 = $n2;
    $n2 = $n3;
}
?>