<?php

function sumaPotenciaDos($numero){
  $suma=0;
  for($contador=1; $contador<=$numero;$contador++){
    $suma=$suma+$contador*$contador;
  }
	  return $suma;
}



echo "Suma con n=3 es:".sumaPotenciaDos(3)."\n" ;
echo "Suma con n=4 es:".sumaPotenciaDos(4)."\n" ;
echo "Suma con n=5 es:".sumaPotenciaDos(5)."\n" ;
echo "Suma con n=6 es:".sumaPotenciaDos(6)."\n" ;



?>
