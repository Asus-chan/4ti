function calculate(){
var suma;
var imie = document.getElementById('imie').value;
var nazwisko = document.getElementById('nazwisko').value;
suma= nazwisko+imie;
document.getElementById('razem').value=suma;
return false;
}

function init(){
document.getElementById('theForm').onsubmit= calculate;
window.onload=init;	
}
