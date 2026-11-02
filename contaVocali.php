

<?php


    if(isset($_GET['frase'])){

        $frase = strtolower($_GET['frase']);  //appiattire in minuscolo

        //definire le vocali
        $vocali = ['a', 'e', 'i', 'o', 'u'];

        $conta = 0;

        //scorre ogni carattere della frase

        for($i = 0; $i < strlen($frase); $i++) { //strlen -> è la lunghezza

            if(in_array($frase[$i], $vocali)){   // 
                $conta++;
            }

        }

        echo "<p> La frase contiene $conta vocali</p>";

    }



?>




<form method='get'>

    Inserisci una frase : <input type="text" name="frase">
    <input type="submit">

</form>