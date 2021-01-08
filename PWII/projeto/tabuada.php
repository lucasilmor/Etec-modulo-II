    <?php

    $tab = 0;
    
        $num=0;
        while($num<=10){
            echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
            $num++;
        }

    
}

?>

<form method="post">
    <input type="text" name="rTABUADA" >
    <input type="submit">
</form>
