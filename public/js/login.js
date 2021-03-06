function ingresar(){
	var usuario  = $('#usuario').val();
	var password = $('#password').val();
	if($('#checkbox-2').is(':checked') == true){
		sessionStorage.setItem('CHECK', '1');
		sessionStorage.setItem('USERNAME', 'sapadmin');
		sessionStorage.setItem('PASS', 'admin');
	}else{
		sessionStorage.setItem('CHECK', '0');
	}
	if(usuario == null){
		//$('#usuario').parent().addClass('is-invalid');
    msj('error', 'Ingrese un usuario');
		return;
	}
	if(password == null){
		//$('#password').parent().addClass('is-invalid');
    msj('error', 'Ingrese una contraseña');
		return;
	}
	$.ajax({
		data : {usuario  : usuario,
				    password : password},
		url  : 'login/ingresar',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        	location.href = 'admin';
        	$('#usuario').val("");
        	$('#password').val("");
        }else {
  				$('#usuario').parent().addClass('is-invalid');
  				$('#password').parent().addClass('is-invalid');
        	return;
        }
      }catch(err){
        msj('error',err.message);
      }
	});
}
function cerrarCesion(){
	$.ajax({
		url  : 'admin/cerrarCesion',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        	location.href = 'Login';
        }else {
        	return;
        }
      }catch(err){
        msj('error',err.message);
      }
	});
}
$("#showpass").click(function(){
	$(this).find('i').toggleClass("mdi-remove_red_eye mdi-visibility_off");
    var input = $(this).parent().find('.mdl-textfield__input');
    if (input.attr("type") == "password"){
    	input.attr("type", "text");
    }else{
      input.attr("type", "password");
    }
});
function soloLetras(e){
  key 	     = e.keyCode || e.which;
  tecla 	   = String.fromCharCode(key).toLowerCase();
  letras     = " áéíóúabcdefghijklmnñopqrstuvwxyz";
  especiales = "8-37-39-46";
  tecla_especial = false
  for(var i in especiales){
       if(key == especiales[i]){
           tecla_especial = true;
           break;
       }
   }
   if(letras.indexOf(tecla)==-1 && !tecla_especial){
       return false;
   }
 }
 function valida(e){
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==8){
      return true;
  }
  patron      =/[0-9]/;
  tecla_final = String.fromCharCode(tecla);
  return patron.test(tecla_final);
}
function validateEmail(email){
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function verificarDatos(e){
	if(e.keyCode === 13){
		e.preventDefault();
		ingresar();
    }
}
function triggerBoton(){
    $(".buttons-excel").trigger( "click" );
}
function aceptar(dato){
  $.ajax({
    data : {id_cliente : dato},
    url  : 'admin/aceptarCliente',
    type : 'POST'
  }).done(function(data){
    try{
        data = JSON.parse(data);
        if(data.error == 0){
            $('#example').DataTable().destroy();
            $('#exampleBody').html('');
            $('#exampleBody').html(data.html);
            $('#example').DataTable( {
                searching : false,
                dom: 'Bfrtip',
                language:{
                    "emptyTable":     "Aucune donnée disponible",
                    "info" : "Mostrando _END_ de _TOTAL_ resultados"
                },
                aLengthMenu : [10],
                buttons: []
            });
            toastr.remove();
            msj('success', 'Publicado con exito');
        }else {
          toastr.remove();
            msj('error', 'No se pudo publicar');
            return;
        }
      }catch(err){
        toastr.remove();
        msj('error',err.message);
      }
  });
}