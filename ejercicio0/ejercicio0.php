<?php
//*****************************//
// Ejercicio #0 
// Manuel de Jesus Flores
// Carnet FF000000
// Programacion 2 ULS
//****************************//


function numero_mayor(array $numeros){

  //Inicializamos el numero ordenado mayor
  $numeroOrdenado='';

  //Contamos cuantos numeros hay en el arreglos
  // y le restamos uno, por se hacer n-1 comparaciones
  $elementosComparar=count($numeros)-1;
  

  // Recorremos n-1 veces el arreglo para ordenar el arreglo
  for ($pasada=0; $pasada<$elementosComparar;$pasada++){

    // Recorremos n-1 veces el cada elemento del arreglo
    for ($contador=0; $contador<$elementosComparar;$contador++){
      //Si el elemento actual es menor que el siguiente, 
      // Cambiamos el mayor al primer elemento usando una
      // variable auxiliar
      if($numeros[$contador][0]<$numeros[$contador+1][0]){
        $numAux=$numeros[$contador];
        $numeros[$contador]=$numeros[$contador+1];      
        $numeros[$contador+1]=$numAux;      
      }
    }
  }
  //Concatenamos todos los numeros en una variable
  foreach($numeros as $elemento){
    $numeroOrdenado=$numeroOrdenado.$elemento;
  }
  //Devolvemos la variable como entero  usando casting.
  // Por que $numeroOrdenado era tipo string.
  return  (int) $numeroOrdenado;
}

?>
