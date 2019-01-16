$(document).ready(function () {
	var ColorLink = $("#colors a"),
		oSettingsBox = $(".settings_box"),
		oSettingsBoxWidth = oSettingsBox.outerWidth();;

	oSettingsBox.css({left: -oSettingsBoxWidth});

	$("#panel_toggler").on('touchend click', function (e) {
		e.preventDefault();

		if ( parseInt(oSettingsBox.css("left")) < 0) {
			oSettingsBox.animate({left: "0"}, 500);
		}
		else {
			oSettingsBox.animate({left: -oSettingsBoxWidth}, 500);
		}
	});

	ColorLink.on('touchend click', function (e) {
		e.preventDefault();
		var $this = $(this);

		localStorage.setItem('Host_ValueHref', $this.attr("data-href"));
		localStorage.setItem('Host_ColorButtonId', $this.attr("id"));

		$("link.colors_style").attr("href" , $this.attr("data-href"));

		oSettingsBox.animate({left: -oSettingsBoxWidth}, 500);

		$this.addClass('current').siblings().removeClass('current');
	});

	function isLocalStorageAvailable() {
		try {
			return 'localStorage' in window && window['localStorage'] !== null;
		} catch (e) {
			return false;
		}
	}

	var locStorage = localStorage.getItem('Host_ValueHref');

	if ( locStorage !== null ) {
		$("link.colors_style").attr("href" , localStorage.getItem('Host_ValueHref'));
		 ColorLink.removeClass('current');
		$('#' + localStorage.getItem('Host_ColorButtonId')).addClass('current');
	};
});