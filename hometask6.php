<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Hometask 6</title>

</head>
<body>
<?php
	echo "Завдання 1. Підрахувати степінь числа без спец. функцій. Вважатимемо, що шукана функція має підносити лише до цілого степеня, оскільки написання коду для точного підрахунку ступеня при дрібному n є радше завданням для курсу з теорії алгоритмів та математичного аналізу
	<br>";
	function power ($a1, $a2) {
		$a2 < -1 ? $a1 = 1 / power($a1, $a2 * -1): null ;
		return $a2 > 1 ? $a1 * power($a1, $a2 -1): $a1;
	}
	echo '2 in power of 8 = ' . power(2, 8) . "<br>";
	echo '2 in power of -3 = ' . power(2, -3) . "<br>";
	echo "<hr>";
	echo "Завдання 2. Підрахувати факторіал числа.<br>";
	function factor ($a) {
		return $a < 2? 1 : $a * factor($a -1);
	}
	echo '2 factorial = ' . factor(2) . "<br>";
	echo '6 factorial = ' . factor(6) . "<br>";
	echo '5 factorial = ' . factor(5) . "<br>";
	echo "<hr>";
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
	echo "Завдання 5. Написати функцію для перевірки правильності відкриття дужок <br>";
	function psymmetry($str){
    $count = 0;
    $length = strlen($str);
    for($i = 0; $i < $length; $i++){
    	if($str[$i] == '(') {
	        $count += 1;
    	} else if($str[$i] == ')') {
			$count -= 1;
    	}
        if($count == -1) {
        	return false;
        }
    }
    	return $count == 0;
	}
	$list = array("", "(", ")", "()", "(())", "(()", "())", "())(", "(())", "x", "(x", "()x", "x)", "x(y(z))", "x(y)z)(", "(((())))");
	foreach($list as $str){
		echo "\"" . $str . "\"" . (psymmetry($str) ? "-ok" : "-NOPE") . "\n";	
	}
	echo "<hr>";
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