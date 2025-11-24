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




?>

