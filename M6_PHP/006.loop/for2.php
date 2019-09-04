<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
echo "<table>";
echo "<tr>";
echo "<td> STT";
echo "</td>";
echo "<td> Tieu de";
echo "</td>";
echo "</tr>";
for($dong = 1; $dong <= 20; $dong++){
    echo '<tr>';
    echo "<td> $dong";
    echo '</td>';
    echo "<td>";
    echo "Tieu de $dong";
    echo '</td>';
    echo '</tr>';
}
echo "</table>";
?>
</body>
</html>
