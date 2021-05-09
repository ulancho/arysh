<div class="container">
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
			<li><a href="<?= base_url() ?>admin/News/all_news">Новости</a></li>
			<li><a href="#">Добавление новостей</a></li>
		</ol>
		<br/>
	</section>
	<div class="well well-sm">
		<form action="<?=base_url()?>admin/News/add_news" id="" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-sm-12">
					<div class="pull-right">
						<button class="btn btn-success">
							<i class="fa fa-fw fa-check-square"></i>
							Сохранить
						</button>

						<a class="btn btn-primary" href="<?= base_url() ?>admin/News/all_news">Назад</a>
					</div>
				</div>
			</div>
	</div>
	<div class="row">
		<h3 class="text-center">Добавить новое новости</h3>

		<div class="col-sm-6">
			<div class="form-group">
				<label for="">Тема:</label>
				<input name="name" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="">Текст:</label>
				<textarea name="texts" class="form-control editor"  id="" cols="30" rows="5"></textarea>
			</div>
			<div class="form-group">
				<label for="">Фото:</label>
				<input name="file" type="file" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="">Описание фото (alt):</label>
				<input name="alt_image"  type="text" class="form-control">
			</div>
		</div>

		<div class="col-sm-6">
			<div class="form-group">
				<label for="">Title страницы:</label>
				<input name="title_page" type="text" class="form-control">
			</div>
		</div>
		</form>
	</div>
</div>

