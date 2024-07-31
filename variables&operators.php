<?php
echo "<h1>Variables and Operators</h1>";
// variables and plus minus operations

$a = 2;
$b = 5;

echo $a . ' ' . $b . "<br />";
echo $a + $b . "<br />";
echo $a - $b . "<br />";
echo $a / $b . "<br />";

// ternary operator

$num = 13;

$result = ($num % 2 == 0)? "Even" : "Odd";

echo "The number $num is  $result";

// either or operator

$age = 18;

$isAdult = ($age >= 18)? "Adult" : "Minor";

echo "The person is $isAdult";

// if else statements

$education = "Master";

if ($education == "Master") {
    echo "The person is eligible for the job";
}
else {
    echo "The person is not eligible for the job";
}

?>