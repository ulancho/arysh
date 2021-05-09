<div class="container">
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
			<li><a href="<?= base_url() ?>admin/Header/all_slide">Главный слайдер</a></li>
			<li><a href="#">Добавление слайдера</a></li>
		</ol>
		<br/>
	</section>
	<div class="well well-sm">
		<form action="<?=base_url()?>admin/Header/add_slide" id="" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-sm-12">
					<div class="pull-right">
						<button class="btn btn-success">
							<i class="fa fa-fw fa-check-square"></i>
							Сохранить
						</button>

						<a class="btn btn-primary" href="<?=base_url()?>admin/Header/all_slide">Назад</a>
					</div>
				</div>
			</div>
	</div>
	<div class="row">
		<h3 class="text-center">Добавить новый слайд</h3>

		<div class="col-sm-12">
			<div class="form-group">
				<label for="">Текст для слайда:</label>
				<i>Первая строка</i>
				<input name="name1" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="">Текст для слайда:</label>
				<i>Вторая строка</i>
				<input name="name2" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="">Фото:</label>
				<input name="file" type="file" class="form-control" required>
			</div>

		</div>
		</form>
	</div>
</div>

