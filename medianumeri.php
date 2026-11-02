<?php


    if(isset($_GET['n1'], $_GET['n2'], $_GET['n3'] )) {

        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $n3 = $_GET['n3'];

        $media = ($n1 + $n2 + $n3) / 3;

        echo "<p>La media dei numeri inseriti è :  $media</p>";

    }




?>


<form method="get">

    Primo Numero : <input type="number" name="n1"><br>
    Secondo Numero : <input type="number" name="n2"><br>
    Terzo Numero : <input type="number" name="n3"><br>

    <input type="submit">
    
</form>