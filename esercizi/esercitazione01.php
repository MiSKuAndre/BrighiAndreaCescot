<?php

    /**
     * Es 01
     * Dati due numeri, stampare nell'ordine:
     *  - Somma
     *  - Differenza
     *  - Moltiplicazione
     *  - Divisione
     */
    $a = 12;
    $b = 24;

    echo ($a + $b);
    echo"<br/>";
    echo ($a - $b);
    echo"<br/>";
    echo ($a * $b);
    echo"<br/>";
    echo ($a / $b);
    echo"<br/>";


    /**
     * Es 02
     * Data una parola, verificare se è uguale
     * a "casa"
     */
    $parola = "albero";

    if ($parola === "casa") {
        echo "è uguale"; 
    } else {
        echo "non è uguale";
    }
    echo"<br/>";

    /** 
     * Es 03
     * Dato due valori numerici, verificarne l'uguaglianza
     */
    $c = "145";
    $d = 145;

    if ($c == $d) {
        echo "sono uguali";
    } else {
        echo "non sono uguali";
    }
    echo"<br/>";

    /*Es 04
     */
    $voto = 6;
   if ($voto < 6) {
    echo "Insufficiente";
   } else if ($voto ==7 || $voto==8) {
        echo "Buono";
   } else if ($voto ==9) {
    echo "Ottimo";
   } else if ($voto <11 && !6) {
    echo "Eccellente";
   } else {
    echo "Sufficiente";
   }


   
