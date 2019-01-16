'use strict';

var $window = $(window);

function run()
{
	var fName = arguments[0],
		aArgs = Array.prototype.slice.call(arguments, 1);
	try {
		fName.apply(window, aArgs);
	} catch(err) {
		/* remove this comment if you want see function error
		console.log(fName, 'Oops...');
		*/
	}
};

/* smartresize
================================================== */
(function($,sr){

	// debouncing function from John Hann
	// http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
	var debounce = function (func, threshold, execAsap) {
			var timeout;

			return function debounced () {
					var obj = this, args = arguments;
					function delayed () {
							if (!execAsap)
									func.apply(obj, args);
							timeout = null;
					};

					if (timeout)
							clearTimeout(timeout);
					else if (execAsap)
							func.apply(obj, args);

					timeout = setTimeout(delayed, threshold || 100);
			};
	}
	// smartresize 
	jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };
})(jQuery,'smartresize');

/* intro size
================================================== */
function intro_size ()
{
	var intro_b  = document.querySelector(".b-fullscreen");

	if ( $(intro_b).length > 0 ) {

		var viewport = document.documentElement;

		intro_b.style.height = viewport.clientHeight + "px";

		var onresize = function() { 
			intro_b.style.height = viewport.clientHeight + "px";
		};

		$window.smartresize(onresize);
	};
};

/* saSlider
================================================== */
function _Saslider ()
{
	var slider = $('.saSlider'),
		bPagination = slider.attr('data-pagination'),
		sAuto = slider.attr('data-auto');

	bPagination = bPagination ? bPagination === 'true' : true;
	sAuto = sAuto ? sAuto === 'true' : true;

	slider.each(function () {
		var $this = $(this);

		$this.saSlider({
			indicators : bPagination,
		});
	});

	if ( sAuto == true ) {

		setInterval(function() {
			slider.find('.saSlider-arrow.next').click();
		}, 10000);
	};

	// lazy load all photos that should be lazy loaded..
	slider.find('img[data-src]').each(function(){
		this.src = this.getAttribute('data-src');
	});
};

/* bxslider
================================================== */
function _bx_slider ()
{
	$('.bxslider').each(function(){
		var $this = $(this);
		$this.bxSlider({
			mode 			:	$this.data('mode') != 'undefined' ? $this.data('mode') : "horizontal",
			speed			:	$this.data('speed') != 'undefined' ? $this.data('speed') : 4000,
			slideWidth		:	$this.data('slidewidth') != 'undefined' ? $this.data('slidewidth') : 0,
			minSlides		:	$this.data('minslides') != 'undefined' ? $this.data('minslides') : 1,
			maxSlides		:	$this.data('maxslides') != 'undefined' ? $this.data('maxslides') : 1,
			slideMargin		:	$this.data('slidemargin') != 'undefined' ? $this.data('slidemargin') : 0,
			moveSlides		:	$this.data('moveslides') != 'undefined' ? $this.data('moveslides') : 0,
			nextSelector 	:	$this.data('nextselector') != 'undefined' ? $this.data('nextselector') : '',
			prevSelector	:	$this.data('prevselector') != 'undefined' ? $this.data('prevselector') : '',
			pager			:	$this.data('pager') != 'undefined' ? $this.data('pager') : true,
			pagerSelector	:	$this.data('pagerselector') != 'undefined' ? $this.data('pagerselector') : '',
			pagerCustom		:	$this.data('pagercustom') != 'undefined' ? $this.data('pagercustom') : '',
			auto			:	$this.data('auto') != 'undefined' ? $this.data('auto') : false,
			autoHover		:	$this.data('autoHover') != 'undefined' ? $this.data('autoHover') : true,
			adaptiveHeight	:	$this.data('adaptiveheight') != 'undefined' ? $this.data('adaptiveheight') : true,
			captions		:	$this.data('caption') != 'undefined' ? $this.data('captions') : false,
			preloadImages	:	'all',
			nextText		:	'',
			prevText		:	'',
			controls		:	true,
			onSliderLoad: function(){
				var self = this;
				var arrow = self.parents('.bxslider-container').find('.bx-nav');

				arrow.hover(
					function(){ self.trigger('mouseenter'); },
					function(){ self.trigger('mouseleave'); }
				);
			}
		});
	});
};

/* parallax
================================================== */
function _parallax()
{
	if ( device.desktop() )
	{
		$.stellar({
			scrollProperty: 'scroll',
			verticalOffset: 0,
			horizontalOffset: 0,
			horizontalScrolling: false
		});

		$window.smartresize(function(){
			$.stellar('refresh');
		});
	};
};

/* boxer gall
================================================== */
function _gall ()
{
	$("a[data-gallery]").boxer({
		fixed: true,
		videoWidth: 800
	});
};

/* audio
================================================== */
function _audio ()
{
	$(".jp-jplayer").each(function () {

		var $this = $(this),
			sId =  (Math.random() * 1e7).toString().replace('.','');

		this.id = 'player_' + sId;

		$this.next().get(0).id = 'container_' + sId;

		$this.jPlayer({
			ready: function () {
				$(this).jPlayer("setMedia", $.parseJSON(this.getAttribute('data-setMedia')));
			},
			play: function() { // To avoid multiple jPlayers playing together.
				$(this).jPlayer("pauseOthers");
			},
			swfPath: "/js",
			supplied: "m4a, oga",
			cssSelectorAncestor: '#container_' + sId,
			volumeBar: 'none',
			globalVolume: true,
			smoothPlayBar: true
		});
	});
};

/* tooltip
================================================== */
function _tooltip ()
{
	$('[data-toggle="tooltip"]').tooltip({
		container: 'body'
	});
};

/* google map
================================================== */
function _g_map ()
{
	var maps = $('.g_map');

	if ( maps.length > 0 ) {

		maps.each(function() {
			var current_map = $(this);
			var latlng = new google.maps.LatLng(current_map.attr('data-longitude'), current_map.attr('data-latitude'));
			//var latlngmarker = new google.maps.LatLng(current_map.attr('data-marker-longitude'), current_map.attr('data-marker-latitude'));
			var point = current_map.attr('data-marker');

			var myOptions = {
				zoom: 14,
				center: latlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				mapTypeControl: false,
				scrollwheel: false,
				draggable: true,
				panControl: false,
				zoomControl: false,
				disableDefaultUI: true
			};

			var stylez = [
				{
					featureType: "all",
					elementType: "all",
					stylers: [
						{ saturation: -100 } // <-- THIS
					]
				}
			];

			var map = new google.maps.Map(current_map[0], myOptions);

			var mapType = new google.maps.StyledMapType(stylez, { name:"Grayscale" });
			map.mapTypes.set('Grayscale', mapType);
			map.setMapTypeId('Grayscale');

			var marker = new google.maps.Marker({
				map: map,
				icon: {
					size: new google.maps.Size(83,76),
					origin: new google.maps.Point(0,0),
					anchor: new google.maps.Point(29,76),
					url: point
				},
				position: latlng
			});

			google.maps.event.addDomListener(window, "resize", function() {
				var center = map.getCenter();
				google.maps.event.trigger(map, "resize");
				map.setCenter(center);
			});
		});
	};
};

/* portfolio sorting
================================================== */
function _portfolio_sorting ()
{
	var nOptionSets = document.getElementById('option-set'),
		jOptionSets = $(nOptionSets);

	if ( jOptionSets.length > 0 ) {

		var $container = $('.js-isotope'),
			$optionLinks = jOptionSets.find('a');

		$optionLinks.on('click', function(e) {
			var $this = $(this),
				currentOption = $this.data('cat');

			jOptionSets.find('.selected').removeClass('selected');
			$this.addClass('selected');

			if (currentOption !== '*') {
				currentOption = '.' + currentOption;
			}

			$container.isotope({filter : currentOption});

			return false;
		});
	};
};

/* chart
================================================== */
function _chart ()
{
	$('.b-skills').appear(function() {
		setTimeout(function() {
			$('.chart').easyPieChart({
				easing: 'easeOutElastic',
				delay: 3000,
				barColor: '#369670',
				trackColor: '#fff',
				scaleColor: false,
				lineWidth: 21,
				trackWidth: 21,
				size: 250,
				lineCap: 'round',
				onStep: function(from, to, percent) {
					this.el.children[0].innerHTML = Math.round(percent);
				}
			});
		}, 150);
	});
};

/* accordion
================================================== */
function _accordion ()
{
	var oAccordion = $('.accordion-container');

	if ( oAccordion.length > 0 ) {

		var oAccItem = oAccordion.find('.accordion-item'),
			oAccTrigger = oAccordion.find('span');

		oAccordion.each(function () {
			$(this).find('.accordion-item:eq(0)').addClass('active');
		});

		oAccTrigger.on('click', function (j) {
			j.preventDefault();

			var $this = $(this),
				parent = $this.parent(),
				dropDown = $this.next('article');

			parent.toggleClass('active').siblings(oAccItem).removeClass('active').find('article').not(dropDown).slideUp();

			dropDown.stop(false, true).slideToggle();

			return false;
		});
	};
};

/* tabs
================================================== */
function _tabs ()
{
	var oTab = $('.tab-container');

	if ( oTab.length > 0 ) {

		var oTabTrigger = oTab.find('nav a');

		oTab.each(function () {

			$(this)
				.find('nav a:eq(0)').addClass('active').end()
				.find('.tab-item:eq(0)').addClass('visible');
		});

		oTabTrigger.on('click', function (g) {
			g.preventDefault();

			var $this = $(this),
				index = $this.index(),
				parent = $this.closest('.tab-container');

			$this.addClass('active').siblings(oTabTrigger).removeClass('active');

			parent
				.find('.tab-item.visible').removeClass('visible').end()
				.find('.tab-item:eq(' + index + ')').addClass('visible');

			return false;
		});
	};
};

/* main menu
================================================== */
function main_menu ()
{
	var nMenuToggler = document.getElementById('menu-toggler'),
		nMenuOpen    = document.getElementById('menu-open'),
		nMenuClose   = document.getElementById('menu-close'),
		nNav         = document.getElementById('navigation'),
		nMenu        = document.getElementById('nav-menu'),

		jMenuToggler = $(nMenuToggler),
		jMenuOpen    = $(nMenuOpen),
		jMenuClose   = $(nMenuClose),
		jNav         = $(nNav),
		jMenu        = $(nMenu),

		jSubMenu = jNav.find('.submenu'),
		jLink = jNav.find('li a'),
		iTop = jNav.offset().top;

	if ( jSubMenu.length ) { jSubMenu.parents('li').addClass('has-submenu'); };

	if ( jNav.hasClass('navigation-anchor') && $('#s-intro').hasClass('s-intro-fullscreen') ) {

		var viewport = document.documentElement.clientHeight - 100;

		window.onscroll = function() {
			if ( (window.pageYOffset || document.documentElement.scrollTop) >= viewport ) {

				jNav.addClass('navigation-fixed');
			} else {

				jNav.removeClass('navigation-fixed');
			};
		};

	} else {

		window.onscroll = function() {
			if ( (window.pageYOffset || document.documentElement.scrollTop) > iTop ) {

				jNav.addClass('navigation-fixed');
			} else {

				jNav.removeClass('navigation-fixed');
			};
		};
	};

	if ( $('[data-spy]').length && jNav.hasClass('navigation-anchor') ) {
		jLink.on('touchend click', function (e) {
			e.preventDefault();

			var _href = this.getAttribute('href');

			$.scrollTo( _href,
				1000,
				{
					easing: 'swing' ,
					offset: -80,
					'axis':'y'
				}
			);

			return false;
		});
	};

	jMenuToggler.on('touchend click', function (e) {
		e.preventDefault();

		var $this = $(this);

		$this.toggleClass('active');

		jMenu.slideToggle('fast');

		if ( !$this.hasClass('active') ) {

			jSubMenu.css({ display : 'none' });
			$('.drop_active').removeClass('drop_active');
		};

		return false;
	});

	jMenuOpen.on('touchend click', function (e) {
		e.preventDefault();

		var $this = $(this);

		$this.addClass('invisible');
		jNav.toggleClass('opened');

		return false;
	});

	jMenuClose.on('touchend click', function (e) {
		e.preventDefault();

		var $this = $(this);

		jMenuOpen.removeClass('invisible');
		jNav.toggleClass('opened');

		return false;
	});

	jLink.on('touchend click', function (e) {
		var $this = $(this),
			$parent = $this.parent();

		if ( jMenuToggler.is(':visible') && $this.next(jSubMenu).length ) {

			if ($this.next().is(':visible')) {

				$parent.removeClass('drop_active');
				$this.next().slideUp('fast');

			} else {

				$this.closest('ul').find('li').removeClass('drop_active');
				$this.closest('ul').find('.submenu').slideUp('fast');
				$parent.addClass('drop_active');
				$this.next().slideDown('fast');
			};

			return false;
		};
	});

	$window.smartresize(function(){
		if ($(this).width() > 767 && !jNav.hasClass('navigation-style-3')) {

			jMenuToggler.removeClass('active');
			jMenu.removeAttr('style');
			jSubMenu.removeAttr('style');
			jNav.find('a.drop_active').removeClass('drop_active');
		}
	});
};

/* nice scroll
================================================== */
function _niceScroll ()
{
	$("html").niceScroll({
		cursorcolor:"#555",
		mousescrollstep: 50,
		scrollspeed: 70,
		zindex: 100,
		cursorborderradius: 0,
		cursorborder:0,
		horizrailenabled: false,
		cursorfixedheight:120,
		cursorwidth:"10px"
	});
};

/* choose-lang
================================================== */
function _chooseLang ()
{
	var nChooseLang = document.getElementById('choose-lang'),
		jChooseLang = $(nChooseLang);

	if ( jChooseLang.length > 0 ) {

		jChooseLang.on('click', 'p', function () {
			$(this).next('ul').slideToggle();

		}).on('click', 'li a', function (e) {
			e.preventDefault();

			var $this = $(this),
				text = $this.text();

			$this.parent().addClass('active').siblings().removeClass('active').parent().slideUp();

			jChooseLang.find('p span').text(text);

			return false;
		});
	};
};

/* search domain
================================================== */
function _searchDomain ()
{
	$('.domain-search').on('click', '.trigger', function (e) {
		e.stopPropagation();

		var $this = $(this),
			list = $this.next();

		$this.toggleClass('active');
		list.slideToggle();

		$window.on('click', function () {
			if ( $this.hasClass('active') ) {

				$this.removeClass('active');
				list.slideUp();
			}
		});

		return false;
	}).on('click', '.list li', function () {

		var $this = $(this);

		$this.addClass('selected').siblings().removeClass('selected');
	});
};

/* equal height
================================================== */
function _equalHeight()
{
	$('.matchHeight-container').each(function() {
		$(this).find('.matchHeight-item').matchHeight({
			byRow: true,
			property: 'min-height'
		});
	});
};

/* scroll to top
================================================== */
function _scrollTop ()
{
	var	nBtnToTopWrap = document.getElementById('btn-to-top-wrap'),
		jBtnToTopWrap = $(nBtnToTopWrap);

	if ( jBtnToTopWrap.length > 0 ) {

		var nBtnToTop = document.getElementById('btn-to-top'),
			jBtnToTop = $(nBtnToTop);

		jBtnToTop.on('click', function (e) {
			e.preventDefault();

			$('body,html').stop().animate({ scrollTop: 0 } , 1500);

			return false;
		});

		$window.on('scroll', function(e) {

			if ( $window.scrollTop() > jBtnToTop.data('visible-offset') ) {

				if ( jBtnToTopWrap.is(":hidden") ) {
					jBtnToTopWrap.fadeIn();
				};

			} else {

				if ( jBtnToTopWrap.is(":visible") ) {
					jBtnToTopWrap.fadeOut();
				};
			};
		});
	};
};

$window.load(function() {

	$("#status").fadeOut();
	$("#preloader").delay(350).fadeOut("slow");

	var jIsotope = $('.js-isotope');

	if ( jIsotope.length ) {

		jIsotope.isotope('layout');
	};
});

$(document).ready(function() {

	/* intro size
	================================================== */
	run(intro_size);

	/* saSlider
	================================================== */
	run(_Saslider);

	/* bxslider
	================================================== */
	run(_bx_slider);

	/* parallax
	================================================== */
	run(_parallax);

	/* audio
	================================================== */
	run(_audio);

	/* boxer gall
	================================================== */
	run(_gall);

	/* tooltip
	================================================== */
	run(_tooltip);

	/* google map
	================================================== */
	run(_g_map);

	/* portfolio
	================================================== */
	run(_portfolio_sorting);

	/* chart
	================================================== */
	run(_chart);

	/* accordion
	================================================== */
	_accordion();

	/* tabs
	================================================== */
	_tabs();

	/* main menu
	================================================== */
	run(main_menu);

	/* choose-lang
	================================================== */
	run(_chooseLang);

	/* search domain
	================================================== */
	run(_searchDomain);

	/* equal height
	================================================== */
	run(_equalHeight);

	/* scroll to top
	================================================== */
	_scrollTop();

	/* placeholder
	================================================== */
	$('[placeholder]').each(function() {
		var $this = $(this);

		$this.attr('data-placeholder', $this.attr('placeholder'));
		$this.removeAttr('placeholder');

		$this.val() == '' && $this.val($this.attr('data-placeholder')).css('color', '');
	}).focusin(function() {
		var $this = $(this);

		$this.val() == $this.attr('data-placeholder') && $this.val('').css('color', '');
	}).focusout(function() {
		var $this = $(this);

		$this.val() == '' && $this.val($this.attr('data-placeholder')).css('color', '');
	});
});