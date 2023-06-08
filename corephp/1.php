<?php
$physics=60;
$chemistry=75;
$biology=80;
$maths=85;
$computer=95;

$total=NULL;
$percentage=NULL;
$grade=NULL;

$total=$physics+$chemistry+$biology+$maths+$computer;
$percentage = ($total / 500.0) * 100;

if ($percentage >= 90)
    $grade = "A";
else if ($percentage >= 80 && $percentage < 90)
    $grade = "B";
else if ($percentage >= 70 && $percentage < 80)
    $grade = "C";
else if ($percentage >= 60 && $percentage < 70)
    $grade = "D";
else
    $grade = "E";
    
 echo "The Percentage    = " . $percentage . "%\n";
echo "The Grade         = '" . $grade . "'\n";

?>