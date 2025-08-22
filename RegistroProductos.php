<?php
$producto1 = $_POST ['Product1'];
$producto2 = $_POST ['Product2'];
$producto3 = $_POST ['Product3'];
$Valor1 = $_POST ['Cost1'];
$Valor2 = $_POST ['Cost2']; 
$Valor3 = $_POST ['Cost3'];
$suma_valores = $producto1 + $producto2 + $producto3; 
$descuento = 0.16; 
$valor_final = $suma_valores - ($suma_valores * $descuento)

echo "El primer producto es ".$producto1;
echo "<br>";
echo "El precio correspondiente es ". $Valor1; 
echo "<br>"; 
echo "El segundo producto es ".$producto2;
echo "<br>";
echo "El precio correspondiente es ". $Valor2;
echo "<br>";
echo "El tercer producto es $".$producto3;
echo "<br>";
echo "El precio correspondiente es $". $Valor3;
echo "<br>";
echo "El valor total es  $". $suma_valores; 
echo "<br>";
echo "EL valor total con un descuento del 16% es $". $valor_final;
echo "<br>"


?>
