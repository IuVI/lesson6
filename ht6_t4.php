<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Task 4</title>
</head>
<body>
<?php
	echo "Завдання 4. Дано N. Знайти таке число q, квадрат якого є дільником N, а q^3 не є дільником N. Якщо q^2 = N, то я вважаю таке q валідним. <br>";
	function quadrofactor ($a) {
		for ($i=2; $i < $a; $i++) { 
			if ($a % $i == 0) {
				if (($a % ($i * $i) == 0) && ($a % ($i * $i * $i) != 0))  {
					return $i;
				}
			}
		}
		return 'no squared factors';
	}
	echo "for the number 121 the first squared factor is: " . quadrofactor(121) . ".<br>";
	echo "for the number 27 the first squared factor is: " . quadrofactor(27) . ".<br>";
	echo "for the number 70 the first squared factor is: " . quadrofactor(70) . ".<br>";
	echo "for the number 250 the first squared factor is: " . quadrofactor(250) . ".<br>";
	echo "for the number 252 the first squared factor is: " . quadrofactor(252) . ".<br>";
	echo "for the number 2500 the first squared factor is: " . quadrofactor(2500) . ".<br>";
	echo "for the number 625 the first squared factor is: " . quadrofactor(625) . ".<br>";
	echo "<hr>";
?>
</body>
</html>