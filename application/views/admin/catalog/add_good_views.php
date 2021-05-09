<div class="container">
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
			<li><a href="<?= base_url() ?>admin/Goods/all_catalog">Каталог товаров</a></li>
			<li><a href="<?= base_url() ?>admin/Goods/all_good_catalogs/<?=$id_catalog?>"><?=$catalog_name['name']?></a></li>
			<li><a href="#">Добавление товара</a></li>
		</ol>
		<br/>
	</section>
	<div class="well well-sm">
		<form action="<?=base_url()?>admin/Goods/add_goods" id="" method="post" enctype="multipart/form-data">
			<input type="hidden" name="catalog_id" value="<?=$id_catalog?>">
			<div class="row">
				<div class="col-sm-12">
					<div class="pull-right">
						<button class="btn btn-success">
							<i class="fa fa-fw fa-check-square"></i>
							Сохранить
						</button>

						<a class="btn btn-primary" href="<?=base_url()?>admin/Goods/all_good_catalogs/<?=$id_catalog?>">Назад</a>
					</div>
				</div>
			</div>
	</div>
	<div class="row">
		<h3 class="text-center">Добавить новый товар</h3>

		<div class="col-sm-6">
			<div class="form-group">
				<label for="">Название:</label>
				<input name="name" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="">Фото(главная):</label>
				<input name="file1" type="file" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="">Фото(внутренняя):</label>
				<input name="file2" type="file" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="">Описание к фото (alt):</label>
				<input name="alt_image"  type="text" class="form-control">
			</div>
		</div>

		<div class="col-sm-6">
			<div class="form-group">
				<label for="">Характеристики:</label>
				<textarea class="form-control editor" name="characteristic" id="" cols="30" rows="10"></textarea>
			</div>

			<div class="form-group">
				<label for="">Описание:</label>
				<textarea class="form-control editor" name="desc" id="" cols="30" rows="10"></textarea>
			</div>

			<div class="form-group">
				<label for="">Ccылка на видео:</label>
				<input class="form-control" name="link" type="text">
 			</div>

		</div>
		</form>
	</div>
</div>

