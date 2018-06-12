function showCard(id){
	var idCard   = $('#'+id);
	var cardHide = idCard.parents('.js-card--partner').find('.js-hide');
	// $('.js-hide').removeClass('js-height');
	idCard.toggleClass('rotate');
	cardHide.toggleClass('js-height');
	// idCard.click(function(){
	// 	idCard.toggleClass('rotate');
	// 	cardHide.toggleClass('js-height');
	// });
}

// function showHover(id){
// 	var idCard = $('#'+id);
// 	var card   = idCard.parents('.js-card--partner1').addClass('effect1');
// }
// function hideHover(id){
// 	var idCard = $('#'+id);
// 	var card   = idCard.parents('.js-card--partner1').removeClass('effect1');
// }


function buscarPais () {
	var pais = $('#pais').val();
	pais     = pais.toString();
	$.ajax({
		data : { pais : pais },
		url  : 'Home/filtrarPais',
		type : 'POST'
	}).done(function(data){
		data = JSON.parse(data);
		if (data.error) {
			$('#vertical').attr('disabled', false);
		}
	});
}

function buscarVertical (){
	var pais = $('#pais').val();
	var vertical = $('#vertical').val;
	pais     = pais.toString();
	vertical = vertical.toString();
	$.ajax({
		data : { pais     : pais,
				 vertical : vertical },
		url  : 'Home/filtrarVertical',
		type : 'POST'
	}).done(function(data){
		data = JSON.parse(data);
		if (data.error) {
			$('#caracteristica').attr('disabled', false);
		}
	});
}

function buscarCaracteristica() {
	
}