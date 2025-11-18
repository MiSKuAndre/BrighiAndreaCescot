<?php 
    // commento in linea, non viene visualizzato dal sito

    /*
    commento su più linee
    */

    /* Stringhe */
    echo "<h1 class='classe' attr=\'qui sono nella stringa\'>Hello World</h1>";
    echo '<h2 class="classe">Tipi di Dato</h2>';

    /* Booleani */
    // Vero -> true
    // Falso -> false

    /* Numeri */
    echo 10;
    echo "\n"; //aggiunge uno spazio, quindi va a capo nel documento di output
    echo 1.15;

    /* Nomi delle variabili */
    $nome_variabile; //OK
    $nomeVariabile; //OK

    /* Array, insieme di elementi */

    //Array anonimo, si accede ai valori usando l'indice
    $array_1 = [1, 2, 3, 4, 5]; 
    $array_2 = array(1, 2, 3, 4, 5);

    //Array con chiavi per accedere ai valori
    $array_3 = array( 
        "nome" => "Mario",
        "cognome" => "Rossi",
        "eta" => 21
    );

    echo $array_3; //non posso stampare direttamente l'array
    echo"<br/>";
    print_r($array_3); //stampa l'array in modo leggibile
    echo"<br/>";
    var_dump($array_3); //stampa l'array in modo più dettagliato
    echo"<br/>";

    //Verifico se Mario Rossi è maggiorenne 
    if ($array_3["eta"] >= 18) { 
        echo "Utente Maggiorenne";
    } else {
        echo "Utente Minorenne";
    }

    echo"<br/>";

     //Verifico se Mario Rossi ha 18 anni 
    if ($array_3["eta"] == "18") { 
        echo "Utente diciottenne";
    } else {
        echo "Utente non diciottenne";
    }

    //Uguaglianza stretta, controlla valore e tipo
    // '=' assegna il valore '==' confronta il valore '===' confronta il valore e il tipo
    if ($array_3["eta"] == 21) {}  //Questa condizione è VERA
    if ($array_3["eta"] == "21") {}  //Questa condizione è VERA
    if ($array_3["eta"] === 21) {} //Questa condizione è VERA
    if ($array_3["eta"] === "21") {} //Questa condizione è FALSA

    /* Operatori logici */
    /*
    AND -> and, oppure &&
    OR -> or, oppure ||
    XOR -> xor
    NOT -> !
    */
    if (true && false):
        echo "Condizione vera";
    else:
        echo "Condizione falsa";
    endif;

    if (true || false):
        echo "Condizione vera";
    else:
        echo "Condizione falsa";
    endif;
?>
