$(document).ready(function() {
	"use strict";
	var bStyle = new Array("cubeSpread","glassCube","image_number","cubeStop","paralell","cubeSize","swapBarsBack","cut","cubeRandom","tube");
	$('.box_skitter ul li').each(function(e) {$('.box_skitter ul li').eq(e).find('img').addClass(bStyle[e]);});
	$('.box_skitter_large').skitter({
		theme: 'clean',
		focus_position: 'center',
		controls_position: 'center',
		numbers_align: 'center',
		progressbar: true,
		dots: true,
		interval: 5000
	});
});

$(document).ready(function() {
	// animate 动画样式
	var $easing = ['linear', 'swing', 'easeInQuad', 'easeOutQuad', 'easeInOutQuad', 'easeInCubic', 'easeOutCubic', 'easeInOutCubic', 'easeInQuart', 'easeOutQuart', 'easeInOutQuart', 'easeInQuint', 'easeOutQuint', 'easeInOutQuint', 'easeInExpo', 'easeOutExpo', 'easeInOutExpo', 'easeInSine', 'easeOutSine', 'easeInOutSine', 'easeInCirc', 'easeOutCirc', 'easeInOutCirc', 'easeInElastic', 'easeOutElastic', 'easeInOutElastic', 'easeInBack', 'easeOutBack', 'easeInOutBack', 'easeInBounce', 'easeOutBounce', 'easeInOutBounce']
	// 居中样式
	$('[wdd="center"]').each(function(){var $main = $(this).html(); $(this).html('<div class="c_box"><div class="c_m"><div class="c_t">'+ $main +'</div></div></div>'); });
	// Tab
	function TabShow(a,b){
		var c ="active";
		b.first().show().addClass(c);
		a.each(function(e){
			$(this).mouseover(function(){
				$(this).addClass(c).siblings().removeClass(c);
				b.eq(e).show().siblings().hide();
			});
		});
	}
	TabShow($(".i_pro_tab ul li"),$('.i_pro_c'));

	function ProMove(){
		var $box = $(".i_pro_c");
		$box.each(function(){
			var $list = $(this).children('.i_pro_list'),
				$ul = $list.children(),
				$li = $ul.children(),
				$size = $li.length,
				$ico = $(this).children('.i_pro_ico'),
				$width = $li.first().outerWidth(true),
				$speed = 500,
				$interval = 5000,
				c = "active",
				i = 0;
			for (var j = 0; j < Math.ceil($size / 4); j++) {
				var addLabel = "<span></span>";
				$ico.append(addLabel);
			}
			if($size <= 4){$ico.remove(); }
			$ico.children().first().addClass(c);
			$ul.css({width: $size * $width });
			$ico.children().click(function(){
				if(!$ul.is(":animated")){
					$(this).addClass(c).siblings().removeClass(c);
					var index = $(this).index();
					$ul.stop().animate({marginLeft: -index * 1220},500,$easing[4]);
				}
			});
		});
	}
	ProMove();

	function clickSwitch(a, b) {
		var $box  = a,
			$list = b,
			$ul = $list.children(),
			$li = $list.find('li'),
			$prev = $box.find('.prev'),
			$next = $box.find('.next'),
			$size = $li.length,
			$width = $li.first().outerWidth(true),
			$speed = 500,
			$interval = 5000,
			i = 0;
		$ul.append($li.clone()).css({width: $width * $size * 2});
		var t = setInterval(MoveR, $interval);
		$prev.click(function() {MoveL(); });
		$next.click(function() {MoveR(); });
		function MoveR(){if(!$ul.is(":animated")){i++; if (i > $size) {$ul.css({marginLeft: 0 }); i = 1; } $ul.stop().animate({marginLeft: -i * $width }, $speed); } }
		function MoveL(){if(!$ul.is(":animated")){i--; if (i === -1) {$ul.css({marginLeft: -$size * $width}); i = $size - 1; } $ul.stop().animate({marginLeft: -i * $width }, $speed); } }
		$box.hover(function() {clearInterval(t); }, function() {t = setInterval(MoveR, $interval); });
	}
	clickSwitch($('.i_store_m'),$('.i_store_list'));

	function LabelStyle(){
		$('.i_f_nav ul li:nth-child(3n)').addClass("text_c");
		$('.i_f_nav ul li:nth-child(3n-1)').addClass("text_c text_b");
		$('.i_f_nav ul li:last-child').addClass("last-child");
	}
	LabelStyle();

	$('.scroll_top').click(function(){$('html,body').animate({scrollTop: 0},500); });

	// 内页侧栏二级
	$('.sidebar_nav_list>ul>li').each(function(e) {
		$(this).children('a.active').siblings('ul').show();
		if ($(this).children('ul').length >= 1) {
			$(this).children('a').attr('href', 'javascript:;');
			$(this).click(function() {
				$(this).children('a').addClass('active').parent().siblings().children('a').removeClass('active');
				$(this).children('ul').stop().slideToggle(300).parent().siblings().children('ul').stop().slideUp(300);
			});
		}
	});

	function ProSwitch(a, b) {
		var $box = a,
			$list = b,
			$ul = $list.children(),
			$li = $ul.children(),
			$size = $li.length,
			$width = $li.first().outerWidth(),
			$prev = $box.children('.prev'),
			$next = $box.children('.next'),
			$speed = 500,
			$Interval = 5000,
			i = 0;
		$ul.append($li.first().clone()).css({width: $width * $size + $width });
		$prev.click(function() {MoveL(); });
		$next.click(function() {MoveR(); });
		function MoveR(){if(!$ul.is(":animated")){i++; if(i > $size){$ul.css({marginLeft: 0}); i = 1; } $ul.stop().animate({marginLeft: -i * $width},$speed); } }
		function MoveL(){if(!$ul.is(":animated")){i--; if(i <= -1){$ul.css({marginLeft: -$size * $width}); i = $size - 1; } $ul.stop().animate({marginLeft: -i * $width},$speed); } }
	}
	ProSwitch($(".pro_d_switch"),$(".pro_d_img"));
	ProSwitch($(".store_d_switch"),$(".store_d_img"));
});

$(document).ready(function() {
	"use strict";
	if (!placeholderSupport()) { // 判断浏览器是否支持 placeholder
		$('[placeholder]').focus(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
				input.val('');
				input.removeClass('placeholder');
			}
		}).blur(function() {
			var input = $(this);
			if (input.val() == '' || input.val() == input.attr('placeholder')) {
				input.addClass('placeholder');
				input.val(input.attr('placeholder'));
			}
		}).blur();
	};
})
function placeholderSupport() {
	return 'placeholder' in document.createElement('input');
}