You can tell if a number is even or odd in PHP without using any condition or loop by using the modulo operator.
 Here is an expression which will return true if $number is even, 
false if odd: $number % 2 == 0. This works for every integer PHP value. For example:

<?php
$number = 20;
if ($number % 2 == 0) {
    print "It's even";
}
?>