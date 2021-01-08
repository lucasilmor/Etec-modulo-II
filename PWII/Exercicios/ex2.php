<?php

echo "<h2>RESULTADO DO (IMC):";
echo "<br>";
echo "<br>";



$v1 = $_POST['peso'];
$v2 = $_POST['altura'];
$IMC = $v1 / ($v2*$v2);



echo "Seu IMC é: ".$IMC;

if ($IMC > 25) {
	echo "<br>";
	echo"<h2>Você está acima do peso!<h2>";
	echo "<img src = imagens/gordo.png width = 500 height = 400 align = right> ";
	 
	}else {
	
	echo "<br>";
	echo "<h2>Você está Saudável!<h2>";
	echo "<img src = imagens/magro.png width = 350 height = 450 align = right> ";
}

  ?>