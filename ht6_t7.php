<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Task 7</title>
</head>
<body>
<?php
	echo "Завдання 7. Перетворити із масива у строку аналогічно implode <br>";
	$array = array('+38(068)9876543', '+38(067)1234567', '+38(099)2798134');
	$array2 = array(380689876543, 380671234567, 380992798134);
	echo "Так працює функція implode(): <br>";
	echo implode(" ", $array);
	echo "<br>";
	echo implode(" ", $array2);
	echo "<br>";
	function implodius($glue, $pieces) {
		$txt = '';
		$i = 0;
		$len = count($pieces) - 1;
		foreach ($pieces as $value) {
			$i < $len ? $txt = $txt . $value . $glue : $txt = $txt . $value;
			$i++;
		}
		return $txt;
	}
	echo "Так працює моя функція implodius(): <br>";
	echo implodius(" ", $array);
	echo "<br>";
	echo implode(" ", $array2);
	echo "<hr>";
?>
</body>
</html>