<div class="container">
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
			<li><a href="<?= base_url() ?>admin/Goods/all_catalog">Каталог товаров</a></li>
			<li><a href="#"><?=$catalog_name['name']?></a></li>
		</ol>
		<br/>
	</section>
	<div class="well well-sm">
		<div class="row">
			<div class="col-sm-12">
				<div class="pull-right">
					<a href="<?= base_url() ?>admin/Goods/all_good_catalogsss/<?=$id_catalog?>" class="btn  btn-default">
						<i class="fa fa-fw fa-check"></i>
						Вся техника
					</a>
					<a href="<?= base_url() ?>admin/Goods/add_podcatalog_view/<?=$id_catalog?>" class="btn  btn-primary">
						<i class="fa fa-fw fa-plus"></i>
						Добавить категорию
					</a>
					<a href="<?= base_url() ?>admin/Goods/all_catalog" class="btn  btn-info">
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
		foreach($podcatalog as $row)
		{
			echo '<tr>';
			echo '<td>'.$i++.'</td>';
			echo '<td><img class="photo_user" src="'.site_url().'public/img/podcatalog-img/'.$row['photo'].'" alt="">'.'</td>';
			echo '<td><a href="'.site_url().'admin/Goods/all_good_podcatalogs/'.$row['catalog_id'].'/'.$row['id'].'">'.$row['name'].'</a></td>';
			echo '<td><a href="'.site_url().'admin/Goods/update_podcatalog_view/'.$row['id'].'"><button type="button" class="btn btn-primary">Редактировать</button></a></td>';
			echo '<td><a href="'.site_url().'admin/Goods/delete_podcatalog/'.$row['catalog_id'].'/'.$row['id'].'"><button type="button" class="btn btn-danger">Удалить</button></a></td>';
			echo '</tr>';
		}
		?>
	</table>

</div>
