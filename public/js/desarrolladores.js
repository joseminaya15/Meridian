function guardarDesarrolladores(){
	var empresa  = $('#empresa').val();
	var gerente  = $('#gerente').val();
	var cont_com = $('#cont_comercial').val();
	var cont_tec = $('#cont_tecnico').val();
	var url 	 = $('#url').val();
	var telefono = $('#telefono').val();
	var pais 	 = $('#pais').val();
	if(empresa == '' || empresa == null){
		msj('error', 'Ingrese el nombre de su empresa');
		return;
	}
	if(pais == '' || pais == null){
		msj('error', 'Ingrese el país de su empresa');
		return;
	}
	if(gerente == '' || gerente == null){
		msj('error', 'Ingrese el nombre de su gerente');
		return;
	}
	if(cont_com == '' || cont_tec == null){
		msj('error', 'Ingrese el Email de su contacto comercial');
		return;
	}
	if (!validateEmail(cont_com)){
		$('#cont_comercial').css('border-color','red');
		return;
	}else {
		$('#cont_comercial').css('border-color','');
	}
	if(cont_tec == '' || cont_tec == null){
		msj('error', 'Ingrese el Email de su contacto técnico');
		return;
	}
	if (!validateEmail(cont_tec)){
		$('#cont_tecnico').css('border-color','red');
		return;
	}else {
		$('#cont_tecnico').css('border-color','');
	}
	if(url == '' || url == null){
		msj('error', 'Ingrese la url de su página web');
		return;
	}
	if(telefono == '' || telefono == null){
		msj('error', 'Ingrese su teléfono de contacto');
		return;
	}
	$('.btn-guardar').prop("disabled", true);
	$.ajax({
		data : {empresa  : empresa,
				gerente  : gerente,
				cont_com : cont_com,
				cont_tec : cont_tec,
				url 	 : url,
				telefono : telefono,
				id_pais  : pais.toString()},
		url  : 'desarrolladores/guardarDesarrolladores',
		type : 'POST'
	}).done(function(data){
		try{
        	data = JSON.parse(data);
        	if(data.error == 0){
				limpiarCampos();
        	}else{
        		return;
        	}
      } catch (err){
        msj('error',err.message);
      }
	});
}
function soloLetras(e){
    key 	   	   = e.keyCode || e.which;
    tecla 	   	   = String.fromCharCode(key).toLowerCase();
    letras     	   = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales 	   = "8-37-39-46";
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
    patron 		=/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
function validateEmail(email){
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function limpiarCampos(){
	$('#empresa').val("");
	$('#gerente').val("");
	$('#cont_comercial').val("");
	$('#cont_tecnico').val("");
	$('#url').val("");
	$('#telefono').val("");
	$('#pais').val("0");
	$('.selectpicker').selectpicker('refresh');
}
function guardarDatosDeps(){
	arrayIds = [];
	$(".js-radio input").each(function (){
		//console.log($('#'+this.id).parents().find('legend').text());
		console.log($('.mdl-radio').has('is-checked'));
       /*if ($(this.checked)==true){ 
            // arrayIds.push($('#'+this.id).val())
            console.log($('#'+this.id).val());
        }*/
    })
    $('.btn-guardar-deps').prop("disabled", true);
}