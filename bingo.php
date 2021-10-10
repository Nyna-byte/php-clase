<HTML>
<head>
	<title>Bingo nayra</title>
</head>
<body>
	<?php

	$numeros = range(1, 60);
	for($i=1; $i<=4; $i++){
		shuffle($numeros);
		${"carton".$i} = array();
		for($j=0; $j<=15; $j++){
			${"carton".$i}[$j]=$numeros[$j];
		}
		echo "Cartón del jugador $i: ";
		print_r(${"carton".$i});
		echo "<br>";
	}

	$bombo = range(1, 60);
	shuffle($bombo);
	$contador1=0;
	$contador2=0;
	$contador3=0;
	$contador4=0;
	for($i=0; $i<60 && $contador1<15 && $contador2<15 && $contador3<15 && $contador4<15; $i++){
		echo "Bola: $bombo[$i] <br>";
		if(array_search($bombo[$i], $carton1)==false){}
		else{$contador1++;}
		if(array_search($bombo[$i], $carton2)==false){}
		else{$contador2++;}
		if(array_search($bombo[$i], $carton3)==false){}
		else{$contador3++;}
		if(array_search($bombo[$i], $carton4)==false){}
		else{$contador4++;}
	}
	if($contador1==15){
		echo "<br> El jugador 1 ha completado su cartón";
	}
	else if($contador2==15){
		echo "<br> El jugador 2 ha completado su cartón";
	}
	else if($contador3==15){
		echo "<br> El jugador 3 ha completado su cartón";
	}
	else if($contador4==15){
		echo "<br> El jugador 4 ha completado su cartón";
	}
	?>
</body>
</HTML>
