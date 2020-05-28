function text(element) {
	
	//console.log(element.id);
	var testo = '';
	var container = document.getElementById('paragraph');
	if(element.id == 'rock'){
		testo = 'SASSO AMBIGUO';
	}
	if(element.id == 'paper'){
		testo = 'COMPITO DI SISTEMI';
	}
	if(element.id == 'scissors'){
		testo = 'HAI LE FORBICI?';
	}
	
	container.innerHTML = testo;
}


function vuoto(element){
	var testo = '';
	var container = document.getElementById('paragraph');
	container.innerHTML = testo;
	
}