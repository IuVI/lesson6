<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Task 6</title>
</head>
<body>
<?php
	echo "Завдання 6. Перетворити із строки у масив слів аналогічно explode <br>";
	$text = "Завдання 6. Перетворити із строки у масив слів аналогічно explode";
	echo "<br> результат, що повертає explode()<br>";
	$t = explode(" ", $text);
	print_r($t);
	echo "<br>";
	/*Звертаю увагу, що функція str_split, яку можна було б використати для перетворення англомовного тексту на массив
	некоректно працює з multibyte text,
	як наслідок некоректно відображає перетворений масив(при цьому Encoding, charset, та інші танці навколо формату тексту не дають
	жодних результатів, оскільки в тілі відповіді CHARSET = UTF-8.*/
	function sawtext($delim, $string) {
		$arr = preg_split('//u', $string, null, PREG_SPLIT_NO_EMPTY);
		$rslt = array();
		$len = count($arr);
		$i = 0;
		$wrd = '';
		for ($i=0; $i < $len; $i++) {
			if ($arr[$i] != $delim && $i != $len - 1) {
				$wrd = $wrd . $arr[$i];
			} elseif ($i == $len -1) {
				$rslt[] = $wrd . $arr[$i];
			} else {
				$rslt[] = $wrd;
				$wrd = '';
			}
		}
		return $rslt;
		}
	echo "результат, що повертає моя функція<br>";
	print_r(sawtext(" ", $text));
	echo "<hr>";
?>
</body>
</html>