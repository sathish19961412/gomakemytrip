(function ($) {
	"use strict";
	$.avia_utilities = $.avia_utilities || {};
	$.avia_utilities.supported = {};
	$.avia_utilities.supports = (function () {
		var div = document.createElement('div'),
			vendors = ['Khtml', 'Ms', 'Moz', 'Webkit', 'O'];
		return function (prop, vendor_overwrite) {
			if (div.style.prop !== undefined) {
				return "";
			}
			if (vendor_overwrite !== undefined) {
				vendors = vendor_overwrite;
			}
			prop = prop.replace(/^[a-z]/, function (val) {
				return val.toUpperCase();
			});

			var len = vendors.length;
			while (len--) {
				if (div.style[vendors[len] + prop] !== undefined) {
					return "-" + vendors[len].toLowerCase() + "-";
				}
			}
			return false;
		};
	}());
	/* Smartresize */
	(function ($, sr) {
		var debounce = function (func, threshold, execAsap) {
			var timeout;
			return function debounced() {
				var obj = this, args = arguments;

				function delayed() {
					if (!execAsap)
						func.apply(obj, args);
					timeout = null;
				}

				if (timeout)
					clearTimeout(timeout);
				else if (execAsap)
					func.apply(obj, args);
				timeout = setTimeout(delayed, threshold || 100);
			}
		}
		// smartresize
		jQuery.fn[sr] = function (fn) {
			return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr);
		};
	})(jQuery, 'smartresize');
})(jQuery);

var custom_js = {
	init            : function () {
		// image top header
		jQuery('#masthead').imagesLoaded(function () {
			var navigation_menu = jQuery('#masthead').outerHeight(true),
				header_top_bar = jQuery('.affix .header_top_bar').outerHeight(true),
				header_top_bar_hiden = 0;
			if (jQuery(window).width() > 768) {
				if (header_top_bar == 0) {
					header_top_bar_hiden = 38
				}
			}
			var height_header = navigation_menu + header_top_bar_hiden;
			if (height_header > 0) {
				jQuery('.wrapper-content .top_site_main').css({"padding-top": height_header + 'px'});
			}
		});
		// button mobile menu
		jQuery(".button-collapse").sideNav();
		// tour_tab
		jQuery('.tours-tabs a').on('click', function (e) {
			e.preventDefault()
		});
		if (jQuery().mbComingsoon) {
			jQuery('#myCounter').mbComingsoon({expiryDate: new Date(2018, 6, 20, 0, 0), speed: 500});
			setTimeout(function () {
				jQuery(window).resize();
			}, 200);
		}
		if (jQuery().counterUp) {
			jQuery(document).ready(function ($) {
				jQuery('.stats_counter_number').counterUp({
					delay: 10,
					time : 1000
				});
			});
		}
		jQuery('.wrapper-footer-newsletter').imagesLoaded(function () {
			jQuery('.wrapper-footer-newsletter').css({'margin-bottom': jQuery('.wrapper-subscribe').outerHeight() + 'px'});
		});
		jQuery('[data-toggle="tooltip"]').tooltip();
		if (jQuery(window).width() < 768) {
			jQuery('.single-tour-tabs .wc-tabs').tabCollapse();
			jQuery('.single-tour-tabs .panel-group').on('shown.bs.collapse', function (e) {
				var offset = jQuery('.panel.panel-default > .panel-collapse.in').offset();
				if(offset) {
					jQuery('html,body').animate({
						scrollTop: jQuery('.panel-title a').offset().top -70
					}, 200);
				}
			});
		}

		jQuery(document).on('click', '.gallery-tabs li a', function (e) {
			e.preventDefault();
			var $this = jQuery(this), myClass = $this.attr("data-filter");
			$this.closest(".gallery-tabs").find("li a").removeClass("active");
			$this.addClass("active");
			if (jQuery().isotope) {
				$this.closest('.wrapper_gallery').find('.content_gallery').isotope({filter: myClass});
			}
		});
		if (jQuery().typed) {
			jQuery('.phys-typingTextEffect').each(function () {
				var options = {}, strings = [];
				for (var key in this.dataset) {
					if (key.substr(0, 6) == "string") {
						strings.push(this.dataset[key]);
					} else {
						options[key] = parseInt(this.dataset[key]);
					}
				}
				options['strings'] = strings;
				options['contentType'] = 'html';
				options['loop'] = true;
				jQuery(this).typed(options);
			});
		}

	},
	search          : function () {
		var search_overlay = jQuery('.search-overlay'),
			body = jQuery('body');
		jQuery('.search-toggler').on('click', function (e) {
			search_overlay.addClass("search-show");
		});
		jQuery('.closeicon,.background-overlay').on('click', function (e) {
			search_overlay.removeClass("search-show");
		});
		jQuery(document).keyup(function (e) {
			if (e.keyCode == 27) {
				search_overlay.removeClass("search-show");
			}
		});
		jQuery('.show_from').on('click', function (e) {
			body.addClass("show_form_popup_login");
		});
		jQuery('.register_btn').on('click', function (e) {
			body.addClass("show_form_popup_register");
		});
		jQuery('.closeicon').on('click', function (e) {
			body.removeClass("show_form_popup_login");
			body.removeClass("show_form_popup_register");
		});
	},
	generateCarousel: function () {
		if (jQuery().owlCarousel) {
			jQuery(".wrapper-tours-slider").each(function () {
				var $this = jQuery(this),
					owl = $this.find('.tours-type-slider');
				var config = owl.data();
				 config.slidespeed = 1000;
				config.margin = 0;
				config.loop = true;
				config.navText = ['<i class="lnr lnr-chevron-left"></i>', '<i class="lnr lnr-chevron-right"></i>'];
				owl.owlCarousel(config);
			})
		}
	},
	singleSlider    : function () {
		if (jQuery().flexslider) {
			jQuery('#carousel').flexslider({
				animation    : "slide",
				controlNav   : false,
				animationLoop: false,
				slideshow    : false,
				itemWidth    : 134,
				itemMargin   : 20,
				asNavFor     : '#slider',
				directionNav : true,             //Boolean: Create navigation for previous/next navigation? (true/false)
				prevText     : "",           //String: Set the text for the "previous" directionNav item
				nextText     : ""               //String: Set the text for the "next" directionNav item
			});
			jQuery('#slider').flexslider({
				animation    : "slide",
				controlNav   : false,
				animationLoop: false,
				slideshow    : false,
				sync         : "#carousel",
				directionNav : false,             //Boolean: Create navigation for previous/next navigation? (true/false)
				start        : function (slider) {
					jQuery('body').removeClass('loading');
				}
			});
		}
		if (jQuery().swipebox) {
			jQuery('.swipebox').swipebox({
				hideBarsDelay: false, // delay before hiding bars on desktop
				loopAtEnd    : true // true will return to the first image after the last image is reached
			});
		}
	},

	stickyHeaderInit: function () {
		//Add class for masthead
		var $header = jQuery('.sticky_header'),
			menuH = $header.outerHeight(),
			$top_header = jQuery('.header_top_bar').outerHeight() + 2,
			latestScroll = 0;
		if (jQuery(window).scrollTop() > $top_header) {
			$header.removeClass('affix-top').addClass('affix');
		}
		jQuery(window).scroll(function () {
			var current = jQuery(this).scrollTop();
			if (current > $top_header) {
				$header.removeClass('affix-top').addClass('affix');
			} else {
				$header.removeClass('affix').addClass('affix-top');
			}
			if (current > latestScroll && current > menuH) {
				if (!$header.hasClass('menu-hidden')) {
					$header.addClass('menu-hidden');
				}
			} else {
				if ($header.hasClass('menu-hidden')) {
					$header.removeClass('menu-hidden');
				}
			}
			latestScroll = current;
		});
	},
}

jQuery(window).load(function () {
	custom_js.init();
	custom_js.search();
	custom_js.generateCarousel();
	custom_js.singleSlider();
	custom_js.stickyHeaderInit();
});
jQuery(window).ready(function () {
	custom_js.generateCarousel();
});
/* ---------------------------------------------
 Scripts resize
 --------------------------------------------- */
jQuery(window).on("resize", function () {
	custom_js.generateCarousel();
});