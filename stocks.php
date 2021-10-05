<HTML>
<head>
	<title>Stocks nayra</title>
</head>
<body>
	<?php

		for($i=1; $i<=35; $i++){
			${"ib".$i}['nombre']="acciona";
			${"ib".$i}['precio']=31.730;
			${"ib".$i}['valoracion']=-0.28;
			${"ib".$i}['variacion']=6;
			${"ib".$i}['volumen']=546;
			${"ib".$i}['hora']=21.29;
		}

		for($i=1; $i<=35; $i++){
			$ibex35[$i-1]=${"ib".$i};
			var_dump($ibex35[$i-1]); //muestra el contenido de todos los arrays pero para buscarlos hay que acceder y recorrer el array de $ibex35
		}


	?>
</body>
</HTML>
