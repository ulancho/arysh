<div class="container">
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
            <li><a href="#">Партнеры</a></li>
        </ol>
        <br/>
    </section>
    <div class="well well-sm">
        <div class="row">
            <div class="col-sm-12">
                <div class="pull-right">
                    <a href="<?= base_url() ?>admin/Partners/add_partners_view" class="btn  btn-primary">
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
        foreach($partners as $row)
        {
            echo '<tr>';
            echo '<td>'.$i++.'</td>';
            echo '<td><img class="photo_user" src="'.site_url().'public/img/partners-img/'.$row['photo'].'" alt="">'.'</td>';
            echo '<td>'.$row['alt_image'].'</td>';
            echo '<td><a href="'.site_url().'admin/Partners/update_partners_view/'.$row['id'].'"><button type="button" class="btn btn-primary">Редактировать</button></a></td>';
            echo '<td><a href="'.site_url().'admin/Partners/delete_partners/'.$row['id'].'"><button type="button" class="btn btn-danger">Удалить</button></a></td>';
            echo '</tr>';
        }
        ?>
    </table>

</div>
