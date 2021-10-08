<HTML>
<head>
	<title>Bingo nayra</title>
</head>
<body>
	<?php
	$numeros = range(1, 60);
	shuffle($numeros);
	
	$carton1 = array();
	for($i=0; $i<15; $i++){
		$carton1[$i]=$numeros[$i];
		echo "$carton1[$i] ";
	}

	$bombo = range(1, 60);
	shuffle($bombo);
	$contador1=0;
	for($i=0; $contador1<15; $i++){
		$encontrado = array_search($bombo[$i], $carton1);
		if($encontrado!==false){
			$contador1++;
		}
		else{
			echo "xd";
		}
	}
	if($contador1==15){
		echo "El jugador 1 ha completado su cartón";
	}
	?>
</body>
</HTML>
