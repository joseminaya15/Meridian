function showCard(id){
	var idCard   = $('#'+id);
	var cardHide = idCard.parents('.js-card--partner').find('.js-hide');
	idCard.toggleClass('rotate');
	cardHide.toggleClass('js-height');
}
var idCaract = [];
function buscarGeneral(id){
	$('.js-card--partner').addClass('js-scale');
	var pais 		   = $('#pais').val();
	var vertical 	   = $('#vertical').val();
	var caracteristica = "";
	if (id != null) {
		var info   = $("#"+id).val();
		var indice = idCaract.indexOf(info.toString());
		if( idCaract.indexOf(info.toString()) == -1 ) {
			idCaract.push(info.toString());
		} else {
			idCaract.splice(indice, 1);
		}
	}
	pais     	   = (pais == null) ? '' : pais.toString();
	vertical 	   = (vertical == null) ? '' : vertical.toString();
	caracteristica = (idCaract == null) ? '' : idCaract.toString();
	$.ajax({
		data : { pais     		: pais,
				 vertical 		: vertical,
				 caracteristica : caracteristica },
		url  : 'Home/busquedaGeneral',
		type : 'POST'
	}).done(function(data){
		try {
			data = JSON.parse(data);
			if (data.error == 0) {
				$('#cardDesarrolladores').html(null);
				$('#cardDesarrolladores').html(data.html);
				$('.js-card--partner').removeClass('js-scale');
			}
		}catch (err){
        	msj('error',err.message);
		}
	});
}
function clearSearch() {
	$('.selectpicker').val('0');
	$('.selectpicker').selectpicker('refresh');
	$('.mdl-checkbox').removeClass('is-checked');
	idCaract = [];
	buscarGeneral();
} 
function changeLang(idioma){
	idioma = idioma;
	$.ajax({
		data : {idioma : idioma},
		url  : 'Home/goTo',
		type : 'POST'
	}).done(function(data){
	  	try{
		    data = JSON.parse(data);
		    if(data.error == 0){
		    	if(data.idioma == 'es'){
		    		location.href = "../Home";
		    	} else if (data.idioma == 'pt') {
					location.href = data.idioma+"/Home";
		    	}

		    	$('.menu_header').css('display','none');
	        	$('.search-filter.home').css('display','none');
	        	sessionStorage.setItem('OPEN_MODAL2', '2');
		    }else {
		    	toastr.remove();
	          	msj('error', data.msj);
		    	return;
		    }
	  	}catch(err){
	    	toastr.remove();
          	msj('error',err.message);
	  	}
	});
}
function closeCollapse(){
	$('#principal').find('.collapse').removeClass('in');
}
$('[data-id=vertical]').click(function(){
	$('#principal').find('.collapse').removeClass('in');
});
$('[data-id=pais]').click(function(){
	$('#principal').find('.collapse').removeClass('in');
});