        function calculate (){
	var sztuk = document.getElementById('stuk').value; 
	var cena = document.getElementById('cena').value; 
	var podatek = document.getElementById('podatek').value; 
	var rabat = document.getElementById('rabat').value; 
	var total;
	total=sztuk*cena;
	podatek/=100;
	podatek++;
	total*=podatek;
	total-=rabat;
	total=total.toFixed(2);
	document.getElementById('total').value=total;
	return false;
	};
	function init(){
	document.getElementById('formul').onsubmit=calculate;
	window,onload=init;
	};