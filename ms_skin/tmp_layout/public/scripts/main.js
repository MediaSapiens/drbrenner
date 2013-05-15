;window.mobileDetection = {
		Android:function () {
				return navigator.userAgent.match(/Android/i);
		},
		BlackBerry:function () {
				return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS:function () {
				return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera:function () {
				return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows:function () {
				return navigator.userAgent.match(/IEMobile/i);
		},
		any:function () {
				return (this.Android() || this.BlackBerry() || this.iOS() || this.Opera() || this.Windows());
		}
};

jQuery.noConflict();
jQuery(document).ready(function($){
	if ( mobileDetection.any() ) {
		$('.navbar .nav > li').has('ul').children('a').on('click', function(e){
			e.preventDefault();
			var hovered = $(this).parent().hasClass('hover');
			$('.navbar .nav > li.hover').removeClass('hover');
			$(this).parent().toggleClass('hover', !hovered);
		});
	}

	$('.btn-menu').on('click', function(e){
		e.preventDefault();
	});
	$('.nav-collapse').on('shown', function(){
		$(this).css('overflow','visible');
	}).on('hide', function(){
		$(this).css('overflow','');
		$('.navbar .nav > li.hover').removeClass('hover');
	});

	$('#index-slider').flexslider({
			//animation: "slide",
			directionNav: false,
			slideshow: false,
			start: function(slider){
				slider.css({
					'height': '100%',
					'position': 'absolute'
				}).children('.flex-viewport, .slides').css({
					'margin-top': 300
				}).find('img').css({
					'height': 'auto'
				});
			}
	});
	if ( $('#index-slider').size() ) {
		var header = $('.b-header').outerHeight(),
			indextitle = $('.b-indextitle').outerHeight(),
			footer = $('.b-footer').outerHeight(),
			sliderResize = function(){
				$('#index-slider .slides img').css('min-height', $(window).height() - header - indextitle - footer );
			};

		sliderResize();
		$(window).resize(function(){
			sliderResize();
		});
	}

});