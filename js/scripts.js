$(document).ready(function () {
/*==============================================================*/
//Тут можно указать количество отображаемых элементов в слайдерах
	var slider = $('[data="carousel"]');
	
// На главной странице
	if ( slider.hasClass('proposes') )
	{
		slider.carousel(5);
	}
/*==============================================================*/

// Бокс доставки при наведении мыши
	$('.delivery').on('mouseenter', function () {
		$('.delivery-title, .delivery-href').css('color', '#ae2222');
	});

// Бокс доставки при покидании мыши
	$('.delivery').on('mouseleave', function () {
		$('.delivery-title, .delivery-href').css('color', '#096da7');
	});
/*==============================================================*/

// Бокс заказа при наведении мыши
	$('.consult').on('mouseenter', function () {
		$('.consult-title').css('color', '#3301b4').css('font-weight', 'bold');
		$('.consult-phone').css('color', '#0f0f0f');
	});
	
// Бокс заказа при покидании мыши
	$('.consult').on('mouseleave', function () {
		$('.consult-title').css('color', '#2d5390').css('font-weight', 'normal');
		$('.consult-phone').css('color', '#848688');
	});
/*==============================================================*/

// Элементы бокового меню при наведении мыши
	$('.nav-product').on('mouseenter', function () {
		$('h4', $(this)).css('color', '#df1d0e');
		$('h2', $(this)).css('color', '#012c70');
		$('a', $(this)).css('color', '#444648').css('text-decoration', 'underline');
	});
/*==============================================================*/

// Элементы бокового меню при покидании мыши
	$('.nav-product').on('mouseleave', function () {
		$('h4', $(this)).css('color', '#8a1c13');
		$('h2', $(this)).css('color', '#2d5390');
		$('a', $(this)).css('color', '#747577').css('text-decoration', 'none');
	});
/*==============================================================*/

// Переключение активных вкладок ajax меню
	$('.ajax-menu>a').on('click', function () {
		$('.ajax-menu>a').removeClass('ajax-menu-active');
		$(this).addClass('ajax-menu-active');
		return false;
	});
/*==============================================================*/

// Ajax зазагрузка информации по товару
	$('[need="main-info"]').on('click', function () {
		$.ajax({
			url		:	'ajax-response.php',
			type	:	'POST',
			data	:	{ id: $('[name="prod_id"]').val(), property: 'main-info' },
			success	:	function (html) {
				$('.product-info').html(html);
			},
			error	:	function () {
				$('.product-info').html('<h1>Не сростается что-то!!!</h1>');
			}
		});
	});

	$('[need="specification"]').on('click', function () {
		$.ajax({
			url		:	'ajax-response.php',
			type	:	'POST',
			data	:	{ id: $('[name="prod_id"]').val(), property: 'specification' },
			success	:	function (html) {
				$('.product-info').html(html);
			},
			error	:	function () {
				$('.product-info').html('<h1>Не сростается что-то!!!</h1>');
			}
		});
	});

	$('[need="delivery"]').on('click', function () {
		$.ajax({
			url		:	'ajax-response.php',
			type	:	'POST',
			data	:	{ id: $('[name="prod_id"]').val(), property: 'delivery' },
			success	:	function (html) {
				$('.product-info').html(html);
			},
			error	:	function () {
				$('.product-info').html('<h1>Не сростается что-то!!!</h1>');
			}
		});
	});

	$('[need="foto"]').on('click', function () {
		$.ajax({
			url		:	'ajax-response.php',
			type	:	'POST',
			data	:	{ id: $('[name="prod_id"]').val(), property: 'fotos' },
			success	:	function (html) {
				$('.product-info').html(html);
			},
			error	:	function () {
				$('.product-info').html('<h1>Не сростается что-то!!!</h1>');
			}
		});
	});

	$('[need="secondary-info"]').on('click', function () {
		$.ajax({
			url		:	'ajax-response.php',
			type	:	'POST',
			data	:	{ id: $('[name="prod_id"]').val(), property: 'secondary-info' },
			success	:	function (html) {
				$('.product-info').html(html);
			},
			error	:	function () {
				$('.product-info').html('<h1>Не сростается что-то!!!</h1>');
			}
		});
	});
/*==============================================================*/
});