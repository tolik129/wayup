<?php

if ( ! is_active_sidebar( 'woocommerce' ) ) {
	return;
}
?>

	<aside class="sidebar">
		<?php dynamic_sidebar( 'woocommerce' ); ?>
					<div class="widget widget_search">
						<form role="search" method="get" id="searchform1" action="#">
					
							<input class="text-search" type="search" value="" placeholder="Поиск по каталогу">
							<input type="submit" class="submit-search" value="" />
					
						</form>
					</div>

					<div class="sortby">
						<h5 class="sortby__title">Сортировать по цене</h5>
						<div id="slider-range"></div>
						<p class="sortby__price">
							<label for="amount">Цена：</label>
							<input type="text" id="price">
						</p>
					</div>
					<div class="categories side-nav log">
						<h5 class="categories__title">Категории товаров</h5>
						<div id="st-accordion" class="st-accordion">
							<ul>
								<li>
									<a href="#">Канцелярия</a>
									<div class="st-content cat-list">
										<div class="log__group check">
											<input id="pen" type="checkbox" name="office" value="pen">
											<label for="pen">Ручки</label>
										</div>
									
										<div class="log__group check">
											<input id="assets" type="checkbox" name="office" value="assets">
											<label for="assets">Наборы</label>
										</div>
							
										<div class="log__group check">
											<input id="press" type="checkbox" name="office" value="press">
											<label for="press">Пресс-папье</label>
										</div>
										<div class="log__group check">
											<input id="of-more" type="checkbox" name="office" value="of-more">
											<label for="of-more">Другое</label>
										</div>
									</div>
								</li>
								<li>
									<a href="#">Аксессуары</a>
									<div class="st-content cat-list">
										<div class="log__group check">
											<input id="tie" type="checkbox" name="office" value="tie">
											<label for="tie">Галстуки</label>
										</div>
							
										<div class="log__group check">
											<input id="clock" type="checkbox" name="office" value="clock">
											<label for="clock">Часы</label>
										</div>
							
										<div class="log__group check">
											<input id="socks" type="checkbox" name="office" value="socks">
											<label for="socks">Носки</label>
										</div>
							
										<div class="log__group check">
											<input id="studs" type="checkbox" name="office" value="studs">
											<label for="studs">Запонки</label>
										</div>
										
										<div class="log__group check">
											<input id="glasses" type="checkbox" name="office" value="glasses">
											<label for="glasses">Очки</label>
										</div>
							
										<div class="log__group check">
											<input id="strap" type="checkbox" name="office" value="strap">
											<label for="strap">Ремни</label>
										</div>
							
										<div class="log__group check">
											<input id="ac-more" type="checkbox" name="office" value="ac-more">
											<label for="ac-more">Другое</label>
										</div>
									</div>
								</li>
								<li>
									<a href="#">Одежда</a>
									<div class="st-content cat-list">
										<div class="log__group check">
											<input id="shirt" type="checkbox" name="office" value="shirt">
											<label for="shirt">Рубашки</label>
										</div>
							
										<div class="log__group check">
											<input id="vest" type="checkbox" name="office" value="vest">
											<label for="vest">Жилеты</label>
										</div>
							
										<div class="log__group check">
											<input id="polo" type="checkbox" name="office" value="polo">
											<label for="polo">Футболки</label>
										</div>
									</div>
								</li>
								<li>
									<a href="#">Обувь</a>
									<div class="st-content cat-list">
										<div class="log__group check">
											<input id="boots" type="checkbox" name="office" value="boots">
											<label for="boots">Туфли</label>
										</div>
							
										<div class="log__group check">
											<input id="cross" type="checkbox" name="office" value="cross">
											<label for="cross">Кроссовки</label>
										</div>
							
										<div class="log__group check">
											<input id="slippers" type="checkbox" name="office" value="slippers">
											<label for="slippers">Тапочки</label>
										</div>
									</div>
								</li>

								<li>
									<a href="#">Сумки</a>
									<div class="st-content cat-list">
										<div class="log__group check">
											<input id="back" type="checkbox" name="office" value="back">
											<label for="back">Рюкзаки</label>
										</div>
							
										<div class="log__group check">
											<input id="leather" type="checkbox" name="office" value="leather">
											<label for="leather">Кожаные</label>
										</div>
							
										<div class="log__group check">
											<input id="badger" type="checkbox" name="office" value="badger">
											<label for="badger">Барсетки</label>
										</div>
									</div>
								</li>

								<li>
									<a href="#">Специальные предложения</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="rating">
						<h5 class="rating__title">Рейтинг</h5>
						<div class="rating__block">
							<div class="rate"></div>
							<span>(113)</span>
						</div>
						<div class="rating__block">
							<div class="rate"></div>
							<span>(74)</span>
						</div>
						<div class="rating__block">
							<div class="rate"></div>
							<span>(8)</span>
						</div>
					</div>

					<div class="banner" style="background: url(img/banner1.jpg) no-repeat center top/ cover;">
						<h4 class="banner__title">Часы Rado</h4>
						<p class="banner__text">со скидкой -30%</p>
						<a href="#" class="banner__btn">Купить</a>
					</div>

				</aside>