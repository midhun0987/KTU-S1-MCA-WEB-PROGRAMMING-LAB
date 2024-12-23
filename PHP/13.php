<?php
$students = array("Midhun","Jude", "Rasim", "Aswin", "Nirmal","Naaji", "Farook");
echo "Original Array: \n";
print_r($students);
echo "<br><br>";
asort($students);
echo "\nArray sorted in ascending order using asort(): \n";
print_r($students);
echo "<br><br>";
arsort($students);
echo "\nArray sorted in descending order using arsort(): \n";
print_r($students);
?>
