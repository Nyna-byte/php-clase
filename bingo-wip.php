<HTML>
<head>
	<title>Bingo nayra</title>
</head>
<body>
	<?php
	$numeros = range(1, 60);
	shuffle($numeros);
	
	$carton1 = array();
	for($i=0; $i<=15; $i++){
		$carton1[$i]=$numeros[$i];
		echo "$carton1[$i] ";
	}

	$bombo = range(1, 60);
	shuffle($bombo);
	$contador1=0;
	for($i=0; $i<60 && $contador1<15; $i++){
		if(array_search($bombo[$i], $carton1)==false){}
		else{
            $contador1++;
		}
	}
	if($contador1==15){
		echo "<br> El jugador 1 ha completado su cartón";
	}
	?>
</body>
</HTML>
