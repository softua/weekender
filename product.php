<!DOCTYPE html>
<html lang="ru">

<head>

<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width" /> -->
<meta name="keywords" content=""/>
<meta name="description" content="Wekkender - Генераторы нового поколения."/>

<title>Weekender :: Главная</title>

<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/style.css">

<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/js/carousel.js"></script>
<script src="/js/scripts.js"></script>

</head>
<? include_once('Data.php');

	if ( isset($_GET['id']) )
	{
		$id = trim($_GET['id']);
		$id = intval($_GET['id']);
		
		if ( !is_int($id) || $id == 0 || $id > count($products) )
		{
			$id = $default_id - 1;
		}
		else
		{
			$id -= 1;
		}
	}
	else
	{
		$id = $default_id - 1;
	}
?>
<body>
	<input type="hidden" value="<?= $id ?>" name="prod_id" />
	<div class="container">
		<header>
			<h2>Расширяем дилерскую сеть</h2>
			<h3>Гарантия 2 года</h3>
			<a href="/" class="logo"><img src="img/logo.png" class="logo-img"/></a>
			<h4>0-800-20-30-40</h4>
			<h5>+38 (067) 345-56-67  <br>+38 (050) 886-42-36</h5>
			<nav class="menu">
				<a href="/" class="menu-item">Главная</a>
				<a href="product.php" class="menu-item menu-item-active">Продукция</a>
				<a href="/" class="menu-item">О компании</a>
				<a href="dealers.php" class="menu-item">Дилеры</a>
				<a href="contasts.php" class="menu-item">Контакты</a>
				<a href="/" class="menu-item-helper"></a>
			</nav>
		</header>
		<section class="content product-content">
			<h1>Генераторы</h1>
			<aside class="sidebar">
				<? if (isset($products) && count($products) > 0): ?>
				<? foreach ($products as $product): ?>
				<div class="nav-product">
					<img src="<?= $product['img_src'] ?>" alt="<?= $product['alt'] ?>"/>
					<h2><?= $product['name'] ?></h2>
					<h4>Цена <?= $product['price'] ?></h4>
					<a href="product.php?id=<?= $product['id'] ?>">П о д р о б н е е</a>
				</div>
				<? endforeach; ?>
				<? endif; ?>
			</aside>
			<div class="details">
				<div class="details-main">
					<img class="details-main-img" src="<?= $products[$id]['img_src_big']?>" alt="Фото товара" />
					<h1 class="details-main-name">Инверторный генератор <?= $products[$id]['name']?></h1>
					<h2 class="details-main-price">Цена: <span><?= $products[$id]['price']?></span></h2>
					<div class="delivery">
						<h1 class="delivery-title">Бесплатная доставка по Киеву и Украине</h1>
						<p class="delivery-text">
							Бесплатная доставка по Украине при заказе на сумму более 3000 грн. (при сумме заказа до 3000 грн. доставка 50 грн.) 
						</p>
						<a class="delivery-href" href="/">Подробнее...</a>
					</div>
					<div class="consult">
						<h1 class="consult-title">Заказы и Консультации по телефонам:</h1>
						<h3 class="consult-phone ks">+38 (067) 345 56 67</h3>
						<h3 class="consult-phone mts">+38 (050) 886 42 36</h3>
					</div>
					<div class="fix"></div>
				</div>
				<div class="specification">
					<div class="ajax-menu">
						<a href="" class="ajax-menu-active" need="main-info">Общее</a>
						<a href="" need="specification">Характеристики</a>
						<a href="" need="delivery">Доставка</a>
						<a href="" need="foto">Фото</a>
						<a href="" need="secondary-info">Дополнительно</a>
						<div class="hr"></div>
						<div class="product-info">
							<?= $products[$id]['main-info'] ?>
						</div>
					</div>
				</div>
			</div>
			<div class="fix"></div>
		</section>
		<section class="secondary-content">
			<p><?= $products[$id]['seo_text'] ?></p>
		</section>
		<footer>
			<nav class="footer-menu">
				<a href="/" class="footer-menu-item">Главаня</a>
				<a href="product.php" class="footer-menu-item">Продукция</a>
				<a href="/" class="footer-menu-item">О компании</a>
				<a href="/" class="footer-menu-item">Дилеры</a>
				<a href="/" class="footer-menu-item">Гарантии</a>
				<a href="/" class="footer-menu-item">Контакты</a>
				<a href="/" class="footer-menu-item-helper"></a>
			</nav>
		</footer>
	</div>
</body>

</html> 