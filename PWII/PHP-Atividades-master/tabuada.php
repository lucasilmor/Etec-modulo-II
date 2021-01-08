    <?php

    $tab = 0;
    if(isset($_POST["rTABUADA"])){
        $tab = $_POST["rTABUADA"];
        if(!is_numeric($tab)){
            echo "<br>Digite um número.<br>";
        }else{

        $num=0;
        while($num<=10){
            echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
            $num++;
        }

    }
}

?>

<form method="post">
    <input type="text" name="rTABUADA" >
    <input type="submit">
</form>
