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