<?php
$varString = "deee";
$varStringUpper="DEEsdsdsd sdsdsdssada deo de dsddsds";

$varString=strtoupper($varString);

echo($varString);

echo($varStringUpper);

echo strlen($varString);
echo strpos($varStringUpper, "de");
echo "<br>";
echo str_replace('deo', 'zggrey', $varStringUpper);
echo "<br>";
echo substr($varStringUpper, 4);
echo str_split($varStringUpper);
echo "";
 ?>