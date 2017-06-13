$(function() {
	
	//菜单标题选择状态
    var menuTitleActive = function(index) {
    	$('#iscroll_menu a').removeClass('active');
		$('#iscroll_menu a[data-index="'+index+'"]').addClass('active');
    }
	
	var $header = $('#header');

	var swiper = new Swiper('.swiper-container', {
		onlyExternal: true,
		hashnav: true,
		onInit: function(swiper) {
			
			if( swiper.isBeginning ) {
				$('.icon-prev').addClass('disabled');
			}
			
			if( swiper.isEnd ) {
				$('.icon-next').addClass('disabled');
			}
			
			menuTitleActive(swiper.activeIndex);
		},
		onImagesReady: function(swiper) {
			var count = swiper.slides.length;
			var iscrolls = $('.swiper-slide>.iscroll-wrapper');
			$.each(iscrolls, function(i,e) {

				new IScroll(e, {
					mouseWheel: true,
					click: true,
					scrollbars: true,
					fadeScrollbars: true,
					preventDefault: false
				}).on('scrollEnd', function() {
					
					if( this.y == 0 ) {
						$('#header').removeClass('close');
					} else {
						$('#header').addClass('close');
					}
					
				});
				
			});
			$('#header').removeClass('close');
			$('.loading').remove();
		},
		onSlideChangeStart: function(swiper) {

			if( swiper.isBeginning ) {
				$('.icon-prev').addClass('disabled');
			} else {
				$('.icon-prev').removeClass('disabled');
			}
			
			if( swiper.isEnd ) {
				$('.icon-next').addClass('disabled');
			} else {
				$('.icon-next').removeClass('disabled');
			}

			menuTitleActive(swiper.activeIndex);
		}
    });

	document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
	
	new IScroll('#iscroll_menu', {
		mouseWheel: true,
		click: true,
		scrollbars: true,
		fadeScrollbars: true
	});
	
	$(document.body).click(function(e) {
		if (e.target.tagName == 'A') {
//			location.href = e.target.href;
			return;
		}
		
		if ($(e.target).parents('.swiper-container').length) {
			if ($header.is('.close')) {
				$('#header').removeClass('close');
			} else {
				$('#header').addClass('close');
			}
		}
	});
	
	$('.icon-menu').click(function() {
		$('#container').addClass('menu-open');
		$('#header').addClass('close');
	});
	
	$('#menu_panel a').click(function() {
		swiper.slideTo($(this).data('index'));
		$('#container').removeClass('menu-open');
		$('#header').removeClass('close');
		return false;
	});
	
	$('.icon-prev').click(function() {
		swiper.slidePrev();
	});
	
	$('.icon-next').click(function() {
		swiper.slideNext();
	});
	
	$('.icon-exit').click(function() {
		location.href=document.referrer;
	});

});