<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Task 1</title>
</head>
<body>
<?php

	echo "Завдання 1. Підрахувати степінь числа без спец. функцій. Вважатимемо, що шукана функція має підносити лише до цілого степеня, оскільки написання коду для точного підрахунку ступеня при дрібному n є радше завданням для курсу з теорії алгоритмів та математичного аналізу <br>";
	function power($a1, $a2) {
		$a2 < -1 ? $a1 = 1 / power($a1, $a2 * -1): null;
		return $a2 > 1 ? $a1 * power($a1, $a2 -1): $a1;
	}
	echo '2 in power of 8 = ' . power(2, 8) . "<br>";
	echo '2 in power of -3 = ' . power(2, -3) . "<br>";
	echo "<hr>";
?>
</body>
</html>