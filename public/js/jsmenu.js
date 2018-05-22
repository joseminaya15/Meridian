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
		    	console.log(data.partners);
		    	$('.js-cards').append(data.partners);
		    }else {
		    	return;
		    }
	  	}catch(err){
	    	msj('error',err.message);
	  	}
	});
}