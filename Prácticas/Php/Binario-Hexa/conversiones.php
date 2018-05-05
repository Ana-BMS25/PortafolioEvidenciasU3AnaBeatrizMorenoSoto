<?php
 $resultado = $_POST;
 $numero = $resultado['num'];
 $conversion = $resultado['op'];

switch ($conversion) {
  case 'bin':
     echo "El n&uacute;mero ".$numero." en Binario es: ";
       echo Convertir($numero, 2);
       break;
  case 'hex':
     echo "El n&uacute;mero ".$numero." en Hexadecimal es: ";
       echo Convertir($numero, 16);
       break;
}

function Convertir($num, $sistema) {
    $valores_hexa = array(10 => 'A', 11 => 'B', 12 => 'C', 13 => 'D', 14 => 'E', 15 => 'F');
      if ($sistema > 1 && $sistema < 17) {
          $num_retornar = array();
          while ($num > 0) {
              $residuo = $num % $sistema;
              $num = floor($num / $sistema);
              $num_retornar[] = $residuo > 9 ? $valores_hexa[$residuo] : $residuo;
          }
          return implode('', array_reverse($num_retornar));
      }
      return 'Verifica que el sistema al que deseas convertir sea válido';
}

 ?>
