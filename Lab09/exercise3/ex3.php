<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);



//access the global array called $_POST to get the values from the text fields
$totalCost = 0;
$shipingCost = $_POST["shipQ"];

$numX = $_POST["qX"];
$numY = $_POST["qY"];
$numZ = $_POST["qZ"];



$totalCost=$shipingCost+$numX*5+$numY*7+$numZ*10;
//echo "Total Cost: $".$totalCost."<br>"; 
echo "Welcome!<br>";

echo "<table border=1>".
"<tr>".
"<td> </td>"."<td>Quantity</td>"."<td>CostPerItem</td>"."<td>Subtotal</td>".
"</tr>".

"<tr>".
"<td>X</td>"."<td>". $numX ."</td>"."<td>$5</td>"."<td>$". $numX*5 ."</td>".
"</tr>".

"<tr>".
"<td>Y</td>"."<td>". $numY ."</td>"."<td>$7</td>"."<td>$". $numY*7 ."</td>".
"</tr>".

"<tr>".
"<td>Z</td>"."<td>". $numZ ."</td>"."<td>$10</td>"."<td>$". $numZ*10 ."</td>".
"</tr>".

"<tr>".
"<td>Shipping Cost</td>"."<td>$". $shipingCost ."</td>".
"</tr>".

"<tr>".
"<td>Total Cost</td>"."<td>$". $totalCost ."</td>".
"</tr>".

"</table>";

?>
