<!DOCTYPE html>
<html lang="ru">

<head>

<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width" /> -->
<meta name="keywords" content=""/>
<meta name="description" content="Wekkender - Генераторы нового поколения."/>

<title>Weekender :: Главная</title>

<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/style3.css">

<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/js/carousel.js"></script>
<script src="/js/scripts.js"></script>

</head>
<? include_once('Data.php'); ?>
<body>
	<div class="container">
		<header>
			<h2>Расширяем дилерскую сеть</h2>
			<h3>Гарантия 2 года</h3>
			<a href="/" class="logo"><img src="img/logo.png" class="logo-img"/></a>
			<h4>0-800-20-30-40</h4>
			<h5>+38 (067) 345-56-67  +38 (050) 886-42-36</h5>
			<nav class="menu">
				<a href="/" class="menu-item">Главная</a>
				<a href="product.php" class="menu-item menu-item-active">Продукция</a>
				<a href="/" class="menu-item">О компании</a>
				<a href="/" class="menu-item">Дилеры</a>
				<a href="/" class="menu-item">Контакты</a>
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
					<h3><?= $product['capacity'] ?></h3>
					<h4><?= $product['price'] ?></h4>
					<a href="<?= $product['href'] ?>">Подробнее ></a>
					<div class="fix"></div>
				</div>
				<? endforeach; ?>
				<? endif; ?>
			</aside>
			<div class="details">
				<div class="details-main">
					<img src="img/slider/image-1.png" alt="Фото товара" />
					<h1>Генератор-инвертор Weekender 3500i</h1>
					<h2>Цена: <span>6495.15 грн. ($795)</span></h2>
					<div class="fix"></div>
				</div>
			</div>
			<div class="fix"></div>
		</section>
		<section class="slider">
			<div class="proposes">
				<div class="prev"></div>
				<div class="next"></div>
				<ul>
					<? if ( isset($products) && count($products) > 1) : ?>
					<? foreach ($products as $product) : ?>
					<li>
						<img src="<?= $product['img_src'] ?>" width="125" height="138" alt="<?= $product['alt'] ?>" />
						<h6><?= $product['name'] ?></h6>
						<h5><?= $product['capacity'] ?></h5>
						<p><?= $product['price'] ?></p>
						<a href="<?= $product['href'] ?>">Подробнее >>></a>
					</li>
					<? endforeach; ?>
					<? endif; ?>
				</ul>
			</div>
		</section>
		<section class="secondary-content">
			<p><? if ( isset($seo) && $seo != null ) { echo $seo; } ?></p>
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