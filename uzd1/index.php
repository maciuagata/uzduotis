<?php 
$m = array(1, 55, 22, 22, 1, -2, 0, -123, 66, 22, 11);
sort($m);

$arrlength = count($m);
for($x = 0; $x < $arrlength; $x++) {
  echo $m[$x];
  echo "<br>";
}
echo "------------------<br>";

$mas = array(21, 1, -2, 0, -123, 66, -22, 10);
rsort($mas);

$arrlength = count($mas);
for($x = 0; $x < $arrlength; $x++) {
  echo $mas[$x];
  echo "<br>";
}

echo "------------------<br>";

$myArray = array (
array(56,95,88,73,29),
array(72,27,10,54,20),
array(91,98,38,69,28),
array(97,15,39,57,60),
array(10,16,6,5,50),
array(65,99,15,96,55),
array(35,50,46,92,61),
array(30,29,50,100,81)
);

foreach($myArray as $arr) {
    sort($arr);
    echo implode (',', $arr);
    echo "<br>";
}

?>

