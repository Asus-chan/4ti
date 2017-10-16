function calculate() {
'use strict';

// Umożliwia zapamiętanie objętości:
var volume;

// Pobierz referencję do wartości formularza:
var radius = document.getElementById('radius').value;

// Upewnij się, że jest dodatnia:
radius = Math.abs(radius);

// Wykonaj obliczenie:
volume = (4/3) * Math.PI * Math.pow(radius, 3);

// Zmień format wartości:
volume = volume.toFixed(4);

// Wyświetl wyliczoną objętość:
document.getElementById('volume').value = volume;

// Zwróć wartość false, by nie wysyłać formularza:
return false;

} // Koniec funkcji calculate().

// Funkcja wykonywana po zakończeniu wczytywania strony WWW.
// Funkcja dodaje procedurę obsługi zdarzenia do formularza.
function init() {
'use strict';
document.getElementById('theForm').onsubmit = calculate;
} // Koniec funkcji init().
window.onload = init;