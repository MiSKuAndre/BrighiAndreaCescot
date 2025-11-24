<?php
/*es 1*/
//dato un insieme di valori, trovate il numero più alto

$valori = [1, 3, 5, 2, 5, 3, 9, 7, 4];
$maggiore = 0;

for($i=0; $i < count($valori); $i++):
    if($valori[$i] > $maggiore):
        $maggiore = $valori[$i];
    endif;
endfor;

echo "il numero più alto è" . $maggiore;

/*es 2*/
//stampa tutti gli elementi finchè l'elemento corrente è inferiore a 15

$valori2 = [12, 13, 5, 12, 15, 3, 19, 7, 4];

for($i=0; $i < count($valori2); $i++):
    if($valori2[$i] < 15):
        echo "num" . $valori2[$i];
    else:
        break;
    endif;
endfor;

/*es 3*/
//stampa il nome di tutte le persone maggiorenni e calcola l'età media di tutte le persone compresi i minorenni
$persone = [
    array(
        "nome" => "Mario",
        "eta" => 19
    ),
    array(
        "nome" => "Lucia",
        "eta" => 14
    ),
    array(
        "nome" => "Rosa",
        "eta" => 21
    ),
    array(
        "nome" => "Francesco",
        "eta" => 24
    ),
    array(
        "nome" => "Giuseppe",
        "eta" => 16
    ),
    array(
        "nome" => "Marta",
        "eta" => 22
    ),
];

$anni = 0;

foreach ($persone as $persona) : 
    if($persona["eta"] >= 18):
        echo $persona["nome"];
    endif;
    $anni = $anni + $persona["eta"];
endforeach;
echo ($anni / count($persone));

/*es 04
*data l'età di una persona, ritorna se può guidare il 125
*/
$eta = 15;
function calcola_125($eta) {
    if($eta >= 16):
        return "La persona può guidare il 125";
    else:
        return "La persona non può guidare il 125";
    endif;
        
}
echo calcola_125($eta);

/*es 05
*dato un numero verifica se è divisibile per 3
*/

$numero = 10;

function calcola_multiplo_3($numero) {
    if($numero % 3 == 0):
        return "il numero è multiplo di 3";
    else:
        return "il numero non è un multiplo di 3";
    endif;
}

echo calcola_multiplo_3($numero);
/*es06 
*dato un numero, riformalo in modalità EURO
*/


?>

