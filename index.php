<?php
$stdname = "Ameer Rishmawi";
$date = date('d-M-Y');
$time = date('h:i:s');
echo "<h1>" . "Multiplication Table by " . $stdname . "</h1>";
echo "Date: " . $date . "<br>  Time: " . $time;

echo "<table border ='1' width=50% height=45% style='border-collapse: collapse; border-color: #eee; text-align: center;'>";

for ($i = 1;$i <= 9;$i++)
{
    echo "<tr>";
    $value = $i - 0;
    echo "<td width=3.5% style='background-color: darkgreen; color: white;'>$value</td>";

    for ($j = 1;$j <= 9;$j++)
    {
        echo "<td>" . $i . "x" . $j . "=" . ($i * $j) . "</td>";
    }

    echo "</tr>";

}

echo "</table>";

?>
