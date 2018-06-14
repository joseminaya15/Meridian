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

function buscarGeneral(){
	$('.js-card--partner').addClass('js-scale')
	$('.js-card--partner').css('transform','scale(0)');
	var pais 		   = $('#pais').val();
	var vertical 	   = $('#vertical').val();
	var caracteristica = $('#caracteristica').val();
	pais     	   = (pais == null) ? '' : pais.toString();
	vertical 	   = (vertical == null) ? '' : vertical.toString();
	caracteristica = (caracteristica == null) ? '' : caracteristica.toString();
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
				$('.js-card--partner').removeClass('js-scale')
			}
		}catch (err){
        	msj('error',err.message);
		}
	});
}