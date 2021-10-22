<html>
<head>
	<title>Calculadora</title>
</head>
<body>
	<?php
	echo "<h1>Calculadora</h1>";

	function sumar($op1, $op2){
		return $op1+$op2;
	}
	function restar($op1, $op2){
		return $op1-$op2;
	}
	function multiplicar($op1, $op2){
		return $op1*$op2;
	}
	function dividir($op1, $op2){
		return $op1/$op2;
	}

	$num1=$_REQUEST['operando1'];
	$num2=$_REQUEST['operando2'];

	echo "Operando1<input type='text' value='$num1'/>";
	echo "<br>";
	echo "Operando2<input type='text' value='$num2'/>";
	echo "<br>";

	$operacion=$_REQUEST['operacion'];
	$resultado=0;
	if($operacion=="suma"){
		$resultado=sumar($num1, $num2);
		echo "El resultado de sumar $num1 con $num2 es $resultado";
	}
	else if($operacion=="resta"){
		$resultado=restar($num1, $num2);
		echo "El resultado de restar $num2 a $num1 es $resultado";
	}
	else if($operacion=="producto"){
		$resultado=multiplicar($num1, $num2);
		echo "El resultado de multiplicar $num1 con $num2 es $resultado";
	}
	else if($operacion=="division"){
		$resultado=dividir($num1, $num2);
		echo "El resultado de dividir $num1 entre $num2 es $resultado";
	}


	?>

</body>
</html>
