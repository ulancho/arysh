<div class="container">
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
			<li><a href="<?= base_url() ?>admin/Goods/all_catalog">Каталог товаров</a></li>
			<li><a href="#">Редактирование товара</a></li>
		</ol>
		<br/>
	</section>
	<div class="well well-sm">
		<form action="<?=base_url()?>admin/Goods/update_good" id="" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?=$good['id']?>">
			<div class="row">
				<div class="col-sm-12">
					<div class="pull-right">
						<button class="btn btn-success">
							<i class="fa fa-fw fa-check-square"></i>
							Сохранить
						</button>
						<a  href="<?=base_url()?>admin/Goods/all_good_catalogs/<?=$good['id_catalog']?>" class="btn btn-primary">Назад</a>
					</div>
				</div>
			</div>
	</div>
	<div class="row">
		<h3 class="text-center">Редактирование товара: <?=$good['name']?></h3>

		<div class="col-sm-6">
            <div class="form-group">
                <label for="">Изменить категорию техники:</label>
                <select class="form-control" name="id_catalog" id="">
                    <? foreach ($catalog as $row): ?>
                    <option value="<?=$row['id']?>" <?php if ($row['id'] == $good['id_catalog']): ?> selected <?php endif; ?> ><?=$row['name']?></option>
                    <? endforeach; ?>
                </select>
            </div>
			<?php if ($podcatalog_yes == 1): ?>
			<div class="form-group">
				<label for="">Изменить подкатегорию техники:</label>
				<select class="form-control" name="id_podcatalog" id="">
					<option value="0">Выберите</option>
					<? foreach ($podcatalog as $row): ?>
						<option value="<?=$row['id']?>" <?php if ($row['id'] == $good['id_podcatalog']): ?> selected <?php endif; ?> ><?=$row['name']?></option>
					<? endforeach; ?>
				</select>
			</div>
			<?php endif; ?>
			<div class="form-group">
				<label for="">Название:</label>
				<input name="name" type="text" class="form-control" value="<?=$good['name']?>" required>
			</div>
			<div class="form-group">
				<label for="">Фото(главная):</label>
				<i>при добавлении новой, старая удаляется</i>
				<input name="file1" type="file" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Фото(внутренняя):</label>
				<i>при добавлении новой, старая удаляется</i>
				<input name="file2" type="file" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Описание к фото (alt):</label>
				<input name="alt_image"  type="text" class="form-control" value="<?=$good['alt_image']?>">
			</div>
		</div>

		<div class="col-sm-6">
			<div class="form-group">
				<label for="">Характеристики:</label>
				<textarea class="form-control editor" name="characteristic" id="" cols="30" rows="10">
					<?=$good['charac']?>
				</textarea>
			</div>

			<div class="form-group">
				<label for="">Описание:</label>
				<textarea class="form-control editor" name="desc" id="" cols="30" rows="10">
					<?=$good['description']?>
				</textarea>
			</div>

			<div class="form-group">
				<label for="">Ccылка на видео:</label>
				<input class="form-control" name="link" type="text" value="<?=$good['link_video']?>">
			</div>

		</div>
		</form>
	</div>
</div>

