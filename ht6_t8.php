<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Task 8</title>
</head>
<body>
<?php
	echo "Завдання 8. Прибрати усі повторення символів зі строки. Вважатимемо, що регістр символів важливий<br>";
	function delletrepeat($string) {
		$arr = preg_split('//u', $string, null, PREG_SPLIT_NO_EMPTY);
		$brr = array_count_values($arr);
		$rslt = '';
		foreach ($brr as $key => $value) {
			$rslt = $rslt . $key;
		}
		return $rslt;
	}
	$txt = "аБвГґДеЄжЗАбВгҐаБвГґДеЄжЗАбВгҐ";
	$txt2 = "Hello world!!";
	echo "Дано масив: {$txt} <br>" . "Після застосування функції: " . delletrepeat($txt);
	echo "<br>";
	echo "Дано масив: {$txt2} <br>" . "Після застосування функції: " . delletrepeat($txt2) . '<br>';
	echo "Принаймні працює так, як показано у прикладі.";
?>
</body>
</html>