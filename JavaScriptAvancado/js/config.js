function setConfig(){
	var textos =  {
		"titulo" : "Controle de Compra" 
	};

	document.title = textos.titulo;

	document.getElementById("nav-titulo").innerHTML = textos.titulo;
}

setConfig();