<?php 
	
	echo "Resultado: ";
	echo "<br>";
	echo "<br>";

	$v1 = $_POST['lado1'];	
	$v2 = $_POST['lado2'];	

	$area = $v1 * $v2;

	$perimetro = $v1*2 + $v2*2;		

	echo "O Resultado da Área do Retângulo é: ".$area;
	echo "<br>";
	echo "<br>";
	echo "O Resultado do Perimetro do Retângulo é: ".$perimetro;
 ?>