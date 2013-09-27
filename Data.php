<?

/**
 * @author Ruslan Koloskov
 * @copyright 2013
 ===============================================================================================================================*/
//Каждая переменная - элемент карусели (продукт)
/**
 * "id"			- id элемента (1 - ...)
 * "img_src"	- расположение картинки
  * "'img_src_big'"	- расположение БОЛЬШОЙ картинки
 * "alt"		- альтернативный текст для картинки
 * "name"		- название товара (вверху элемента)
 * "capacity"	- мощность
 * "price"		- цена
 * "seo_text"	- СЕО текст для блока перед подвалом на странице описания товара
 * "'main-info'"	- Информация о товаре для вкладки "Общее"
 * Для добавления товаров просто создаем эелементы массива "products"
 */
$products[] = [
	'id'			=>	1,
	'img_src'		=>	'/img/slider/X950I-sm.png',
	'img_src_big'	=>	'/img/slider/X950I.png',
	'alt'			=>	'Генератор X950I Weekender 50 Гц/1 кВт',
	'name'		=>	'Weekender X950I',
	'capacity'	=>	'0.8 кВт',
	'price'		=>	'315 у.е.',
	'seo_text' 	=>	'Инверторные генераторы Weekender являются разработкой американской компании, создавшей поистине уникальный продукт, не уступающий по качеству японским генераторам, но благодаря производству в Китае, стоимость их ниже на половину. И не смотря на низкую стоимость, мы предоставляем гарантию на генераторы сроком на 2 года, что может позволить себе далеко не каждый производитель. Плюс для ускорения ремонта мы также сформировали большой склад запчастей, в чем вы можете убедиться сами, позвонив в наш отдел запчастей 0669861868 или 0 800 20-30-40, для удобства дилеров и клиентов, мы также размещаем на сайте схемы внутреннего устройства генераторов. Чтобы убедиться в уникальности продукта, достаточно взглянуть на некоторые его технические характеристики. На пример, Weekender 950i при номинальной мощности в 800 Вт имеет идеальную синусоиду удержания постоянного напряжения при очень резких скачках нагрузки, и этот малыш с четырехтактным мотором имеет вес всего 8,5 кг.',
	'main-info'	=>	'<div class="main-info">
						<h1>Генератор - инвертер Какой-то там</h1>
						<ol>
							<li>Длительный жизненный цикл.</li>
							<li>Высококачественная выходная мощность с очень стабильной синусоидой исходящего напряжения.</li>
							<li>Отличная шумоизоляция.</li>
							<li>Прост в эксплуатации и в обслуживании.</li>
							<li>Данный генератор защищен 6-тью патентами на изобретения.</li>
						</ol>
					</div>',
	'specification'	=>	'<div class="specifications">
						 <h1>Технические характеристики:</h1>
							<table>
								<tr>
									<td>Тип</td>
									<td>Инвертер - генератор</td>
								</tr>
								<tr>
									<td>Максимальный выход переменного тока (Вт)</td>
									<td>3500</td>
								</tr>
							</table>
						 </div>',
	'delivery'      =>  '<div class="main-info">
							<h1>Информация про доставку генератора</h1>
							<p>Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы </p>
						</div>',
	'fotos'         =>  '<img src="/img/slider/D1200I-sm.png" alt="Фото" /><img src="/img/slider/D2500I-sm.png" alt="Фото"/>',
	'secondary-info'    =>  '<div class="main-info">
								<h1>Дополнительная информация</h1>
								<p>Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы </p>
							</div>'
];

$products[] = [
	'id'		=>	2,
	'img_src'		=>	'/img/slider/X1200I-sm.png',
	'img_src_big'	=>	'/img/slider/X1200I.png',
	'alt'			=>	'Генератор X1200i Weekender 50 Гц/1,2 кВт',
	'name'		=>	'Weekender X1200i',
	'capacity'	=>	'1.2 кВт',
	'price'		=>	'405 у.е.',
	'seo_text' 	=>	'Инверторные генераторы Weekender являются разработкой американской компании, создавшей поистине уникальный продукт, не уступающий по качеству японским генераторам, но благодаря производству в Китае, стоимость их ниже на половину. И не смотря на низкую стоимость, мы предоставляем гарантию на генераторы сроком на 2 года, что может позволить себе далеко не каждый производитель. Плюс для ускорения ремонта мы также сформировали большой склад запчастей, в чем вы можете убедиться сами, позвонив в наш отдел запчастей 0669861868 или 0 800 20-30-40, для удобства дилеров и клиентов, мы также размещаем на сайте схемы внутреннего устройства генераторов. Чтобы убедиться в уникальности продукта, достаточно взглянуть на некоторые его технические характеристики. На пример, Weekender 950i при номинальной мощности в 800 Вт имеет идеальную синусоиду удержания постоянного напряжения при очень резких скачках нагрузки, и этот малыш с четырехтактным мотором имеет вес всего 8,5 кг.',
	'main-info'	=>	'<div class="main-info">
						<h1>Генератор - инвертер Какой-то там</h1>
						<ol>
							<li>Длительный жизненный цикл.</li>
							<li>Высококачественная выходная мощность с очень стабильной синусоидой исходящего напряжения.</li>
							<li>Отличная шумоизоляция.</li>
							<li>Прост в эксплуатации и в обслуживании.</li>
							<li>Данный генератор защищен 6-тью патентами на изобретения.</li>
						</ol>
					</div>',
	'specification'	=>	'<div class="specifications">
						 <h1>Технические характеристики:</h1>
							<table>
								<tr>
									<td>Тип</td>
									<td>Инвертер - генератор</td>
								</tr>
								<tr>
									<td>Максимальный выход переменного тока (Вт)</td>
									<td>3500</td>
								</tr>
							</table>
						 </div>',
	'delivery'      =>  '<div class="main-info">
							<h1>Информация про доставку генератора</h1>
							<p>Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы </p>
						</div>',
	'fotos'         =>  '<img src="/img/slider/D1200I-sm.png" alt="Фото" /><img src="/img/slider/D2500I-sm.png" alt="Фото"/>',
	'secondary-info'    =>  '<div class="main-info">
								<h1>Дополнительная информация</h1>
								<p>Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы </p>
							</div>'
];


$products[] = [
	'id'			=>	3,
	'img_src'		=>	'/img/slider/D1200I-sm.png',
	'img_src_big'	=>	'/img/slider/X1200I.png',
	'alt'			=>	'Генератор D1200i Weekender 50 Гц/1,2 кВт',
	'name'		=>	'Weekender D1200i',
	'capacity'	=>	'1.2 кВт',
	'price'		=>	'430 у.е.',
	'seo_text' 	=>	'Инверторные генераторы Weekender являются разработкой американской компании, создавшей поистине уникальный продукт, не уступающий по качеству японским генераторам, но благодаря производству в Китае, стоимость их ниже на половину. И не смотря на низкую стоимость, мы предоставляем гарантию на генераторы сроком на 2 года, что может позволить себе далеко не каждый производитель. Плюс для ускорения ремонта мы также сформировали большой склад запчастей, в чем вы можете убедиться сами, позвонив в наш отдел запчастей 0669861868 или 0 800 20-30-40, для удобства дилеров и клиентов, мы также размещаем на сайте схемы внутреннего устройства генераторов. Чтобы убедиться в уникальности продукта, достаточно взглянуть на некоторые его технические характеристики. На пример, Weekender 950i при номинальной мощности в 800 Вт имеет идеальную синусоиду удержания постоянного напряжения при очень резких скачках нагрузки, и этот малыш с четырехтактным мотором имеет вес всего 8,5 кг.',
	'main-info'	=>	'<div class="main-info">
						<h1>Генератор - инвертер Какой-то там</h1>
						<ol>
							<li>Длительный жизненный цикл.</li>
							<li>Высококачественная выходная мощность с очень стабильной синусоидой исходящего напряжения.</li>
							<li>Отличная шумоизоляция.</li>
							<li>Прост в эксплуатации и в обслуживании.</li>
							<li>Данный генератор защищен 6-тью патентами на изобретения.</li>
						</ol>
					</div>',
	'specification'	=>	'<div class="specifications">
						 <h1>Технические характеристики:</h1>
							<table>
								<tr>
									<td>Тип</td>
									<td>Инвертер - генератор</td>
								</tr>
								<tr>
									<td>Максимальный выход переменного тока (Вт)</td>
									<td>3500</td>
								</tr>
							</table>
						 </div>',
	'delivery'      =>  '<div class="main-info">
							<h1>Информация про доставку генератора</h1>
							<p>Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы </p>
						</div>',
	'fotos'         =>  '<img src="/img/slider/D1200I-sm.png" alt="Фото" /><img src="/img/slider/D2500I-sm.png" alt="Фото"/>',
	'secondary-info'    =>  '<div class="main-info">
								<h1>Дополнительная информация</h1>
								<p>Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы </p>
							</div>'
];


$products[] = [
	'id'			=>	4,
	'img_src'		=>	'/img/slider/D1200I-sm.png',
	'img_src_big'	=>	'/img/slider/D1200I.png',
	'alt'			=>	'Генератор D1500i Weekender 50 Гц/1,5 кВт',
	'name'		=>	'Weekender D1500i',
	'capacity'	=>	'1.5 кВт',
	'price'     =>	'475 у.е.',
	'seo_text' 	=>	'Инверторные генераторы Weekender являются разработкой американской компании, создавшей поистине уникальный продукт, не уступающий по качеству японским генераторам, но благодаря производству в Китае, стоимость их ниже на половину. И не смотря на низкую стоимость, мы предоставляем гарантию на генераторы сроком на 2 года, что может позволить себе далеко не каждый производитель. Плюс для ускорения ремонта мы также сформировали большой склад запчастей, в чем вы можете убедиться сами, позвонив в наш отдел запчастей 0669861868 или 0 800 20-30-40, для удобства дилеров и клиентов, мы также размещаем на сайте схемы внутреннего устройства генераторов. Чтобы убедиться в уникальности продукта, достаточно взглянуть на некоторые его технические характеристики. На пример, Weekender 950i при номинальной мощности в 800 Вт имеет идеальную синусоиду удержания постоянного напряжения при очень резких скачках нагрузки, и этот малыш с четырехтактным мотором имеет вес всего 8,5 кг.',
	'main-info'	=>	'<div class="main-info">
						<h1>Генератор - инвертер Какой-то там</h1>
						<ol>
							<li>Длительный жизненный цикл.</li>
							<li>Высококачественная выходная мощность с очень стабильной синусоидой исходящего напряжения.</li>
							<li>Отличная шумоизоляция.</li>
							<li>Прост в эксплуатации и в обслуживании.</li>
							<li>Данный генератор защищен 6-тью патентами на изобретения.</li>
						</ol>
					</div>',
	'specification'	=>	'<div class="specifications">
						 <h1>Технические характеристики:</h1>
							<table>
								<tr>
									<td>Тип</td>
									<td>Инвертер - генератор</td>
								</tr>
								<tr>
									<td>Максимальный выход переменного тока (Вт)</td>
									<td>3500</td>
								</tr>
							</table>
						 </div>',
	'delivery'      =>  '<div class="main-info">
							<h1>Информация про доставку генератора</h1>
							<p>Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы </p>
						</div>',
	'fotos'         =>  '<img src="/img/slider/D1200I-sm.png" alt="Фото" /><img src="/img/slider/D2500I-sm.png" alt="Фото"/>',
	'secondary-info'    =>  '<div class="main-info">
								<h1>Дополнительная информация</h1>
								<p>Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы </p>
							</div>'
];

$products[] = [
	'id'		=>	5,
	'img_src'		=>	'/img/slider/D1200I-sm.png',
	'img_src_big'	=>	'/img/slider/D1200I.png',
	'alt'			=>	'Генератор D1800i Weekender 50 Гц/1,8 кВт',
	'name'		    =>	'Weekender D1800i',
	'capacity'	    =>	'1.8 кВт',
	'price'	        =>	'540 у.е.',
	'seo_text' 	    =>	'Инверторные генераторы Weekender являются разработкой американской компании, создавшей поистине уникальный продукт, не уступающий по качеству японским генераторам, но благодаря производству в Китае, стоимость их ниже на половину. И не смотря на низкую стоимость, мы предоставляем гарантию на генераторы сроком на 2 года, что может позволить себе далеко не каждый производитель. Плюс для ускорения ремонта мы также сформировали большой склад запчастей, в чем вы можете убедиться сами, позвонив в наш отдел запчастей 0669861868 или 0 800 20-30-40, для удобства дилеров и клиентов, мы также размещаем на сайте схемы внутреннего устройства генераторов. Чтобы убедиться в уникальности продукта, достаточно взглянуть на некоторые его технические характеристики. На пример, Weekender 950i при номинальной мощности в 800 Вт имеет идеальную синусоиду удержания постоянного напряжения при очень резких скачках нагрузки, и этот малыш с четырехтактным мотором имеет вес всего 8,5 кг.',
	'main-info'	=>	'<div class="main-info">
						<h1>Генератор - инвертер Какой-то там</h1>
						<ol>
							<li>Длительный жизненный цикл.</li>
							<li>Высококачественная выходная мощность с очень стабильной синусоидой исходящего напряжения.</li>
							<li>Отличная шумоизоляция.</li>
							<li>Прост в эксплуатации и в обслуживании.</li>
							<li>Данный генератор защищен 6-тью патентами на изобретения.</li>
						</ol>
					</div>',
	'specification'	=>	'<div class="specifications">
						 <h1>Технические характеристики:</h1>
							<table>
								<tr>
									<td>Тип</td>
									<td>Инвертер - генератор</td>
								</tr>
								<tr>
									<td>Максимальный выход переменного тока (Вт)</td>
									<td>3500</td>
								</tr>
							</table>
						 </div>',
	'delivery'      =>  '<div class="main-info">
							<h1>Информация про доставку генератора</h1>
							<p>Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы </p>
						</div>',
	'fotos'         =>  '<img src="/img/slider/D1200I-sm.png" alt="Фото" /><img src="/img/slider/D2500I-sm.png" alt="Фото"/>',
	'secondary-info'    =>  '<div class="main-info">
								<h1>Дополнительная информация</h1>
								<p>Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы </p>
							</div>'
];

$products[] = [
	'id'			=>	6,
	'img_src'		=>	'/img/slider/D2500I-sm.png',
	'img_src_big'	=>	'/img/slider/D2500I.png',
	'alt'			=>	'Генератор D2500i Weekender 50 Гц/2,5 кВт',
	'name'		=>	'Weekender D2500i',
	'capacity'	=>	'2.5 кВт',
	'price'		=>	'660 у.е.',
	'seo_text' 	=>	'Инверторные генераторы Weekender являются разработкой американской компании, создавшей поистине уникальный продукт, не уступающий по качеству японским генераторам, но благодаря производству в Китае, стоимость их ниже на половину. И не смотря на низкую стоимость, мы предоставляем гарантию на генераторы сроком на 2 года, что может позволить себе далеко не каждый производитель. Плюс для ускорения ремонта мы также сформировали большой склад запчастей, в чем вы можете убедиться сами, позвонив в наш отдел запчастей 0669861868 или 0 800 20-30-40, для удобства дилеров и клиентов, мы также размещаем на сайте схемы внутреннего устройства генераторов. Чтобы убедиться в уникальности продукта, достаточно взглянуть на некоторые его технические характеристики. На пример, Weekender 950i при номинальной мощности в 800 Вт имеет идеальную синусоиду удержания постоянного напряжения при очень резких скачках нагрузки, и этот малыш с четырехтактным мотором имеет вес всего 8,5 кг.',
	'main-info'	=>	'<div class="main-info">
						<h1>Генератор - инвертер Какой-то там</h1>
						<ol>
							<li>Длительный жизненный цикл.</li>
							<li>Высококачественная выходная мощность с очень стабильной синусоидой исходящего напряжения.</li>
							<li>Отличная шумоизоляция.</li>
							<li>Прост в эксплуатации и в обслуживании.</li>
							<li>Данный генератор защищен 6-тью патентами на изобретения.</li>
						</ol>
					</div>',
	'specification'	=>	'<div class="specifications">
						 <h1>Технические характеристики:</h1>
							<table>
								<tr>
									<td>Тип</td>
									<td>Инвертер - генератор</td>
								</tr>
								<tr>
									<td>Максимальный выход переменного тока (Вт)</td>
									<td>3500</td>
								</tr>
							</table>
						 </div>',
	'delivery'      =>  '<div class="main-info">
							<h1>Информация про доставку генератора</h1>
							<p>Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы </p>
						</div>',
	'fotos'         =>  '<img src="/img/slider/D1200I-sm.png" alt="Фото" /><img src="/img/slider/D2500I-sm.png" alt="Фото"/>',
	'secondary-info'    =>  '<div class="main-info">
								<h1>Дополнительная информация</h1>
								<p>Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы </p>
							</div>'
];

$products[] = [
	'id'			=>	7,
	'img_src'		=>	'/img/slider/D2500I-sm.png',
	'img_src_big'	=>	'/img/slider/D2500I.png',
	'alt'			=>	'Генератор D3500i Weekender 50 Гц/3,5 кВт',
	'name'		=>	'Weekender D3500i',
	'capacity'	=>	'3.5 кВт',
	'price'		=>	'770 у.е.',
	'seo_text' 	=>	'Инверторные генераторы Weekender являются разработкой американской компании, создавшей поистине уникальный продукт, не уступающий по качеству японским генераторам, но благодаря производству в Китае, стоимость их ниже на половину. И не смотря на низкую стоимость, мы предоставляем гарантию на генераторы сроком на 2 года, что может позволить себе далеко не каждый производитель. Плюс для ускорения ремонта мы также сформировали большой склад запчастей, в чем вы можете убедиться сами, позвонив в наш отдел запчастей 0669861868 или 0 800 20-30-40, для удобства дилеров и клиентов, мы также размещаем на сайте схемы внутреннего устройства генераторов. Чтобы убедиться в уникальности продукта, достаточно взглянуть на некоторые его технические характеристики. На пример, Weekender 950i при номинальной мощности в 800 Вт имеет идеальную синусоиду удержания постоянного напряжения при очень резких скачках нагрузки, и этот малыш с четырехтактным мотором имеет вес всего 8,5 кг.',
	'main-info'	=>	'<div class="main-info">
						<h1>Генератор - инвертер Какой-то там</h1>
						<ol>
							<li>Длительный жизненный цикл.</li>
							<li>Высококачественная выходная мощность с очень стабильной синусоидой исходящего напряжения.</li>
							<li>Отличная шумоизоляция.</li>
							<li>Прост в эксплуатации и в обслуживании.</li>
							<li>Данный генератор защищен 6-тью патентами на изобретения.</li>
						</ol>
					</div>',
	'specification'	=>	'<div class="specifications">
						 <h1>Технические характеристики:</h1>
							<table>
								<tr>
									<td>Тип</td>
									<td>Инвертер - генератор</td>
								</tr>
								<tr>
									<td>Максимальный выход переменного тока (Вт)</td>
									<td>3500</td>
								</tr>
							</table>
						 </div>',
	'delivery'      =>  '<div class="main-info">
							<h1>Информация про доставку генератора</h1>
							<p>Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы </p>
						</div>',
	'fotos'         =>  '<img src="/img/slider/D1200I-sm.png" alt="Фото" /><img src="/img/slider/D2500I-sm.png" alt="Фото"/>',
	'secondary-info'    =>  '<div class="main-info">
								<h1>Дополнительная информация</h1>
								<p>Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы Много инфы </p>
							</div>'
];



/*==============================================================================================================================*/

//Тут текст для блока выше подвала
$seo = 'Инверторные генераторы Weekender являются разработкой американской компании, создавшей поистине уникальный продукт, не уступающий по качеству японским генераторам,  но благодаря производству в Китае, стоимость их ниже на половину.
И не смотря на низкую стоимость, мы предоставляем гарантию на генераторы сроком на 2 года, что может позволить себе далеко не каждый производитель.  Плюс для ускорения ремонта мы также сформировали большой склад запчастей, в чем вы можете убедиться сами, позвонив в наш отдел запчастей 0669861868 или 0 800 20-30-40, для удобства дилеров и клиентов, мы также размещаем на сайте схемы внутреннего устройства генераторов.   
Чтобы убедиться в уникальности продукта, достаточно взглянуть на некоторые его технические характеристики. На пример, Weekender 950i при номинальной мощности в 800 Вт имеет идеальную синусоиду удержания постоянного напряжения при очень резких скачках нагрузки, и этот малыш с четырехтактным мотором имеет вес всего 8,5 кг.   
';
/*==============================================================================================================================*/

/**
* Устанавливает id элемента, который будет описан на странице "Product.php", если открыть ее через меню.
* (GET параметр не передан)
* @return int id
*/
$default_id = 1;
/*==============================================================================================================================*/


?>