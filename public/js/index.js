// $('.js-card--partner__contenido p').hover(function(){
// 	$(this).parents('.js-card--partner1').toggleClass('effect1');
// })

// $('.js-card--partner__contenido').hover(function(){
// 	$(this).parents('.js-card--partner2').toggleClass('effect4');
// })
function cargarCaracteristica(){
	// var seleccion = $('.dropdown-menu').find('ul').find('li.selected').find('.text').text();
	var seleccion = $('#vertical').val();
	$.ajax({
		data : { seleccion : seleccion },
		url  : 'home/comboCaracteristica',
		type : 'POST'
	}).done(function(data){

	});
	console.log(seleccion);
}

function showCard(id){
	var idCard       = $('#'+id);
	var idCardSelect = $('#'+id+'.select');
	$('.js-card--partner__button').find('button').removeClass('select');
	idCard.addClass('select');
	idCard.toggleClass('rotate');
	// idCardSelect.parents('.js-card--partner').find('.js-hide').toggleClass('js-height');
	if(idCard.hasClass('select')){
		idCard.parents('.js-card--partner').find('.js-hide').toggleClass('js-height');
	}
}
function showHover(id){
	var idCard = $('#'+id);
	var card   = idCard.parents('.js-card--partner1').addClass('effect1');
}
function hideHover(id){
	var idCard = $('#'+id);
	var card   = idCard.parents('.js-card--partner1').removeClass('effect1');
}
$(document).ready(function(){
	if(!$('.js-card--partner').find('.js-card--partner__button').find('button').hasClass('select')){
		$('.js-card--partner').find('.js-hide').removeClass('js-height');
	}
})