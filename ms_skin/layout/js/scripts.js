$(function() {
	$( "#datepicker" ).datepicker();
	var _aL = $('li.activeL').children('a').html();
	$('.showActiveL').html(_aL);
});