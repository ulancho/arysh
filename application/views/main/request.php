<style>
	/*.active {*/
	/*	display: block;*/
	/*}*/

	.notactive {
		display: none;
	}


	/*form styles*/
	#msform {
		text-align: center;
		position: relative;
	}

	#msform fieldset {
		background: white;
		border: 0 none;
		border-radius: 0px;
		box-shadow: 0 2px 6px 0 rgba(86, 86, 86, 0.6);
		padding: 20px 30px;
		box-sizing: border-box;
		width: 100%;
		/*stacking fieldsets above each other*/
		position: relative;
	}

	/*Hide all except first fieldset*/
	#msform fieldset:not(:first-of-type) {
		display: none;
	}

	/*inputs*/
	#msform input, #msform textarea, #msform select {
		padding: 15px;
		border: 1px solid #ccc;
		border-radius: 0px;
		margin-bottom: 10px;
		width: 100%;
		box-sizing: border-box;
		font-family: montserrat;
		color: #2C3E50;
		font-size: 13px;
	}

	#msform input:focus, #msform textarea:focus {
		-moz-box-shadow: none !important;
		-webkit-box-shadow: none !important;
		box-shadow: none !important;
		border: 1px solid #F20505;
		outline-width: 0;
		transition: All 0.5s ease-in;
		-webkit-transition: All 0.5s ease-in;
		-moz-transition: All 0.5s ease-in;
		-o-transition: All 0.5s ease-in;
	}

	/*buttons*/
	#msform .action-button {
		width: 100px;
		background: #F20505;
		font-weight: bold;
		color: white;
		border: 0 none;
		border-radius: 25px;
		cursor: pointer;
		padding: 10px 5px;
		margin: 10px 5px;
	}

	#msform .action-button:hover, #msform .action-button:focus {
		box-shadow: 0 0 0 2px white, 0 0 0 3px #8C2323;
	}

	#msform .action-button-previous {
		width: 100px;
		background: #C5C5F1;
		font-weight: bold;
		color: white;
		border: 0 none;
		border-radius: 25px;
		cursor: pointer;
		padding: 10px 5px;
		margin: 10px 5px;
	}

	#msform .action-button-previous:hover, #msform .action-button-previous:focus {
		box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
	}

	/*headings*/
	.fs-title {
		font-size: 18px;
		text-transform: uppercase;
		color: #2C3E50;
		margin-bottom: 10px;
		letter-spacing: 2px;
		font-weight: bold;
	}

	.fs-subtitle {
		font-weight: normal;
		font-size: 13px;
		color: #666;
		margin-bottom: 20px;
	}

	/*progressbar*/
	#progressbar {
		text-align: center;
		margin-bottom: 30px;
		overflow: hidden;
		/*CSS counters to number the steps*/
		counter-reset: step;
	}

	#progressbar li {
		list-style-type: none;
		color: white;
		text-transform: uppercase;
		font-size: 9px;
		width: 33.33%;
		float: left;
		position: relative;
		letter-spacing: 1px;
	}

	#progressbar li:before {
		content: counter(step);
		counter-increment: step;
		width: 24px;
		height: 24px;
		line-height: 26px;
		display: block;
		font-size: 12px;
		color: #333;
		background: white;
		border-radius: 25px;
		margin: 0 auto 10px auto;
	}

	/*progressbar connectors*/
	#progressbar li:after {
		content: '';
		width: 100%;
		height: 2px;
		background: white;
		position: absolute;
		left: -50%;
		top: 9px;
		z-index: -1; /*put it behind the numbers*/
	}

	#progressbar li:first-child:after {
		/*connector not needed before the first step*/
		content: none;
	}

	/*marking active/completed steps green*/
	/*The number of the step and the connector before it = green*/
	#progressbar li.active:before, #progressbar li.active:after {
		background: #D91E2E;
		color: white;
	}

	/* Not relevant to this form */
	.dme_link {
		margin-top: 30px;
		text-align: center;
	}

	.dme_link a {
		background: #FFF;
		font-weight: bold;
		color: #D91E2E;
		border: 0 none;
		border-radius: 25px;
		cursor: pointer;
		padding: 5px 25px;
		font-size: 12px;
	}

	.dme_link a:hover, .dme_link a:focus {
		background: #D91E2E;
		text-decoration: none;
	}
</style>

<!-- form start -->
<div class="contact-area bg-4" style="padding-top: 50px;padding-bottom: 50px;">
	<div class="container">
		<div class="row mb-30">
			<div class="col-12">
				<!-- progressbar -->
				<ul id="progressbar" style="display: none">
					<li class="active"></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7">
				<!-- MultiStep Form -->
				<div class="row">
					<div class="col-md-12">
						<form id="msform">

							<!-- fieldsets -->
							<fieldset>
								<h2 class="fs-title">Персональные данные</h2>
								<span>Персональный № (ПИН)</span>
								<input type="number" min="0" name="pin" required>
								<span>Фамилия</span>
								<input type="text"  name="f" required>
								<span>Имя</span>
								<input type="text" name="i" required>
								<span>Отчество</span>
								<input type="text" name="o" required>
								<span>Электронная почта</span>
								<input type="email" name="email">
								<span>Мобильный телефон</span>
								<input type="number" name="mobile_num" required>
								<span>Семейное положение</span>
								<select name="marital_status">
									<option value="0">Выберите</option>
									<option value="1">Женат(Замужем)</option>
								</select>
								<input type="button" name="next" class="next action-button" value="Next"/>
							</fieldset>
							<fieldset>
								<h2 class="fs-title">Social Profiles</h2>
								<h3 class="fs-subtitle">Your presence on the social network</h3>
								<input type="text" name="twitter" placeholder="Twitter"/>
								<input type="text" name="facebook" placeholder="Facebook"/>
								<input type="text" name="gplus" placeholder="Google Plus"/>
								<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
								<input type="button" name="next" class="next action-button" value="Next"/>
							</fieldset>
							<fieldset>
								<h2 class="fs-title">Create your account</h2>
								<h3 class="fs-subtitle">Fill in your credentials</h3>
								<input type="text" name="email" placeholder="Email"/>
								<input type="password" name="pass" placeholder="Password"/>
								<input type="password" name="cpass" placeholder="Confirm Password"/>
								<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
								<input type="submit" name="submit" class="submit action-button" value="Submit"/>
							</fieldset>
						</form>
						<!-- link to designify.me code snippets -->
						<div class="dme_link">
							<p><a href="http://designify.me/code-snippets-js/" target="_blank">More Code Snippets</a></p>
						</div>
						<!-- /.link to designify.me code snippets -->
					</div>
				</div>
				<!-- /.MultiStep Form -->
			</div>
			<div class="col-md-5">
				<div class="contact-wrap">
					<div class="appl appl-inf bg-5">
						<div class="row">
							<div class="col-sm-6">
								<p>Вы получите:</p>
							</div>
							<div class="col-sm-6">
								<p style="font-weight: 600;"><strong></strong> cомов</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<p>На срок:</p>
							</div>
							<div class="col-sm-6">
								<p style="font-weight: 600;"><strong></strong> месяц(а/ев)</p>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-sm-6">
								<p>Сумма возврата:</p>
							</div>
							<div class="col-sm-6">
								<p style="font-weight: 600;"><strong></strong> cомов</p>
							</div>
						</div>
					</div>
					<div class="appl appl-help bg-fff">
						<div class="row">
							<h3 class="color-them">Нужна помощь?</h3>
							<p class="color-them">Вы можете связаться с нами в любое время:</p>
						</div>
						<div class="row">
							<ul>
								<li class="color-them">
									<i class="fa fa-phone"></i>
									<p class="color-them">0(505) 555-303</p>
									<p class="color-them">0(501) 555-305</p>
								</li>
								<li>
									<i class="fa fa-envelope color-them"></i>
									<p class="color-them">info1@arysinvest.kg</p>
									<p class="color-them">info2@arysinvest.kg</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
</div>
<!-- form end -->
