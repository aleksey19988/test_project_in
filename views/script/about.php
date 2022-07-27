<?php

?>

<p>
    <span class="bold-text">Оператор: </span>Спасибо за то, что Вы являетесь клиентом интернет-магазина «М***». Чем я могу вам помочь?
</p>

<ul class="list-group" id="list-group">
    <li class="list-group-item">
        <a class="collapse-title-link" data-bs-toggle="collapse" href="#collapse-1" role="button" aria-expanded="false" aria-controls="collapse-1">
            <span class="bold-text">КЛ: </span>О Компании
        </a>
        <div class="collapse" id="collapse-1" data-bs-parent="#list-group">
            <div class="card card-body">
                <p><span class="bold-text">Оператор: </span>Интернет-магазин «М***» - современный стильный магазин с широким выбором чулочно-носочных изделий (около 1000 наименований)
                    и нижнего мужского и детского белья (свыше 100 наименований различных фирм). Почти вся продукция сертифицирована и соответствует стандартам РФ.
                </p>

                <p>За долгие годы нашей работы расширен портфель брендов. Со многими ведущими представителями подписаны контракты, что позволило избавиться от посредников,
                    и как следствие – сделать цены для Вас более доступными.
                </p>
            </div>
        </div>
    </li>
    <li class="list-group-item">
        <a class="collapse-title-link" data-bs-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false" aria-controls="collapse-2">
            <span class="bold-text">КЛ: </span>О новой услуге «VIP Деливери»
        </a>
        <div class="collapse" id="collapse-2" data-bs-parent="#list-group">
            <div class="card card-body">
                <p><span class="bold-text">Оператор: </span>Наша компания старается создать для клиентов наилучшие условия,
                    поэтому подготовила новую услугу «VIP Деливери». В случае заказа на сумму от 1000 рублей доставка осуществляется бесплатно
                    и без внесения предоплаты. Вас заинтересовало данное предложение, и Вы готовы сделать заказ?
                </p>
            </div>

            <ul class="list-group" id="list-group-2">
                <li class="list-group-item">
                    <a class="collapse-title-link" data-bs-toggle="collapse" href="#collapse-3" role="button" aria-expanded="false" aria-controls="collapse-3">
                        <span class="bold-text">КЛ: </span>Да
                    </a>
                    <div class="collapse" id="collapse-3" data-bs-parent="#collapse-2">
                        <div class="">
                            <button type="button" class="btn btn-primary">
                                <a class="endOfCall" href="./?r=<?= Yii::$app->layout?>/order">Оформление заказа</a>
                            </button>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a class="collapse-title-link" data-bs-toggle="collapse" href="#collapse-4" role="button" aria-expanded="false" aria-controls="collapse-4">
                        <span class="bold-text">КЛ: </span>Нет
                    </a>
                    <div class="collapse" id="collapse-4" data-bs-parent="#collapse-2">
                        <div class="card card-body">
                            <p><span class="bold-text">Оператор: </span>Если у Вас есть вопросы или сомнения,
                                то я помогу их разрешить или перенаправлю к нашим специалистам. Скажите, что мешает Вам сделать заказ прямо сейчас?
                            </p>
                        </div>

                        <ul class="list-group" id="list-group-3">
                            <li class="list-group-item">
                                <a class="collapse-title-link" data-bs-toggle="collapse" href="#collapse-5" role="button" aria-expanded="false" aria-controls="collapse-3">
                                    <span class="bold-text">КЛ: </span>Нет возражений, готов сделать заказ
                                </a>
                                <div class="collapse" id="collapse-5" data-bs-parent="#collapse-4">
                                    <div class="card card-body">
                                        <div>
                                            <button type="button" class="btn btn-primary">
                                                <a class="endOfCall" href="./?r=<?= Yii::$app->layout?>/order">Оформление заказа</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a class="collapse-title-link" data-bs-toggle="collapse" href="#collapse-6" role="button" aria-expanded="false" aria-controls="collapse-4">
                                    <span class="bold-text">КЛ: </span>Есть вопросы/сомнения
                                </a>
                                <div class="collapse" id="collapse-6" data-bs-parent="#collapse-4">
                                    <div class="card card-body">
                                        <p><span class="bold-text">Оператор: </span>Подскажите, что именно Вас беспокоит? Вы просто не нуждаетесь
                                            в данной услуге или Вас не устраивают условия?
                                        </p>
                                    </div>

                                    <ul class="list-group" id="list-group-3">
                                        <li class="list-group-item">
                                            <a class="collapse-title-link" data-bs-toggle="collapse" href="#collapse-7" role="button" aria-expanded="false" aria-controls="collapse-3">
                                                <span class="bold-text">КЛ: </span>Хочу задать вопрос специалисту
                                            </a>
                                            <div class="collapse" id="collapse-7" data-bs-parent="#collapse-6">
                                                <div class="card card-body">
                                                    <p><span class="bold-text">Оператор: </span>Могу предложить Вам оформить вопрос через нашу линию прямо сейчас
                                                        или перевести Вас на специалиста интернет-магазина. Какой вариант Вам больше подходит?
                                                    </p>
                                                </div>

                                                <ul class="list-group" id="list-group-3">
                                                    <li class="list-group-item">
                                                        <a class="collapse-title-link" data-bs-toggle="collapse" href="#collapse-10" role="button" aria-expanded="false" aria-controls="collapse-3">
                                                            <span class="bold-text">КЛ: </span>Оформить вопрос через ГЛ
                                                        </a>
                                                        <div class="collapse" id="collapse-10" data-bs-parent="#collapse-7">
                                                            <div class="card card-body">
                                                                <div>
                                                                    <button type="button" class="btn btn-primary">
                                                                        <a class="endOfCall" href="./?r=<?= Yii::$app->layout?>/non-standard-question">Зафиксировать обращение</a>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a class="collapse-title-link" data-bs-toggle="collapse" href="#collapse-11" role="button" aria-expanded="false" aria-controls="collapse-4">
                                                            <span class="bold-text">КЛ: </span>Перевод на специалиста
                                                        </a>
                                                        <div class="collapse" id="collapse-11" data-bs-parent="#collapse-7">
                                                            <div class="card card-body">
                                                                <div>
                                                                    <button type="button" class="btn btn-primary">
                                                                        <a class="endOfCall" href="./?r=<?= Yii::$app->layout?>/call-transfer">Перевод звонка</a>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <a class="collapse-title-link" data-bs-toggle="collapse" href="#collapse-8" role="button" aria-expanded="false" aria-controls="collapse-4">
                                                <span class="bold-text">КЛ: </span>Не устраивают условия
                                            </a>
                                            <div class="collapse" id="collapse-8" data-bs-parent="#collapse-6">
                                                <div class="card card-body">
                                                    <p><span class="bold-text">Оператор: </span>Позвольте рассказать подробнее о подходящей Вам услуге.
                                                        Подбираем услугу под нужен клиента.
                                                        Правильно ли я Вас понял(а), что Вас заинтересовало/для Вас актуально наше предложение?
                                                    </p>
                                                </div>

                                                <ul class="list-group" id="list-group-3">
                                                    <li class="list-group-item">
                                                        <a class="collapse-title-link" data-bs-toggle="collapse" href="#collapse-12" role="button" aria-expanded="false" aria-controls="collapse-3">
                                                            <span class="bold-text">КЛ: </span>Да
                                                        </a>
                                                        <div class="collapse" id="collapse-12" data-bs-parent="#collapse-8">
                                                            <div class="card card-body">
                                                                <div>
                                                                    <button type="button" class="btn btn-primary">
                                                                        <a class="endOfCall" href="./?r=<?= Yii::$app->layout?>/order">Оформление заказа</a>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a class="collapse-title-link" data-bs-toggle="collapse" href="#collapse-13" role="button" aria-expanded="false" aria-controls="collapse-4">
                                                            <span class="bold-text">КЛ: </span>Нет
                                                        </a>
                                                        <div class="collapse" id="collapse-13" data-bs-parent="#collapse-8">
                                                            <div class="card card-body">
                                                                <p><span class="bold-text">Оператор: </span>В таком случае спасибо за Ваш звонок. Если у Вас еще остались вопросы, я с радостью на них отвечу.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <a class="collapse-title-link" data-bs-toggle="collapse" href="#collapse-9" role="button" aria-expanded="false" aria-controls="collapse-4">
                                                <span class="bold-text">КЛ: </span>Не нуждаюсь в программе/Передумал(а)
                                            </a>
                                            <div class="collapse" id="collapse-9" data-bs-parent="#collapse-6">
                                                <div class="card card-body">
                                                    <p><span class="bold-text">Оператор: </span>В таком случае спасибо за Ваш звонок. Если у Вас еще остались вопросы,
                                                        я с радостью на них отвечу.
                                                    </p>
                                                    <div>
                                                        <button type="button" class="btn btn-primary">
                                                            <a class="endOfCall" href="./?r=<?= Yii::$app->layout?>/end-of-call">Завершение звонка</a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </li>
</ul>