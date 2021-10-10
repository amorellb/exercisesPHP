<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    table {
        border: 1px solid black;
        text-align: center;
    }

    td {
        border: 1px solid black;
    }
</style>
<?php
// Turn off all error reporting
error_reporting(0);

$unsetVar = '';
unset($unsetVar);
$varArray = [null, 0, true, false, '0', '', 'foo', array(), $unsetVar];
$printedValues = ['$var = null', '$var = 0', '$var = true', '$var = false', '$var = "0"', '$var = ""', '$var = "foo"', '$var = array()', 'unset($var)'];
$flag = true;

echo "<table><tr style='font-weight: bold; background-color: chocolate; color: white'><td>Contenido de \$var</td><td>isset(\$var)</td><td>empty(\$var)</td><td>(bool) \$var</td></tr>";

for ($i = 0; $i < count($varArray); $i++) {
  $isset = isset($varArray[$i]) == 1 ? 'true' : 'false';
  $empty = empty($varArray[$i]) == 1 ? 'true' : 'false';
  $boolValue = (bool) $varArray[$i] == 1 ? 'true' : 'false';

  if ($flag) {
    echo "<tr style='background-color: aliceblue'>";
    echo "<td style='font-weight: bold'>$printedValues[$i]</td><td>$isset</td><td>$empty</td><td>$boolValue</td>";
    echo "</tr>";
    $flag = false;
  } else {
    echo "<tr style='background-color: cornsilk'>";
    echo "<td style='font-weight: bold'>$printedValues[$i]</td><td>$isset</td><td>$empty</td><td>$boolValue</td>";
    echo "</tr>";
    $flag = true;
  }

}

echo "</table>";
?>
</body>
</html>
