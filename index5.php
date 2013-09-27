<!DOCTYPE html>
<html lang="ru">

<head>

<meta charset="utf-8">
<!-- <meta name="viewport" content="width=device-width" /> -->
<meta name="keywords" content=""/>
<meta name="description" content="Wekender - Генераторы нового поколения."/>

<title>Wekender - Генераторы нового поколения</title>

<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/style.css">

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
			<h5>+38 (067) 345-56-67<br>  +38 (050) 886-42-36</h5>
			<nav class="menu">
				<a href="/" class="menu-item menu-item-active">Главная</a>
				<a href="product.php" class="menu-item">Продукция</a>
				<a href="/" class="menu-item">О компании</a>
				<a href="/" class="menu-item">Дилеры</a>
				<a href="/" class="menu-item">Контакты</a>
				<a href="/" class="menu-item-helper"></a>
			</nav>
		</header>
		<section class="content">
			<h1 class="content-title">Генераторы Weekender <span>источник чистой энергии</span></h1>
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
						<p>Цена <?= $product['price'] ?></p>
						<a href="product.php?id=<?= $product['id'] ?>">Подробнее >>></a>
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
				<a href="/" class="footer-menu-item">Главная</a>
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