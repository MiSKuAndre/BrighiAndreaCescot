function esercizio01 () {

var giorno = window.prompt("Inserisci il giorno");
var mese = window.prompt("inserisci il mese");
var anno = window.prompt("inserisci anno");
var risultato = false;

if (anno<2025) {
    console.log(risultato="la data è più vecchia di oggi");
} else if (mese<11) {
    console.log(risultato="la data è più vecchia di oggi");
} else if (giorno<26) {
    console.log(risultato="la data è più vecchia di oggi");
} else {
    console.log(risultato="la data è futura ad oggi");
}
}
esercizio01();

function esercizio02() {
    giorno = window.prompt("Inserisci il giorno");
    mese = window.prompt("inserisci il mese");
    anno = window.prompt("inserisci anno");
    //converto in formato data
    let data = new Date(giorno + "/" + mese + "/" + anno);
    // giorno della settimana da 0 a 6
    data.getDay();
}
esercizio02();
