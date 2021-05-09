<div class="container">
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="<?= base_url() ?>admin/Admin_page/admin"><i class="fa fa-dashboard"></i>Главная</a></li>
            <li><a href="<?= base_url() ?>admin/Partners/all_partners">Партнеры</a></li>
            <li><a href="#">Редактирование</a></li>
        </ol>
        <br/>
    </section>
    <div class="well well-sm">
        <form action="<?=base_url()?>admin/Partners/update_partners" id="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$partner['id']?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="pull-right">
                        <button class="btn btn-success">
                            <i class="fa fa-fw fa-check-square"></i>
                            Сохранить
                        </button>

                        <a class="btn btn-primary" href="<?=base_url()?>admin/Partners/all_partners">Назад</a>
                    </div>
                </div>
            </div>
    </div>
    <div class="row">
        <h3 class="text-center">Редактирование</h3>
        <div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
            <div class="form-group">
                <label for="">Фото:</label>
                <i>При добавлении новой, старая удаляется</i>
                <input name="file" type="file" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Описание к фото (alt):</label>
                <input name="alt_image"  type="text" class="form-control" value="<?=$partner['alt_image']?>">
            </div>
            <div class="form-group">
                <label for="">Ссылка:</label>
                <input name="url"  type="text" class="form-control" value="<?=$partner['url']?>">
            </div>
        </div>
        <div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
            <label for="">Текущее фото:</label>
            <div class="img-thumbnail">
                <img style="max-width: 100%" src="<?=base_url()?>public/img/partners-img/<?=$partner['photo']?>" alt="">
            </div>
        </div>
        </form>
    </div>
</div>

