<?php



$marks = 85; 


echo "<h3>Task 1 – Grade Checker (if‑else)</h3>";
if ($marks >= 90 && $marks <= 100) {
    echo "Marks: $marks – Grade A<br>";
} elseif ($marks >= 80) {
    echo "Marks: $marks – Grade B<br>";
} elseif ($marks >= 70) {
    echo "Marks: $marks – Grade C<br>";
} else {
    echo "Marks: $marks – Fail<br>";
}


echo "<h3>Task 1 – Grade Checker (switch)</h3>";
switch (true) {
    case ($marks >= 90 && $marks <= 100):
        echo "Marks: $marks – Grade A<br>";
        break;
    case ($marks >= 80):
        echo "Marks: $marks – Grade B<br>";
        break;
    case ($marks >= 70):
        echo "Marks: $marks – Grade C<br>";
        break;
    default:
        echo "Marks: $marks – Fail<br>";
}


echo "<h3>Task 2 – For loop (1 to 10)</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br>";


echo "<h3>Task 2 – While loop (even numbers 1 to 20)</h3>";
$even = 2;
while ($even <= 20) {
    echo $even . " ";
    $even += 2;
}
echo "<br>";

echo "<h3>Task 3 – Square Function</h3>";
function square($num)
{
    return $num * $num;
}

$value1 = 5;
$value2 = 9;

echo "Square of $value1 is  . square($value1) . <br>";
echo "Square of $value2 is  . square($value2) . <br>";
?>