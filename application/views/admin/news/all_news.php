<div class="container">
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
			<li><a href="#">Новости</a></li>
		</ol>
		<br/>
	</section>
	<div class="well well-sm">
		<div class="row">
			<div class="col-sm-12">
				<div class="pull-right">
					<a href="<?= base_url() ?>admin/News/add_news_view" class="btn  btn-primary">
						<i class="fa fa-fw fa-plus"></i>
						Добавить
					</a>
					<a class="btn btn-info" href="<?= base_url() ?>admin/Admin_page/admin">Назад</a>
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
		foreach($news as $row)
		{
			echo '<tr>';
			echo '<td>'.$i++.'</td>';
			echo '<td><img class="photo_user" src="'.site_url().'public/img/news-img/'.$row['photo'].'" alt="">'.'</td>';
			echo '<td><a target="_blank" href="'.site_url().'Main/News/'.$row['id'].'">'.$row['name'].'</a></td>';
			echo '<td><a href="'.site_url().'admin/News/update_news_view/'.$row['id'].'"><button type="button" class="btn btn-primary">Редактировать</button></a></td>';
			echo '<td><a href="'.site_url().'admin/News/delete_news/'.$row['id'].'"><button type="button" class="btn btn-danger">Удалить</button></a></td>';
			echo '</tr>';
		}
		?>
	</table>

</div>
