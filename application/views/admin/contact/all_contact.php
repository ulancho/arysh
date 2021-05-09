<div class="container">
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
			<li><a href="#">Контакты</a></li>
		</ol>
		<br/>
	</section>
	<div class="well well-sm">
		<div class="row">
			<div class="col-sm-12">
				<div class="pull-right">
					<a href="<?= base_url() ?>admin/Contact/add_contacts_view" class="btn  btn-primary">
						<i class="fa fa-fw fa-plus"></i>
						Добавить
					</a>
					<a href="<?= base_url() ?>admin/Admin_page/admin" class="btn  btn-info">
						Назад
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="well well-sm">
		<div class="row">
			<div class="col-sm-12">
				<p>1 - Whats app</p>
				<p>2 - Главный, для звонка</p>
				<p>3 - обычный</p>
			</div>
		</div>
	</div>
	<table class="table table-hover table-bordered table-striped">
		<tr>
			<th>
				№
			</th>
			<th>
				Номер
			</th>
			<th>
				Статус
			</th>
			<th colspan="2">
				Редактирование
			</th>
		</tr>
		<?php
		$i=1;
		foreach($contact as $row)
		{
			echo '<tr>';
			echo '<td>'.$i++.'</td>';
			echo '<td>'.$row['num'].'</td>';
			echo '<td>'.$row['status'].'</td>';
			echo '<td><a href="'.site_url().'admin/Contact/upd_contact_view/'.$row['id'].'"><button type="button" class="btn btn-primary">Редактировать</button></a></td>';
			echo '<td><a href="'.site_url().'admin/Contact/delete_contacts/'.$row['id'].'"><button type="button" class="btn btn-danger">Удалить</button></a></td>';
			echo '</tr>';
		}
		?>
	</table>

</div>
