<!-- slider area start -->
<section class="slider-area">
	<div style="margin: 0px!important;" class="row calc">
		<div class="container">
			<div class="row">
				<div class="col-md-6 slider-area-text">
					<h1 class="slider-area-title">Выберите кредит и оформляйте онлайн заявку!</h1>
					<p class="slider-area-paraph">до 100 000 с. без залога и поручителей</p>
				</div>
				<div class="col-md-6 parent-intro-calc">
					<div class="row">
						<div class="col-xs-12 intro-calc bg-fff">
							<h3 style="padding: 0px 45px;" class="text-center">Подобрать кредит</h3>
							<form action="form.html" method="post" id="calcForm">
								<div class="row">
									<div class="col-sm-6" style="padding-right: 0px!important;">
										<p>Кредитный продукт</p>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<select onchange="getCreditProduct()" class="form-control"
													name="product" id="creditProduct">
												<option value="1">Экcпресс</option>
												<option value="2">Индивидуальный кредит</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6">
										<p>Сумма кредита</p>
									</div>
									<div class="col-sm-6 col-xs-6">
										<p class="pull-right" style="text-transform: lowercase;"><strong
												id="summ1">10000</strong>
											<span>сомов</span>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<input name="summCredit" type="range" min="10000" max="70000"
											   step="1000" value="10000" class="sliderRange" id="summCredit">
									</div>
									<div class="col-sm-12 span-calcs">
                                                <span class="pull-left"><span id="minSumm">10000
                                                    </span>&nbsp;<span>сомов</span></span>
										<span class="pull-right"><span id="maxSumm">70000
                                                    </span>&nbsp;<span>сомов</span></span>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6">
										<p>Срок погашения</p>
									</div>
									<div class="col-sm-6 col-xs-6">
										<p class="pull-right" style="text-transform: lowercase;"><strong
												id="summ2">1</strong>
											<span>месяц(а/ев)</span>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<input name="srokCredit" type="range" min="1" max="12" step="1"
											   value="1" class="sliderRange" id="srokCredit">
									</div>
									<div class="col-sm-12 span-calcs">
                                                <span class="pull-left"><span id="minMonth">1</span>
                                                    <span>месяцев</span></span>
										<span class="pull-right"><span id="maxMonth">12 </span><span>
                                                        &nbsp;месяцев</span></span>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<a href="form.html" class="btn btn-block add_appl_btn">ОТПРАВИТЬ ЗАЯВКУ</a>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6">
										<p>Сумма возврата</p>
									</div>
									<div class="col-sm-6 col-xs-6">
										<input type="hidden" id="summaVozvrataInp" name="summaVozvrata">
										<p class="pull-right" style="text-transform: lowercase;"><strong
												id="summaVozvrata"></strong>
											<span>сомов</span></p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
	<div class="hidden-xs">
		<div class="slider-items">
			<img src="<?= base_url() ?>public/images/bg/1.jpg" alt="" class="slider">
		</div>
	</div>
</section>
<!-- slider area end -->

<!-- Как Оформить Заявку На Кредит start -->
<section class="service-area home2-service-area how_to_request default-padding" id="how_get_credit">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
				<div class="section-title text-center">
					<h2>Как оформить заявку на кредит</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
				<div class="service-wrap">
					<div class="service-content">
						<div class="service-icon-wrap">
							<img src="<?= base_url() ?>public/images/icons/calc.svg" alt="">
						</div>

						<h3>1. Выберите сумму и срок</h3>
						<p>Воспользуйтесь калькулятором на главной странице сайте</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
				<div class="service-wrap">
					<div class="service-content">
						<div class="service-icon-wrap">
							<img src="<?= base_url() ?>public/images/icons/anketa.svg" alt="">
						</div>
						<h3>2. Заполните анкету</h3>
						<p>У Вас это займет не больше 10 минут</p>
						<br>
						<br>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".3s">
				<div class="service-wrap">
					<div class="service-content">
						<div class="service-icon-wrap">
							<img src="<?= base_url() ?>public/images/icons/message.svg" alt="">
						</div>

						<h3>3. Дождитесь ответа</h3>
						<p>По СМС или звонок специалиста</p>
						<br>
						<br>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
				<div class="service-wrap">
					<div class="service-content">
						<div class="service-icon-wrap">
							<img src="<?= base_url() ?>public/images/icons/money.svg" alt="">
						</div>
						<h3>4. Получите деньги</h3>
						<p>Моментально на банковскую карту или наличными в офисе</p>
						<br>
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Как Оформить Заявку На Кредит end -->

<!-- products start -->
<section class="team-area default-padding wow fadeInUp" data-wow-delay=".1s" id="products">

	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			<div class="section-title text-center">
				<h2>Наши кредитные продукты</h2>
				<p>Узнайте подробности всех действующих кредитных продуктах</p>
			</div>
		</div>
	</div>
	<div class="container">

		<div class="products_link row">
			<div class="row">
				<div class="col-sm-6">
					<article class="products__item" id="bx_651765591_23165631">
						<h2 class="products__name">Кредит «Оной»</h2>
						<p class="products__text">
							Лёгкий заём до 100 000 сом для новых клиентов. С 1 по 7 день после оформления – 0,1 % в
							день, с
							8 по 32 – 1% </p>
						<a href="creditProductPageOnoi.html" class="products__btn btn">
							Оформить заявку
						</a>
					</article>
				</div>
				<div class="col-sm-6">
					<article class="products__item" id="bx_651765591_23165631">
						<h2 class="products__name">Кредит «Групповой»</h2>
						<p class="products__text">
							Лёгкий заём до 250 000 сом для новых клиентов. С 1 по 7 день после оформления – 0,1 % в
							день, с
							8 по 32 – 1% </p>
						<a href="creditProductPageGrupovoi.html" class="products__btn btn">
							Оформить заявку
						</a>
					</article>
				</div>
				<div class="col-sm-6">
					<article class="products__item" id="bx_651765591_23165631">
						<h2 class="products__name">Кредит «Ишкер»</h2>
						<p class="products__text">
							Лёгкий заём до 500 000 сом для новых клиентов. С 1 по 7 день после оформления – 0,1 % в
							день, с
							8 по 32 – 1% </p>
						<a href="creditProductPageIshker.html" class="products__btn btn">
							Оформить заявку
						</a>
					</article>
				</div>
				<div class="col-sm-6">
					<article class="products__item" id="bx_651765591_23165631">
						<h2 class="products__name">Кредит «Потребительский»</h2>
						<p class="products__text">
							Лёгкий заём до 250 000 сом для новых клиентов. С 1 по 7 день после оформления – 0,1 % в
							день, с
							8 по 32 – 1% </p>
						<a href="creditProductPagePotreb.html" class="products__btn btn">
							Оформить заявку
						</a>
					</article>
				</div>
				<div class="col-sm-6">
					<article class="products__item" id="bx_651765591_23165631">
						<h2 class="products__name">Кредит «Жилищный»</h2>
						<p class="products__text">
							Лёгкий заём до 250 000 сом для новых клиентов. С 1 по 7 день после оформления – 0,1 % в
							день, с
							8 по 32 – 1% </p>
						<a href="creditProductPageJilishnii.html" class="products__btn btn">
							Оформить заявку
						</a>
					</article>
				</div>
			</div>


		</div>

	</div>

</section>
<!-- products end -->

<!-- blog-promotions start -->
<section class="blog-area bg-1 default-padding" id="promotions">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12  col-xs-12 wow fadeInUp">
				<div class="section-title text-center">
					<h2>Наши акции</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
				<div class="blog-wrap">
					<div class="blog-img">
						<img src="<?= base_url() ?>public/images/blogs/1.png" alt="" />
					</div>
					<div class="blog-content">
						<h3><a href="#">Цены и тарифы снизились</a></h3>
						<p>В июне 2020 года по сравнению с предыдущим месяцем в странах ЕАЭС отмечалось
							повышение
							потребительских цен и тарифов...</p>
						<a href="#" class="btn-style">Подробнее</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
				<div class="blog-wrap">
					<div class="blog-img">
						<img src="<?= base_url() ?>public/images/blogs/1.png" alt="" />
					</div>
					<div class="blog-content">
						<h3><a href="#">Цены и тарифы снизились</a></h3>
						<p>В июне 2020 года по сравнению с предыдущим месяцем в странах ЕАЭС отмечалось
							повышение
							потребительских цен и тарифов...</p>
						<a href="#" class="btn-style">Подробнее</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".3s">
				<div class="blog-wrap">
					<div class="blog-img">
						<img src="<?= base_url() ?>public/images/blogs/1.png" alt="" />
					</div>
					<div class="blog-content">
						<h3><a href="#">Цены и тарифы снизились</a></h3>
						<p>В июне 2020 года по сравнению с предыдущим месяцем в странах ЕАЭС отмечалось
							повышение
							потребительских цен и тарифов...</p>
						<a href="#" class="btn-style">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- blog-promotions end -->

<!-- Способы Погашения Кредита start -->
<section class="service-area home2-service-area how_to_request default-padding " id="how_to_repay">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
				<div class="section-title text-center">
					<h2>Способы погашения кредита</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
				<a title="Перейти" href="<?= base_url() ?>main/elPay" class="service-wrap">
					<div class="service-content">
						<div class="service-icon-wrap" id="service-icon-wrap-orange">
							<img src="<?= base_url() ?>public/images/icons/smartphone.svg" alt="">
						</div>

						<h3>Электронные кошельки</h3>
						<p>Элсом, МБанк, ОДеньги! Balance.kg, Мегапэй</p>
					</div>
				</a>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">

				<!-- Button trigger modal -->
				<div title="Открыть" href="#" class="service-wrap">
					<button type="button" class="service-content" data-toggle="modal" data-target="#myModal">
						<div class="service-icon-wrap" id="service-icon-wrap-yellow">
							<img src="<?= base_url() ?>public/images/icons/terminal.svg" alt="">
						</div>
						<h3>Платежные терминалы</h3>
						<p>Умай, Quickpay, O!, Билайн, Мегаком, Оной</p>
					</button>
				</div>

			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".3s">
				<div title="Открыть" class="service-wrap">
					<button type="button" class="service-content" data-toggle="modal" data-target="#myModal2">
						<div class="service-icon-wrap" id="service-icon-wrap-gray">
							<img src="<?= base_url() ?>public/images/icons/bank.svg" alt="">
						</div>

						<h3>Через банки партнеры</h3>
						<p>ЗАО КБ Кыргызстан, ОАО Айыл Банк</p>

					</button>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Способы Погашения Кредита end -->

<!-- faq-area start -->
<div class="faq-area default-padding" id="faq">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
				<div class="section-title text-center">
					<h2>Часто задаваемые вопросы</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="faq-wrap">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" id="headingOne">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
									   aria-expanded="true" aria-controls="collapseOne">
										Как погасить кредит?
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in">
								<div class="panel-body">
									<p>Через кассу в ближайшем офисе компании принимаем платежи по займам,
										выданным
										наличными. Для оплаты нужен только номер договора и паспорт. Без
										комиссии,
										мгновенное зачисление.</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse"
									   data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
									   aria-controls="collapseTwo">
										Как найти офис?
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Через кассу в ближайшем офисе компании принимаем платежи по займам,
										выданным
										наличными. Для оплаты нужен только номер договора и паспорт. Без
										комиссии,
										мгновенное зачисление.</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse"
									   data-parent="#accordion" href="#collapseThree" aria-expanded="false"
									   aria-controls="collapseThree">
										Как найти офис?
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Через кассу в ближайшем офисе компании принимаем платежи по займам,
										выданным
										наличными. Для оплаты нужен только номер договора и паспорт. Без
										комиссии,
										мгновенное зачисление.</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" id="headingFour">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse"
									   data-parent="#accordion" href="#collapseFour" aria-expanded="false"
									   aria-controls="collapseFour">
										Как найти офис?
									</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Через кассу в ближайшем офисе компании принимаем платежи по займам,
										выданным
										наличными. Для оплаты нужен только номер договора и паспорт. Без
										комиссии,
										мгновенное зачисление.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- faq-area end -->

<!-- Отзывы start -->
<section class="testmonial-area default-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
				<div class="section-title text-center">
					<h2>Наши клиенты</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="test-active dotate-style">
				<div class="col-xs-12 wow fadeInLeft">
					<div class="client-wrap fix">
						<div class="client-info text-right">
							<h3>Нурбек Иманакунов</h3>
							<span>Г.Бишкек, Кыргызстан</span>
							<ul>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
							<p>Вот уже не первый год обращаюсь в компанию за финансовой помощью и каждый раз
								быстроденьги выручают.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 wow fadeInLeft">
					<div class="client-wrap fix">
						<div class="client-info text-right">
							<h3>Гапар Айтиев</h3>
							<span>Г.Бишкек, Кыргызстан</span>
							<ul>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
							<p>Вот уже не первый год обращаюсь в компанию за финансовой помощью и каждый раз
								быстроденьги выручают.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 wow fadeInLeft">
					<div class="client-wrap fix">
						<div class="client-info text-right">
							<h3>Чынгыз Айтматов</h3>
							<span>Г.Бишкек, Кыргызстан</span>
							<ul>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
							<p>Вот уже не первый год обращаюсь в компанию за финансовой помощью и каждый раз
								быстроденьги выручают.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 wow fadeInLeft">
					<div class="client-wrap fix">
						<div class="client-info text-right">
							<h3>Асыл Асылович</h3>
							<span>Г.Бишкек, Кыргызстан</span>
							<ul>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
							<p>Вот уже не первый год обращаюсь в компанию за финансовой помощью и каждый раз
								быстроденьги выручают.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Отзывы end -->

<!-- Новости start -->
<section class="blog-area bg-1 default-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12  col-xs-12 wow fadeInUp">
				<div class="section-title text-center">
					<h2>Новости компании</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
				<div class="blog-wrap">
					<div class="blog-img">
						<img src="<?= base_url() ?>public/images/blogs/1.png" alt="" />
					</div>
					<div class="blog-content">
						<h3><a href="#">Цены и тарифы снизились</a></h3>
						<p>В июне 2020 года по сравнению с предыдущим месяцем в странах ЕАЭС отмечалось
							повышение
							потребительских цен и тарифов...</p>
						<a href="#" class="btn-style">Подробнее</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
				<div class="blog-wrap">
					<div class="blog-img">
						<img src="<?= base_url() ?>public/images/blogs/1.png" alt="" />
					</div>
					<div class="blog-content">
						<h3><a href="#">Цены и тарифы снизились</a></h3>
						<p>В июне 2020 года по сравнению с предыдущим месяцем в странах ЕАЭС отмечалось
							повышение
							потребительских цен и тарифов...</p>
						<a href="#" class="btn-style">Подробнее</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".3s">
				<div class="blog-wrap">
					<div class="blog-img">
						<img src="<?= base_url() ?>public/images/blogs/1.png" alt="" />
					</div>
					<div class="blog-content">
						<h3><a href="#">Цены и тарифы снизились</a></h3>
						<p>В июне 2020 года по сравнению с предыдущим месяцем в странах ЕАЭС отмечалось
							повышение
							потребительских цен и тарифов...</p>
						<a href="#" class="btn-style">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Новости end -->


