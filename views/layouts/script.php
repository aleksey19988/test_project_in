<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <img src="img/logo/mts_logo.png" alt="">
        <div class="container content">
            Центр консультирования персонала
            <br>
            Сайт:
            <br>
            Телефон:
            <br>
            Режим работы:
        </div>
        <img src="img/logo/nc_logo.png" alt="">
    </nav>
</header>
<main>
    <div class="container text-left">
        <div class="row">
            <div class="col-3 list-group">
                <button type="button" class="list-group-item list-group-item-action"><a href="#" data-toggle="collapse" data-target="#">Приветствие</a></button>
                <button type="button" class="list-group-item list-group-item-action"><a href="#" data-toggle="collapse" data-target="#">Информация</a></button>
                <button type="button" class="list-group-item list-group-item-action"><a href="#" data-toggle="collapse" data-target="#">Оформление заказа</a></button>
                <button type="button" class="list-group-item list-group-item-action"><a href="#" data-toggle="collapse" data-target="#">Перевод звонка</a></button>
                <button type="button" class="list-group-item list-group-item-action"><a href="#" data-toggle="collapse" data-target="#">Нестандартный вопрос</a></button>
                <button type="button" class="list-group-item list-group-item-action"><a href="#" data-toggle="collapse" data-target="#">Завершение звонка</a></button>
            </div>
            <div class="col-8 container">
                <?= $content ?>
            </div>
        </div>
    </div>
</main>
<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <form action="">
            <div class="form-floating float-left">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" rows="5"></textarea>
                <label for="floatingTextarea">Comments</label>
            </div>
        </form>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>