<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Task 2</title>
</head>
<body>
<?php
	echo "Завдання 2. Підрахувати факторіал числа.<br>";
	function factor ($a) {
		return $a < 2? 1 : $a * factor($a -1);
	}
	echo '2 factorial = ' . factor(2) . "<br>";
	echo '6 factorial = ' . factor(6) . "<br>";
	echo '5 factorial = ' . factor(5) . "<br>";
	echo "<hr>";
?>
</body>
</html>