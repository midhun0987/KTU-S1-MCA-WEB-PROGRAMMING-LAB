<!DOCTYPE html>
<html>
<head>
<style>
table {
border-collapse: collapse;
width: 50%;
}
th, td {
border: 1px solid black;
padding: 10px;
text-align: center;
}
th {
background-color: #f2f2f2;
}
</style>
</head>
<body>
<?php

$players = array("virat kohli", "rohit sharma", "hardik pandya", "jaspritbumrah", "msdhoni");
echo "<table>";
echo "<tr><th>Index</th><th>Indian Cricket Players</th></tr>";
$index = 1;
foreach($players as $player) {
echo "<tr><td>$index</td><td>$player</td></tr>";
$index++;
}
echo "</table>";
?>
</body>
</html>
