<div class="container">
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
			<li><a href="#">Каталог товаров</a></li>
		</ol>
		<br/>
	</section>
	<div class="well well-sm">
		<div class="row">
			<div class="col-sm-12">
				<div class="pull-right">
					<a href="<?= base_url() ?>admin/Goods/add_catalog_view" class="btn  btn-primary">
						<i class="fa fa-fw fa-plus"></i>
						Добавить каталог
					</a>
                    <a href="<?= base_url() ?>admin/One_good/add_good_view" class="btn  btn-primary">
                        <i class="fa fa-fw fa-plus"></i>
                        Добавить технику
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
		        foreach($catalog as $row)
		        {
		            echo '<tr>';
		            echo '<td>'.$i++.'</td>';
		            echo '<td><img class="photo_user" src="'.site_url().'public/img/catalog-img/'.$row['photo'].'" alt="">'.'</td>';
		            echo '<td><a href="'.site_url().'admin/Goods/all_good_catalogs/'.$row['id'].'">'.$row['name'].'</a></td>';
					echo '<td><a href="'.site_url().'admin/Goods/update_catalog_view/'.$row['id'].'"><button type="button" class="btn btn-primary">Редактировать</button></a></td>';
					echo '<td><a href="'.site_url().'admin/Goods/delete_catalog/'.$row['id'].'"><button type="button" class="btn btn-danger">Удалить</button></a></td>';
		            echo '</tr>';
		        }
		        ?>
	</table>

</div>
