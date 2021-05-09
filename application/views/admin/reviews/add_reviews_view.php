<div class="container">
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
			<li><a href="<?= base_url() ?>admin/Reviews/all_reviews">Отзывы</a></li>
			<li><a href="#">Добавление отзывов</a></li>
		</ol>
		<br/>
	</section>
	<div class="well well-sm">
		<form action="<?=base_url()?>admin/Reviews/add_reviews" id="" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-sm-12">
					<div class="pull-right">
						<button class="btn btn-success">
							<i class="fa fa-fw fa-check-square"></i>
							Сохранить
						</button>

						<a class="btn btn-primary" href="<?= base_url() ?>admin/Reviews/all_reviews">Назад</a>
					</div>
				</div>
			</div>
	</div>
	<div class="row">
		<h3 class="text-center">Добавить новый отзыв</h3>

		<div class="col-sm-12">
			<div class="form-group">
				<label for="">Заголовок:</label>
				<input name="name" type="text" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="">Текст:</label>
				<textarea name="texts" class="form-control"  id="" cols="30" rows="5"></textarea>
			</div>
			<div class="form-group">
				<label for="">От кого:</label>
				<input name="who"  type="text" class="form-control" required>
			</div>
		</div>
		</form>
	</div>
</div>

