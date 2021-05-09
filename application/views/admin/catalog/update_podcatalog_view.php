<div class="container">
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
			<li><a href="<?= base_url() ?>admin/Goods/all_catalog">Каталог товаров</a></li>
			<li><a href="#">Редактирование категории</a></li>
		</ol>
		<br/>
	</section>
	<div class="well well-sm">
		<form action="<?=base_url()?>admin/Goods/update_podcatalog" id="form_update_podcatalog" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-sm-12">
					<div class="pull-right">
						<button class="btn btn-success">
							<i class="fa fa-fw fa-check-square"></i>
							Сохранить
						</button>

						<a class="btn btn-primary" href="<?= base_url() ?>admin/Goods/all_good_catalogs/<?=$podcatalog['catalog_id']?>">Назад</a>
					</div>
				</div>
			</div>
	</div>
	<div class="row">
		<h3 class="text-center">Добавить категорию</h3>
		<input type="hidden" name="id" value="<?=$podcatalog['id']?>">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="">Название:</label>
				<input name="name" type="text" class="form-control" value="<?=$podcatalog['name']?>" required>
			</div>
			<div class="form-group">
				<label for="">Фото:</label>
				<i>при добавлении новой, старая удаляется</i>
				<input name="file" type="file" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Описание фото (alt):</label>
				<input name="alt_image"  type="text" class="form-control" value="<?=$podcatalog['alt_image']?>">
			</div>
		</div>

		<div class="col-sm-6">
			<div class="form-group">
				<label for="">Title страницы:</label>
				<input name="title_page" type="text" class="form-control" value="<?=$podcatalog['title_page']?>">
			</div>
		</div>
		</form>
	</div>
</div>

