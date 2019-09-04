<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<table>
    <tr>
        <td></td>
    </tr>
</table>
<body>
<?php
print "<table>";
print "<tr>";
print "<td> STT";
print "</td>";
print "<td> Tieu de";
print "</td>";
print "</tr>";
for($dong = 1; $dong <= 20; $dong++){ ?>
    <tr>
        <td><?php echo $dong ?></td>
        <td><?php echo "Tieu de $dong" ?></td>
    </tr>
<?php
} ?>
<?php
print "</table>";
?>
</body>
</html>
