with(document.estado){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && asesor.value==""){
			ok=false;
			alert("Debe escribir un asesor");
			asesor.focus();
		}
		if(ok && producto.value==""){
			ok=false;
			alert("Debe escribir un producto");
			producto.focus();
		}
		if(ok && situacion.value==""){
			ok=false;
			alert("Debe escribir su situacion");
			situacion.focus();
		}
		if(ok){ submit(); }
	}
}