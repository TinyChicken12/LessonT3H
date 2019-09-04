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
$dong = 1;
do { ?>
    <tr>
        <td><?php echo $dong ?></td>
        <td><?php echo "Tieu de $dong" ?></td>
    </tr>
    <?php
    $dong ++;
}
while($dong <=20)
 ?>
<?php
print "</table>";
?>
</body>
</html>
