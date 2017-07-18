
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

</head>
<body>
<h1> ДЗ 1</h1>
<?php
$name = "Сослан";
$age = 34;
echo "Меня зовут $name";
echo"<br/>";
echo "Мне $age года";
?>
<h1> ДЗ 2</h1>
<?php
$paint = 80;
$flomast = 23;
$karand = 40;
$kraski = $paint-$flomast-$karand;
echo "Картин выполненных красками $kraski";
?>
<h1> ДЗ 3</h1>
<?php
define("Loftschool", 'teach');
echo Loftschool;
define("Loftschool", 'teach1');
?>
<h1> ДЗ 4</h1>
<?php
$age = rand(1,89);
if ($age >= 18 && $age <= 65)
{echo "Вам еще работать и работать";}
elseif ($age > 65) {
 	echo "Вам пора на пенсию";
 }
 elseif ($age >= 1 && $age <=17) {
 	echo "Вам еще рано работать";
 } 
 else {
  	echo "Неизвестный возраст";
  } 
?>
<h1> ДЗ 5</h1>
<?php
$day = 1;
switch ($day) {
	
	case 1:
	case 2:
	case 3:
	case 4:
	case 5:
		echo "Это рабочий день";
		break;
	case $day = 6 || $day = 7:
		echo "Это выходной день";
		break;
	case $day > 7 || $day <= 0:
		echo "Неизвестный день";
		break;

	}
?>
<h1> ДЗ 6</h1>
<div style="border:1px solid #000;width: 50%; text-align: center;">
<?php
$bmw = array(
	'model' => "X5",
	'speed' => 200,
	'doors' => 5,
	'year' => 2017, 
	);

$toyota = array(
	'model' => "Camry",
	'speed' => 200,
	'doors' => 4,
	'year' => 2016, 
	);

$opel = array(
	'model' => "Corsa",
	'speed' => 180,
	'doors' => 4,
	'year' => 2015, 
	);

$cars = Array(
    "bmw" => $bmw,
    "toyota" => $toyota,
    "opel" => $opel
);

foreach ($cars as $table => $value) {
	echo $cars;
}

?></div>

<h1> ДЗ 7</h1>
<table cellpadding="5" border = "1">
<?php
for($i = 1; $i <= 10; $i++) {
echo'<tr>';
for($n = 1; $n <= 10; $n++)
{ 
$s=$n*$i;
echo '<td>';

if($s%2==0 || $n%2 == 0) echo "($s)";
elseif($s%2 == 1 && $n%2 == 1) print "<div> [$s] </div>";

else echo $s;
}
}
echo '</td>';
echo '</tr>';
?>
</table>
<h1> ДЗ 8</h1>
<?php
$str = "Game Over";
echo $str;
$cat = explode("-",$str);
echo "<br/>";
print_r($cat);
?>
</body>
</html>