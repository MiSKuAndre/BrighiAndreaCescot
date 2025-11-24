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

    /*CALCOLA LA MEDIA DEI VOTI*/
    $voti = [6, 7, 7.5, 4, 9, 8];

    $somma = 0;
    $num_voti = 0;

    for($i = 0; $i < count($voti); $i++): /*COUNT conta gli elementi che ci sono in un array*/
        if($voti[$i] > 0 && $voti[$i] <= 10): 
           $somma = $somma + $voti[$i];
           $num_voti++;
        endif;
    endfor;

    echo "La somma dei voti è: " . $somma;
    echo "Il numero dei voti è: " . $num_voti;
    echo "Il numero di voti validi è: " . $num_voti;

    $media=$somma/$num_voti;
    echo "La media dei voti è: " . $media;

    /*VERIFICA SE IL NUMERO INSERITO E' ALL'INTERNO DELL'ARRAY*/
    $numero = 45;
    $valori = [1, 3, 6, 87, 23, 5, 45, 17, 89, 12, 34];

    $trovato = false;
    $i = 0;

    /*CON IL CICLO WHILE*/
    while (!$trovato && $i < count($valori)) : 
        if ($valori[$i] == $numero) :
            $trovato = true;
        endif;
        $i++;
    endwhile;

    if($trovato) :
        echo $numero . "è presente nell'array";
    else:
        echo $numero . "non è presente nell'array";
    endif;

     /*CON IL CICLO FOR*/
    /*for($i=0; !$trovato && $i < count($valori); $i++):
        if ($valori[$i] == $numero) :
            $trovato = true;
            break; serve per rompere il ciclo, per far si che il programma non continui la ricerca una volta trovato quel numero
        endif;
    endfor;*/

?>