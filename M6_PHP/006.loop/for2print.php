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
for($dong = 1; $dong <= 20; $dong++){
    print '<tr>';
    print "<td> $dong";
    print '</td>';
    print "<td>";
    print "Tieu de $dong";
    print '</td>';
    print '</tr>';
}
print "</table>";
?>
</body>
</html>
