<html>
<head>
	<title>Conversor binario</title>
</head>
<body>
	<?php
	echo "<h1>Conversor binario</h1>";

	$num=$_REQUEST['numero'];
	$binario=decbin($num);
	echo "Número decimal<input type='text' value='$num'>";
	echo "<br>";
	echo "Número binario<input type='text' value='$binario'>";

	?>

</body>
</html>
