with(document.contacto){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && nombre.value==""){
			ok=false;
			alert("Debe escribir un nombre");
			nombre.focus();
		}
		if(ok &&apellido.value==""){
			ok=false;
			alert("Debe escribir su apellido");
			apellido.focus();
		}
		if(ok && dni.value==""){
			ok=false;
			alert("Debe escribir su dni");
			dni.focus();
		}
		if(ok && celular.value==""){
			ok=false;
			alert("Debe escribir su celular");
			celular.focus();
		}
		if(ok && producto.value==""){
			ok=false;
			alert("Debe escribir su producto");
			producto.focus();
		}
		if(ok && tipoproducto.value==""){
			ok=false;
			alert("Debe escribir su tipoproducto");
			tipoproducto.focus();
		}
		if(ok && direccion.value==""){
			ok=false;
			alert("Debe escribir su direccion");
			direccion.focus();
		}
	
		if(ok && asesor.value==""){
			ok=false;
			alert("Debe escribir su asesor");
			asesor.focus();
		}
		if(ok && comentario.value==""){
			ok=false;
			alert("Debe escribir su comentario");
			comentario.focus();
		}

		


		if(ok){ submit(); }
	}
}
