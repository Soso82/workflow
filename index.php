
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

</head>
<body>
<style >
	.array{border: 1px solid #000;}
</style>
<h1> ДЗ 1</h1>
<?php
$name = "Сослан";
$age = 34;
echo "Меня зовут $name \n";
echo"<br/>";
echo "Мне $age года \n";
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
$day = 6;
switch ($day) {
	
	case $day = 1:
		echo "Это рабочий день";
		break;
	case $day = 2:
		echo "Это рабочий день";
		break;
	case $day = 3:
		echo "Это рабочий день";
		break;
	case $day = 4:
		echo "Это рабочий день";
		break;
	case $day = 5:
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
	'model' => X5,
	'speed' => 200,
	'doors' => 5,
	'year' => 2017, 
	);
echo"<br/>";
echo"<p>";
echo "CAR bmw";
echo"<br/>";
echo $bmw[model]." ".$bmw[speed]." ".$bmw[doors]." ".$bmw[year];
echo"</p>";	

$toyota = array(
	'model' => Camry,
	'speed' => 200,
	'doors' => 4,
	'year' => 2016, 
	);
echo"<br/>";
echo"<p>";
echo "CAR Toyota";
echo"<br/>";
echo $toyota[model]." ".$toyota[speed]." ".$toyota[doors]." ".$toyota[year];
echo"</p>";	

$opel = array(
	'model' => Corsa,
	'speed' => 180,
	'doors' => 4,
	'year' => 2015, 
	);
echo"<br/>";
echo"<p>";
echo "CAR Toyota";
echo"<br/>";
echo $opel[model]." ".$opel[speed]." ".$opel[doors]." ".$opel[year];
echo"</p>";
$newarray = array_merge ($bmw, $toyota, $opel);
print_r($newarray);	
?></div>
</body>
</html>