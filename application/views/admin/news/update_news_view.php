<div class="container">
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
			<li><a href="<?= base_url() ?>admin/News/all_news">Новости</a></li>
			<li><a href="#">Редактирование новостей</a></li>
		</ol>
		<br/>
	</section>
	<div class="well well-sm">
		<form action="<?=base_url()?>admin/News/update_news" id="" method="post" enctype="multipart/form-data">
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
		<h3 class="text-center">Редактировать</h3>

		<div class="col-sm-6">
			<div class="form-group">
				<label for="">Тема:</label>э
				<input type="hidden" name="id" value="<?=$news['id']?>">
				<input name="name" type="text" class="form-control" value="<?=$news['name']?>" required>
			</div>
			<div class="form-group">
				<label for="">Текст:</label>
				<textarea name="texts" class="form-control editor"  id="" cols="30" rows="5"><?=$news['text']?></textarea>
			</div>
			<div class="form-group">
				<label for="">Фото:</label>
				<i>При добавлении новой фотографии, старая удаляется</i>
				<input name="file" type="file" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Описание фото (alt):</label>
				<input name="alt_image"  type="text" class="form-control" value="<?=$news['alt_image']?>">
			</div>
		</div>

		<div class="col-sm-6">
			<div class="form-group">
				<label for="">Title страницы:</label>
				<input name="title_page" type="text" class="form-control" value="<?=$news['title_page']?>">
			</div>
		</div>
		</form>
	</div>
</div>

