<html>
<head>
	<title>Conversor binario</title>
</head>
<body>
	<?php
	echo "<h1>Cambio de base</h1>";

	$num=$_REQUEST['numero'];

	$base=$_REQUEST['base'];
	$resultado=base_convert($num, 10, $base);
	echo "$num en base $base es $resultado";

	?>

</body>
</html>
