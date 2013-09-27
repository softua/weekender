$(document).ready(function () {
	$.fn.carousel = function (count) {
		var object = $(this);
		var count_visible = count;
		var item_width = object.children("ul").children("li").eq(0).width();
		var all_margin = object.width() - (item_width * count_visible);
		var item_margin = all_margin / (count_visible - 1);

		var items = object.children("ul").children("li");

		items.map(function (index, element) {
			if ( index == 0 )
			{
				$(element).css({
					position: 'absolute',
					top: '12px',
					left: 0
				});
			}
			else
			{
				$(element).css({
					position: 'absolute',
					top: '12px',
					left: items.eq(index - 1).position().left + item_width + item_margin + 'px'
				});
			}
		});
		$('[data="carousel"] .next').on('click', function () {
			$('[data="carousel"] ul li').eq(0).clone().appendTo($('[data="carousel"] ul')).css(
				'left', (item_width + item_margin) * ($('[data="carousel"] ul li').length - 1)
			);
			$('[data="carousel"] ul li').animate({
				left: '-=' + (item_width + item_margin) + 'px'
			}, 100);
			setTimeout(function () {
				$('[data="carousel"] ul li').eq(0).remove();
			}, 100);
		});
		
		$('[data="carousel"] .prev').on('click', function () {
			$('[data="carousel"] ul li').eq(-1).clone().prependTo($('[data="carousel"] ul')).css({
				left: -(item_width + item_margin) + 'px'
			});
			$('[data="carousel"] ul li').animate({
				left: '+=' + (item_width + item_margin) + 'px'
			}, 100);
			setTimeout(function () {
				$('[data="carousel"] ul li').eq(-1).remove();
			},100);
		});
		
		
		
	}
});