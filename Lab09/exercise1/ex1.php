<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//Inside myfirstprogram.php
function sum($x, $y) {
$z = $x + $y;
return $z;
}

function multi($x, $y) {
$z = $x * $y;
return $z;
}
/*
echo "5 + 10 = <b>" . sum(5, 10) . "</b><br>";
echo "7 + 13 = <b>" . sum(7, 13) . "</b><br>";
echo "2 + 4 = <b>" . sum(2, 4) . "</b><br>";

echo "5 * 10 = <b>" . multi(5, 10) . "</b><br>";
echo "7 * 13 = <b>" . multi(7, 13) . "</b><br>";
echo "2 * 4 = <b>" . multi(2, 4) . "</b><br>";
*/
$nums = range(1, 100);
$nums2 = range(0, 100);
foreach ($nums2 as $num) {
  echo "<td><b>".$num."<b></td>";
}
foreach ($nums as $num) {
    echo "<tr>";
    echo "<td><b>".$num."<b></td>";
    foreach($nums as $num2) {
      echo "<td>".multi($num, $num2) . "</td>";
    }
    echo "</tr>";
}
?>
