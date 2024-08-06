(function ($) {

	"use strict";
	
	$(window).on('load', function () {
		$('[data-loader="circle-side"]').fadeOut(); // will first fade out the loading animation
		$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
		$('body').delay(350);
		$('header, #hero_in h1, #hero_in form').addClass('animated');
		$('.hero_single, #hero_in').addClass('start_bg_zoom');
		$(window).scroll();
	});
	
	// Sticky nav
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 1) {
			$('.header').addClass("sticky");
		} else {
			$('.header').removeClass("sticky");
		}
	});
    
    // Header button explore
    $('a[href^="#"].btn_explore').on('click', function (e) {
			e.preventDefault();
			var target = this.hash;
			var $target = $(target);
			$('html, body').stop().animate({
				'scrollTop': $target.offset().top
			}, 200, 'linear', function () {
				window.location.hash = target;
			});
		});
	

	
	/*  video popups */
	$('.video').magnificPopup({type:'iframe'});	/* video modal*/
	
	/*  Image popups */
	$('.magnific-gallery').each(function () {
		$(this).magnificPopup({
			delegate: 'a',
			type: 'image',
			gallery: {
				enabled: true
			},
			removalDelay: 500, //delay removal by X to allow out-animation
			callbacks: {
				beforeOpen: function () {
					// just a hack that adds mfp-anim class to markup 
					this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
					this.st.mainClass = this.st.el.attr('data-effect');
				}
			},
			closeOnContentClick: true,
			midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
		});
	});
	
	// Accordion
	function toggleChevron(e) {
		$(e.target)
			.prev('.card-header')
			.find("i.indicator")
			.toggleClass('ti-minus ti-plus');
	}
	$('#accordion_lessons').on('hidden.bs.collapse shown.bs.collapse', toggleChevron);
		function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".indicator")
            .toggleClass('ti-minus ti-plus');
    }
    // Accordion (updated v1.2)
	$('.accordion_2').on('hidden.bs.collapse shown.bs.collapse', toggleChevron);
		function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".indicator")
            .toggleClass('ti-minus ti-plus');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
	
	// Hamburher icon
	var $menu= $('#main_menu');
	$('.hamburger').on('click', function () {
		$menu.toggleClass('show');
		$menu.find('nav').toggleClass('animated fadeIn');
		$menu.find('.follow_us').toggleClass('animated fadeInUp');
		$('.header').toggleClass('sticky_menu_active');
	});
	var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener('click', function() {
          this.classList.toggle('is-active');
        }, false);
      });
    };
	  
	// Input field effect
	(function () {
		if (!String.prototype.trim) {
			(function () {
				// Make sure we trim BOM and NBSP
				var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
				String.prototype.trim = function () {
					return this.replace(rtrim, '');
				};
			})();
		}
		[].slice.call(document.querySelectorAll('input.input_field, textarea.input_field')).forEach(function (inputEl) {
			// in case the input is already filled..
			if (inputEl.value.trim() !== '') {
				classie.add(inputEl.parentNode, 'input--filled');
			}

			// events:
			inputEl.addEventListener('focus', onInputFocus);
			inputEl.addEventListener('blur', onInputBlur);
		});
		function onInputFocus(ev) {
			classie.add(ev.target.parentNode, 'input--filled');
		}
		function onInputBlur(ev) {
			if (ev.target.value.trim() === '') {
				classie.remove(ev.target.parentNode, 'input--filled');
			}
		}
	})();
	
	// Selectbox
	$(".selectbox").selectbox();

	// Check and radio input styles
	
	$('ul#cat_nav li a').on('click', function () {
		$('ul#cat_nav li a.active').removeClass('active');
		$(this).addClass('active');
	});
	
})(window.jQuery); 