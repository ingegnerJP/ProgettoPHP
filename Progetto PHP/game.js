function text(element) {
	
	//console.log(element.id);
	var testo = '';
	var container = document.getElementById('paragraph');
	if(element.id == 'rock'){
		testo = 'SASSO';
	}
	if(element.id == 'paper'){
		testo = 'CARTA';
	}
	if(element.id == 'scissors'){
		testo = 'FORBICI';
	}
	
	container.innerHTML = testo;
}


function vuoto(element){
	var testo = '';
	var container = document.getElementById('paragraph');
	container.innerHTML = testo;
	
}