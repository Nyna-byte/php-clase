<html>
<head>
	<title>Conversor binario</title>
</head>
<body>
	<?php
	echo "<h1>Conversor binario</h1>";

	function binario($dec){
		return decbin($dec);
	}
	function octal($dec){
		return decoct($dec);
	}
	function hexadecimal($dec){
		return dechex($dec);
	}

	$num=$_REQUEST['numero'];

	echo "Número decimal<input type='text' value='$num'/>";
	echo "<br>";

	$operacion=$_REQUEST['operacion'];
	$resultado=0;
	if($operacion=="binario"){
		$resultado=binario($num);
		echo "$num en binario es $resultado";
	}
	else if($operacion=="octal"){
		$resultado=octal($num);
		echo "$num en octal es es $resultado";
	}
	else if($operacion=="hexadecimal"){
		$resultado=hexadecimal($num);
		echo "$num en hexadecimal es $resultado";
	}
	else if($operacion=="todos"){
		$resultado=binario($num);
		echo "$num en binario es $resultado";
		echo "<br>";
		$resultado=octal($num);
		echo "$num en octal es es $resultado";
		echo "<br>";
		$resultado=hexadecimal($num);
		echo "$num en hexadecimal es $resultado";
	}


	?>

</body>
</html>
