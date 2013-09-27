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
	<div class="container">
		<header>
			<h2>Расширяем дилерскую сеть</h2>
			<h3>Гарантия 2 года</h3>
			<a href="/" class="logo"><img src="img/logo.png" class="logo-img"/></a>
			<h4>0-800-20-30-40</h4>
			<h5>+38 (067) 345-56-67  <br>+38 (050) 886-42-36</h5>
			<nav class="menu">
				<a href="/" class="menu-item">Главная</a>
				<a href="product.php" class="menu-item" >Продукция</a>
				<a href="/" class="menu-item">О компании</a>
				<a href="dealers.php" class="menu-item">Дилеры</a>
				<a href="contasts.php" class="menu-item menu-item-active">Контакты</a>
				<a href="/" class="menu-item-helper"></a>
			</nav>
		</header>
		<section class="content product-content">
			<h1>Наши контакты</h1>
			<aside class="sidebar">
				<? if (isset($products) && count($products) > 0): ?>
				<? foreach ($products as $product): ?>
				<div class="nav-product">
					<img src="<?= $product['img_src'] ?>" alt="<?= $product['alt'] ?>"/>

					<h4>Генераторы Weekender, Украина   </h4>
					<a href="product.php?id=<?= $product['id'] ?>">Подробнее ></a>
					<div class="fix"></div>
				</div>
				<? endforeach; ?>
				<? endif; ?>
			</aside>
			<div class="details">
				<div class="details-main">
					<img class="details-main-img" src="<?= $products[$id]['img_src_big']?>" alt="Фото товара" />
				 
					<h2 class="details-main-price">Генераторы Weekender, Украина - <br> оптовые и розничные поставки</h2>
					<div >
						<h1 class="delivery-title"> 0-800-20-30-40<br>
бесплатно со стационарных телефонов
<br><br>
050-800-80-70
<br>
067-700-80-70</h1>
						<p class="delivery-text">
							 

 


						</p>
 
					</div>

					<div class="fix"></div>
				</div>



				</div>
			</div>
			<div class="fix"></div>
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