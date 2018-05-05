<?php
$respuesta[1] = "4";
$respuesta[2] = "Adolfo";
$respuesta[3] = "993";
$respuesta[4] = "Daniel Radcliffe";
$respuesta[5] = "Hogwarts";

$resultado = $_POST;
$resp = $resultado['resul'];
$elec= $resultado['num'];
?>

<?php

if($resp==$respuesta[$elec]){
  echo "Correcto!";
}else{
  echo "Error, la respuesta es: ".$respuesta[$elec];
}

 ?>
