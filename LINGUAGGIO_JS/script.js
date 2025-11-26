/*commento multilinea */
//commento in linea

// Stampa in console
console.log("Ciao, mondo");

// Mostra un pop-up con un messaggio
// window.alert("Benvenuto");

//Mostra un pop-up con una richiesta che ritorna true/false
// window.confirm("Sei sicuro?")

//Mostra un pop-up che chiede un dato
// window.prompt("Inserisci un numero");

//Dichiarazione di variabile
var stringa1 = "Ciao Mondo"; // Variabile globale
let stringa2 = "Ciao Mondo"; // Variabile locale
const costante = "Ciao Mondo"; // Costante

// Stringhe
var stringa = "Insieme di caratteri";
console.log(stringa[2]);
console.log(typeof stringa);

// Interi
var intero = 1;
console.log(typeof intero);

// Decimali
var decimale = 1.2;
console.log(typeof decimale);

// Boolean
var bool = true;
console.log(typeof bool); 

// Array
var array = [1, 2, 3, 4, 5, 6];
console.log(typeof array);

// Oggetto
var object = {
    "nome": "Mario",
    "eta": 30
};
console.log(typeof object);

// Operatori aritmetici
var a = 1;
var b = 2;
var c = 3;
console.log(a+b);
console.log(a-b);
console.log(a*b);
console.log(a/b);
console.log(a%b); // Resto della divisione

a = 1;
console.log(a++); // Leggo e poi incremento
console.log(++a); // Incremento e poi leggo

// Operatori logici
console.log(a < b)
console.log(a <= c);
console.log(a == 3) //Uguaglianza
console.log(a == "3"); // Uguaglianza per valore
console.log(a === "3"); // Uguaglianza per valore e tipo

console.log(!(a < b)); //NOT
console.log(a == 3 && b == 1) //AND
console.log(a == 3 || b == 1) //OR

//Concatenazione
console.log(stringa1 + stringa2);

var a = 2;
var b = 3;
var c = "1";

var somma = a + c;
console.log(a + b); // Somma
console.log(a + c); // Concatenazione -> 21
console.log(somma + b); // 213
console.log(somma > 20); // Somma viene convertito in numero quando cè un > < == quindi -> true
console.log(somma.lenght); // Lunghezza della stringa
console.log(a + b + c); // 51

var d;
console.log(d); // undefined
d = undefined;

var e = null;
console.log(e); // null

var oggetto = {
    "nullo": null,
    "undefined": undefined
};
console.log(oggetto);
console.log(d == true); //false
console.log(e == true); //false
console.log(d == e); //true, perchè sono entrambi falsi
console.log(d === e); //false, sono due tipi di dato diversi "null" e "undefined"

