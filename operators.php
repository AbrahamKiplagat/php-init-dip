<?php
//  != not equal to
// !== not identical (if has the same data type eg 5 and "5")
/**
 * ++$x pre increment
 * $x++ post increment
 */
$x = 30;
$y = 30;
if ($x > $y) {
    echo "x is more than y ";
} else if ($x < $y) {
    echo "x is less than y";
} else {
    echo "x and y are equal";
}
echo "<br><br>"; 
$x = 5;

// Pre-increment (++$x): Increments $x by 1, then returns $x
echo "Pre-increment: " . ++$x . "<br>"; // Output will be 6

// Post-increment ($x++): Returns $x, then increments $x by 1
echo "Post-increment: " . $x++ . "<br>"; // Output will be 6
echo "After Post-increment: " . $x . "<br>"; // Output will be 7
echo "<br><br>";
echo "Loop output: ";
for ($i = 0; $i < 5; $i++) {
    echo $i . " ";
}
// Code block 4 - foreach loop
echo "<br><br>";
$fruits = array("Apple", "Orange", "Banana", "Grapes");

echo "Fruit List: ";
foreach ($fruits as $fruit) {
    echo $fruit . ", ";
}
?>
