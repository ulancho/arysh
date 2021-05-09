<div class="container">
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
			<li><a href="#">Главный слайдер</a></li>
		</ol>
		<br/>
	</section>
	<div class="well well-sm">
		<div class="row">
			<div class="col-sm-12">
				<div class="pull-right">
					<a href="<?= base_url() ?>admin/Header/add_slide_view" class="btn  btn-primary">
						<i class="fa fa-fw fa-plus"></i>
						Добавить
					</a>

					<a href="<?= base_url() ?>admin/Admin_page/admin" class="btn btn-info">
						Назад
					</a>
				</div>
			</div>
		</div>
	</div>
	<table class="table table-hover table-bordered table-striped">
		<tr>
			<th>
				№
			</th>
			<th>
				Фото
			</th>
			<th>
				Название
			</th>
			<th colspan="2">
				Редактирование
			</th>
		</tr>
		<?php
		$i=1;
		foreach($slide as $row)
		{
			echo '<tr>';
			echo '<td>'.$i++.'</td>';
			echo '<td><img class="photo_user" src="'.site_url().'public/img/header-slide-img/'.$row['photo'].'" alt="">'.'</td>';
			echo '<td>'.$row['title1'].'</td>';
			echo '<td><a href="'.site_url().'admin/Header/update_slide_view/'.$row['id'].'"><button type="button" class="btn btn-primary">Редактировать</button></a></td>';
			echo '<td><a href="'.site_url().'admin/Header/delete_slide/'.$row['id'].'"><button type="button" class="btn btn-danger">Удалить</button></a></td>';
			echo '</tr>';
		}
		?>
	</table>

</div>
