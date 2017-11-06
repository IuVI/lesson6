<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Task 5</title>
</head>
<body>
<?php
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
?>
</body>
</html>