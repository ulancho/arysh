<div class="container">
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
			<li><a href="<?= base_url() ?>admin/Goods/all_catalog">Каталог товаров</a></li>
			<li><a href="<?= base_url() ?>admin/Goods/all_good_catalogs/<?=$id_catalog?>"><?=$catalog_name['name']?></a></li>
			<li><a href="#"><?=$podcatalog_name?></a></li>
		</ol>
		<br/>
		<div class="well well-sm">
			<div class="row">
				<div class="col-sm-12">
					<div class="pull-right">
						<a href="<?= base_url() ?>admin/Goods/add_podcatalog_view/<?=$id_catalog?>" class="btn  btn-primary">
							<i class="fa fa-fw fa-plus"></i>
							Добавить категорию
						</a>

						<a href="<?= base_url() ?>admin/Goods/all_catalog" class="btn  btn-info">
							<i class="fa fa-fw fa-plus"></i>
							Назад
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

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
		foreach($goods as $row)
		{
			echo '<tr>';
			echo '<td>'.$i++.'</td>';
			echo '<td><img class="photo_user" src="'.site_url().'public/img/good-img/'.$row['photo_1'].'" alt="">'.'</td>';
			echo '<td>'.$row['name'].'</td>';
			echo '<td><a href="'.site_url().'admin/Goods/update_good_view/'.$row['id'].'"><button type="button" class="btn btn-primary">Редактировать</button></a></td>';
			echo '<td><a href="'.site_url().'admin/Goods/delete_good/'.$row['id_catalog'].'/'.$row['id'].'"><button type="button" class="btn btn-danger">Удалить</button></a></td>';
			echo '</tr>';
		}
		?>
	</table>

</div>
