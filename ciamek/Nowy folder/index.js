function calculate(){
var razem;
var imie = document.getElementById('imie').value;
var nazwisko = document.getElementById('nazwisko').value;
razem=imie+' '+nazwisko;

document.getElementById('razem').value=razem;
return false;
}

function razem(){
var razem;
var imie = document.getElementById('imie').value;
var nazwisko = document.getElementById('nazwisko').value;
razem=imie+' '+nazwisko;

document.getElementById('razem').value=razem;
return false;
}

function initi() {
'use strict';
var theForm = document.getElementById('theForm');
theForm.onsubmit = calculate;

} 
window.onload = init;
function myFunction() {
    document.getElementById("theForm").submit();
	theForm.onsubmit = calculate;
	window.onload = init;
}
function init() {
'use strict';
document.getElementById('theForm').onsubmit = razem;
} 
window.onload = init;
