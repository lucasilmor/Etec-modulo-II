<?php 
echo "<h3>Recuperando os dados:";

echo "<br>";
echo "<br>";

if(isset($_POST['aval'])){
	echo "O que achou do site: " .$_POST['aval'];
	echo "<br>";
}
echo "<br>";


if (isset($_POST['outro'])){
        if ($_POST['outro'] != ""){
            echo "Seção favorita: ".$_POST['outro'];
            echo "<br><br>";
        } else {
            echo "Seção favorita: ".$_POST['secao'];
            echo "<br><br>";    
        }
    }

    if(isset($_POST['msg'])){
        if($_POST['msg'] != ""){
            echo "Mensagem: ".$_POST['msg'];
            echo "<br>";
            echo "<br>";

        }
    }

echo "Nome: ".$_POST['nome'];
echo "<br>";
echo "<br>";

echo "Email: ".$_POST['email'];
echo "<br>";
echo "<br>";

echo "Fone: ".$_POST['fone'];
echo "<br>";
echo "<br>";

echo "Fax: ".$_POST['fax'];
echo "<br>";
echo "<br>";


if (isset($_POST['queroreceber'])) {
	echo "Quer receber? ". $_POST['queroreceber'];
	echo "<br>";
}

 ?>