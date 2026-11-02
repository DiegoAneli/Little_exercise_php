<?php

    if(isset($_GET['testo'])){

        $originale = strtolower($_GET['testo']); //testo originale "abbassato"

        $invertita = strrev($originale);

        echo "<p>La parola inserita è $originale </p>";
        echo "<p>La parola invertita è $invertita </p>";


        if($originale === $invertita){

            echo "<p>La parola è un palindromo</p>";
        }else{

            echo "<p>La parola NON è un palindromo</p>";
        }

    }

?>


<form method='get'>


    Inserisci una parola :

    <input type="text" name='testo'>
    <input type="submit">



</form>