function filtrarIndustria(){
	var industria = $('#industria').val();
	$.ajax({
		data : {industria : industria},
		url  : 'Home/filtrarIndustria',
		type : 'POST'
	}).done(function(data){
		try{
		    data = JSON.parse(data);
		    if(data.error == 0){
		    	$('.js-cards').html('');
		    	$('.js-cards').append(data.partners);
		    }else {
		    	return;
		    }
	  	}catch(err){
	    	msj('error',err.message);
	  	}
	});
}
function filtroGeografia(){
	var geografia = $('#geografia').val();
	$.ajax({
		data : {geografia : geografia},
		url  : 'Home/filtroGeografia',
		type : 'POST'
	}).done(function(data){
		try{
		    data = JSON.parse(data);
		    if(data.error == 0){
		    	$('.js-cards').html('');
		    	$('.js-cards').append(data.partners);
		    }else {
		    	return;
		    }
	  	}catch(err){
	    	msj('error',err.message);
	  	}
	});
}
function buscarPartners(){
	var industria = $('#industria').val();
	var geografia = $('#geografia').val();
	$.ajax({
		data : {industria : industria,
				geografia : geografia},
		url  : 'Home/buscarPartners',
		type : 'POST'
	}).done(function(data){
		try{
		    data = JSON.parse(data);
		    if(data.error == 0){
		    	$('.js-cards').html('');
		    	$('.js-cards').append(data.partners);
		    }else {
		    	return;
		    }
	  	}catch(err){
	    	msj('error',err.message);
	  	}
	});
}
function buscadorPartner(){
	var buscador = $('#buscador').val();
	$.ajax({
		data : {buscador : buscador},
		url  : 'Home/buscadorPartner',
		type : 'POST'
	}).done(function(data){
		try{
		    data = JSON.parse(data);
		    if(data.error == 0){
		    	$('.js-cards').html('');
		    	$('.js-cards').append(data.partners);
		    }else {
		    	return;
		    }
	  	}catch(err){
	    	msj('error',err.message);
	  	}
	});
}
function verificarDatos(e){
	if(e.keyCode === 13){
		e.preventDefault();
		buscadorPartner();
    }
}