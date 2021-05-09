<div class="container">
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
			<li><a href="<?= base_url() ?>admin/Contact/all_contacts">Контакты</a></li>
			<li><a href="#">Добавление контактов</a></li>
		</ol>
		<br/>
	</section>
	<div class="well well-sm">
		<form action="<?=base_url()?>admin/Contact/add_conatacts" id="" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-sm-12">
					<div class="pull-right">
						<button class="btn btn-success">
							<i class="fa fa-fw fa-check-square"></i>
							Сохранить
						</button>

						<a class="btn btn-primary" href="<?=base_url()?>admin/Contact/all_contacts">Назад</a>
					</div>
				</div>
			</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<h3 class="text-center">Добавить новый контакт</h3>
			<div class="form-group">
				<label for="">Выбрать статус:</label>
				<select class="form-control" name="status">
					<option value="">Выберите</option>
					<option value="1">Whats app</option>
					<option value="2">Основной для звонка</option>
					<option value="3">Обычный</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Номер:</label>
				<input type="text" class="form-control" name="num">
			</div>
		</div>
		</form>
	</div>
</div>

