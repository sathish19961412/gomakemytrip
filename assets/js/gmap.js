(function ($) {
	"use strict";
	jQuery(document).ready(function () {
		var MapId = jQuery('#googleMapCanvas'),
			address = MapId.data('address'),
			lat = MapId.data('lat'),
			long = MapId.data('long'),
			mapElement = document.getElementById('googleMapCanvas'),
			map, marker;
		if (!mapElement) {
			return;
		}
		var mapLang = null;

		function Show_G_map() {
			mapLang = new google.maps.LatLng(parseFloat(lat), parseFloat(long)),
				map = new google.maps.Map(mapElement, {
					scaleControl: true,
					center      : mapLang,
					zoom        : 8,
					scrollwheel : false
				}),
				marker = new google.maps.Marker({
					map     : map,
					position: new google.maps.LatLng(lat, long)
				});
			if (address) {
				var infowindow = new google.maps.InfoWindow();
				infowindow.setContent(address);
				google.maps.event.addListener(marker, 'click', function () {
					infowindow.open(map, marker);
				});
			}
		};

		$('.location_tab_tab').bind('touchstart click', function () {
			if (!mapLang) {
				Show_G_map();
				$('ul.wc-tabs li a[href=#tab-location_tab]').on('click', function (e) {
					setTimeout(function () {
						google.maps.event.trigger(map, 'resize');
					}, 50);
				});
			}
		});
		$('.single-tour-tabs').on('shown-accordion.bs.tabcollapse', function () {
			if (!mapLang) {
				Show_G_map();
				$('.panel-group a[href=#tab-location_tab-collapse]').on('click', function (e) {
					setTimeout(function () {
						google.maps.event.trigger(map, 'resize');
					}, 50);
				});

			}
		});
	});
})(jQuery);