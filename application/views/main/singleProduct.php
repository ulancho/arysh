<!-- slider area start -->
<section class="slider-area" id="form">
	<div style="margin: 0px!important;" class="row calc">
		<div class="container">
			<div class="row">
				<div class="col-md-7 slider-area-text">
					<h1 class="slider-area-title">Кредит "Групповой"</h1>
					<p class="slider-area-paraph">До 200 000 сом.<br>
						(На каждого участника)<br>
						до 18 месяцев</p>
				</div>
				<div class="col-md-5 parent-intro-calc">
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
											<select onchange="getCreditProduct()" class="form-control" name="product" id="creditProduct"
													disabled>
												<option value="1">Групповой</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6">
										<p>Сумма кредита</p>
									</div>
									<div class="col-sm-6 col-xs-6">
										<p class="pull-right" style="text-transform: lowercase;"><strong id="summ1">10000</strong>
											<span>сомов</span>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<input name="summCredit" type="range" min="10000" max="200000" step="1000" value="10000"
											   class="sliderRange" id="summCredit">
									</div>
									<div class="col-sm-12 span-calcs">
                        <span class="pull-left"><span id="minSumm">10000
                          </span>&nbsp;<span>сомов</span></span>
										<span class="pull-right"><span id="maxSumm">200000
                          </span>&nbsp;<span>сомов</span></span>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6">
										<p>Срок погашения</p>
									</div>
									<div class="col-sm-6 col-xs-6">
										<p class="pull-right" style="text-transform: lowercase;"><strong id="summ2">1</strong>
											<span>месяц(а/ев)</span>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<input name="srokCredit" type="range" min="1" max="18" step="1" value="1" class="sliderRange"
											   id="srokCredit">
									</div>
									<div class="col-sm-12 span-calcs">
                        <span class="pull-left"><span id="minMonth">1</span>
                          <span>месяцев</span></span>
										<span class="pull-right"><span id="maxMonth">18 </span><span>
                            &nbsp;месяцев</span></span>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<button class="btn btn-block add_appl_btn">ОТПРАВИТЬ ЗАЯВКУ</button>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6">
										<p>Сумма возврата</p>
									</div>
									<div class="col-sm-6 col-xs-6">
										<input type="hidden" id="summaVozvrataInp" name="summaVozvrata">
										<p class="pull-right" style="text-transform: lowercase;"><strong id="summaVozvrata"></strong>
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
			<img src="<?= base_url() ?>public/images/bg/group.jpg" alt="" class="slider">
		</div>
	</div>
</section>
<!-- slider area end -->

<!-- blog-details-area start -->
<section class="blog-details-area default-padding credit-info">
	<div class="container">
		<div class="row blog-details-promo">
			<div class="col-md-10 col-xs-12">
				<div class="blog-details-wrap">
					<div class="blog-details-content">
						<h2>Кредит "Групповой"</h2>
						<p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так.
							Его корни уходят в один фрагмент классической латыни 45 года н.э</p>


						<h3>Условия кредитования</h3>
						<p>Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации,
							например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь.</p>
						<ul>
							<li>много вариантов </li>
							<li>много вариантов </li>
							<li>много вариантов </li>
						</ul>
						<h3>Требования к клиентам</h3>
						<p>Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации,
							например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь.</p>
						<h3>Оформление кредита</h3>
						<p>Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации,
							например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь.</p>
					</div>
					<a href="#form" class="products__btn btn">
						Оформить заявку
					</a>
				</div>

			</div>

		</div>
	</div>
</section>
<!-- blog-details-area end -->
