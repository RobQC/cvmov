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
		if(ok && celular2.value==""){
			ok=false;
			alert("Debe escribir su celular2");
			celular2.focus();
		}
		if(ok && departamento.value==""){
			ok=false;
			alert("Debe escribir su departamento");
			departamento.focus();
		}

		if(ok && distrito.value==""){
			ok=false;
			alert("Debe escribir su distrito");
			distrito.focus();
		}
		if(ok && direccion.value==""){
			ok=false;
			alert("Debe escribir su direccion");
			direccion.focus();
		}
	
		if(ok && referencia.value==""){
			ok=false;
			alert("Debe escribir su referencia");
			referencia.focus();
		}
		if(ok && producto.value==""){
			ok=false;
			alert("Debe escribir su producto");
			producto.focus();
		}
		if(ok && precio.value==""){
			ok=false;
			alert("Debe escribir su precio");
			precio.focus();
		}
		if(ok && fechanac.value==""){
			ok=false;
			alert("Debe escribir su fechanac");
			fechanac.focus();
		}
		if(ok && nombreapo.value==""){
			ok=false;
			alert("Debe escribir su nombreapo");
			nombreapo.focus();
		}
		if(ok && asesor.value==""){
			ok=false;
			alert("Debe escribir su asesor");
			asesor.focus();
		}


		if(ok){ submit(); }
	}
}
