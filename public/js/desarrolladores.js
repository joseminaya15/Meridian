// function init(){
//     initLimitInputs('descripcion');
// }
function guardarDesarrolladores(){
	var empresa  = $('#empresa').val();
	var gerente  = $('#gerente').val();
	var cont_com = $('#cont_comercial').val();
	var cont_tec = $('#cont_tecnico').val();
	var url 	 = $('#url').val();
	var telefono = $('#telefono').val();
	var pais 	 = $('#pais').val();
	var vertical = $('#vertical').val();
	var descripcion = $('#descripcion').val();
	var mov_comercial = $('#mov_comercial').val();
	var nom_tecnico = $('#nom_tecnico').val();
	factura = $('#archivo')[0].files[0];
	if(empresa == '' || empresa == null){
		toastr.remove();
		msj('error', 'Ingrese el nombre de su empresa');
		return;
	}
	if(vertical == '' || vertical == null){
		toastr.remove();
		msj('error', 'Ingrese su vertical');
		return;
	}
	if(pais == '' || pais == null){
		toastr.remove();
		msj('error', 'Ingrese el país de su empresa');
		return;
	}
	if(gerente == '' || gerente == null){
		toastr.remove();
		msj('error', 'Ingrese el nombre de su gerente');
		return;
	}
	if(cont_com == '' || cont_tec == null){
		toastr.remove();
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
		toastr.remove();
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
		toastr.remove();
		msj('error', 'Ingrese la url de su página web');
		return;
	}
	if(telefono == '' || telefono == null){
		toastr.remove();
		msj('error', 'Ingrese su teléfono de contacto');
		return;
	}
	if(descripcion == '' || descripcion == null){
		toastr.remove();
		msj('error', 'Ingrese la descripción de su empresa');
		return;
	}
	if(factura == undefined){
		toastr.remove();
		msj('error', 'Ingrese el logo de su empresa');
		return;
	}
	if(factura['size'] > 2048000){
		toastr.remove();
		msj('error', 'El logo debe ser menor a 2MB');
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
				id_pais  : pais,
				id_verti : vertical,
				descripcion : descripcion,
				mov_comercial : mov_comercial,
				nom_tecnico   : nom_tecnico},
		url  : 'Registros/guardarDesarrolladores',
		type : 'POST'
	}).done(function(data){
		try{
        	data = JSON.parse(data);
        	if(data.error == 0){
				// limpiarCampos();
				// $('#step2Pos').css('pointer-events', '');
				// $('#li1Pos').addClass('complete');
				// $('#li1Pos').removeClass('active');
				// $('#li2Pos').addClass('active');
				// $('#tab1Pos').removeClass('active');
				// $('#tab2Pos').addClass('active');
        	}else{
        		return;
        	}
      } catch (err){
        toastr.remove();
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
var arrayIds    = [];
var arraycomets = [];
var arrayGeneral = [];
var obsChecked = '';
function guardarDatosDeps(){

	$(".js-radio .is-checked").each(function (){
		var isChecked    = $(this);
		var labelChecked = isChecked.find('.mdl-radio__label');
		var textChecked = isChecked.find('.mdl-radio__label').text();
		if(textChecked == 'Sí' || textChecked == 'Sim'){
			var attrChecked = labelChecked.siblings('.mdl-radio__button').attr('id');
			var idChecked   = $('#'+attrChecked);
			var valChecked  = idChecked.val();
			arrayIds.push(valChecked);
			obsChecked  = idChecked.parents('.js-radio').siblings('.js-observacion').find('input').val();
			arraycomets.push(obsChecked);
			arrayGeneral.push([valChecked,
								obsChecked]);
		}
    })
    $('.btn-guardar-deps').prop("disabled", true);
    $.ajax({
		data : {id_detalle   : arrayIds.toString(),
				arr_deta     : arrayIds,
				obsChecked   : obsChecked,
				arrayGeneral : arrayGeneral},
		url  : 'Registros/guardarDatosDeps',
		type : 'POST'
	}).done(function(data){
		try{
        	data = JSON.parse(data);
        	if(data.error == 0){
				arrayIds = [];
				$('.mdl-radio').removeClass('is-checked');
				$('#step3Pos').css('pointer-events', '');
				$('#li2Pos').addClass('complete');
				$('.js-observacion').find('input').val('');
				$('#li1Pos').addClass('complete');
				$('#li3Pos').addClass('active');
				$('#tab2Pos').removeClass('active');
				$('#tab3Pos').addClass('active');
        	}else{
        		return;
        	}
      } catch (err){
        toastr.remove();
        msj('error',err.message);
      }
	});
}
function subirFactura(){
	$("#archivo").trigger("click");
}
function agregarDatos(){
	var datos = new FormData();
	factura = $('#archivo')[0].files[0];
	if(factura == undefined){
		toastr.remove();
		msj('error', 'Ingrese el logo de su empresa');
		return;
	}
	if(factura['size'] > 2048000){
		toastr.remove();
		msj('error', 'El logo debe ser menor a 2MB');
		return;
	}
    datos.append('archivo',$('#archivo')[0].files[0]);
	$.ajax({
        type     	:"post",
        dataType 	:"json",
        url		    :"Registros/cargarFact",
        contentType :false,
        data 		:datos,
        processData :false,
	}).done(function(respuesta){
      	if(respuesta.error == 0) {
			limpiarCampos();
			$('#step2Pos').css('pointer-events', '');
			$('#li1Pos').addClass('complete');
			$('#li1Pos').removeClass('active');
			$('#li2Pos').addClass('active');
			$('#tab1Pos').removeClass('active');
			$('#tab2Pos').addClass('active');
      	} else {
        	toastr.remove();
        	msj('error', respuesta.mensaje);
        	return;
      	}
    });
}
$("#archivo").change(function(e) {
	var files = e.target.files;
    var archivo = files[0].name;
    archivo = archivo.replace(/\s/g,"_");
	$('#archivoDocumento').val(archivo);
});

function nextSoporte(){
	$('#step4Pos').css('pointer-events', '');
	$('#li3Pos').addClass('complete');
	$('#li4Pos').addClass('active');
	$('#tab3Pos').removeClass('active');
	$('#tab4Pos').addClass('active');
}
function finalizar(){
	$('#li4Pos').addClass('complete');
	location.href = 'Registros';
}