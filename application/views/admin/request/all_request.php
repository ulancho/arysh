<div class="container">
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
            <li><a href="#">Лиды</a></li>
        </ol>
        <br/>
    </section>
    <div class="well well-sm">
        <div class="row">
            <div class="col-sm-12">
                <div class="pull-right">
                    <a class="btn btn-info" href="<?= base_url() ?>admin/Admin_page/admin">Назад</a>
                    <a class="btn btn-primary" href="<?= base_url() ?>admin/Request/all_request">Обновить</a>
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
                Имя
            </th>
            <th>
                Номер
            </th>
            <th>
                Каталог
            </th>
            <th>
                Дата
            </th>
        </tr>
        <?php
        $i=1;
        foreach($request as $row)
        {
            echo '<tr>';
            echo '<td>'.$i++.'</td>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['number'].'</a></td>';
            echo '<td>'.$row['catalog'].'</td>';
            echo '<td>'.$row['date_system'].'</td>';
            echo '</tr>';
        }
        ?>
    </table>

</div>
