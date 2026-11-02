// dato un numero inserito,  stampare a pagina la tabellina del 12 del numero inserito


<?php

    if(isset($_GET['numero'])){


        $num = $_GET['numero']; // prende il numero

        echo "<p>La tabellina del $num è : </p>";

        for($i = 1; $i <=12; $i++){

            echo "$num x $i = " . ($num * $i) . "<br>";

        }
    }



?>


<form method='get'>

    Inserisci un numero :

    <input type="number" name='numero'><br>
    <input type="submit">

</form>