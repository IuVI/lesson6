<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Task 3</title>
</head>
<body>
<?php
	echo "Завдання 3. Знайти найменшу суму чисел гармонічного ряду, що більша від заданого числа x.<br>";
	function harmonious($a1) {
		$s = 0;
		for ($i=1; $s < $a1; $i++) { 
			$s = $s + 1 / $i;
		}
		return array($s, $i - 1);
	}
	$h3 = harmonious(2.5);
	echo 'The first amount that is the sum of numbers of the harmonious series that exceeds 3 is ' . $h3[0] . " and the number of element of the series is " . $h3[1] . "<br>";
	$h8 = harmonious(8);
	echo 'The first number of the harmonious series that exceeds 8 is ' . $h8[0] . " and the number of element of the series is " . $h8[1] . "<br>";
	$h25 = harmonious(2.5);
	echo 'The first number of the harmonious series that exceeds 2.5 is ' . $h25[0] . " and the number of element of the series is " . $h25[1] . "<br>";
	echo "<hr>";
?>
</body>
</html>