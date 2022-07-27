<?php

?>

<div class="accordion" id="accordion">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Какие документы необходимы для подачи заявки на карту/кредит
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
            <div class="accordion-body">
                <p>
                    <span class="bold-text">Оператор: </span>Паспорт (2-3 страница, постоянная регистрация) и фото клиента с паспортом
                </p>
                <p>Спасибо за Ваш звонок. Всего доброго! До свидания!</p>
                <button type="button" class="btn btn-primary">
                    <a class="endOfCall" href="./?r=<?= Yii::$app->layout?>/end-of-call">Завершение звонка</a>
                </button>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Высылается ли повторно, СМС с кодомВвели код с СМС неверно
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
            <div class="accordion-body">
                <p>
                    <span class="bold-text">Оператор: </span>К сожалению, повторно код не высылается. На ввод кода из СМС, дается три попытки. В случае ввода более 3-х раз некорректного кода, вам необходимо завести заявку заново.
                </p>
                <p>Спасибо за Ваш звонок. Всего доброго! До свидания!</p>
                <button type="button" class="btn btn-primary">
                    <a class="endOfCall" href="./?r=<?= Yii::$app->layout?>/end-of-call">Завершение звонка</a>
                </button>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                У КЛ не принимаются СМС, не работает телефон. Можно ли связаться с ним через IP-телефонию.
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
            <div class="accordion-body">
                <p>
                    <span class="bold-text">Оператор: </span>К сожалению, заявку на кредит/карту, можно подавать только на телефон, который принадлежит КЛ. В данном случае, могу посоветовать Вам, только переставить SIM-карту в другой телефон и ожидать звонка/смс сообщения.
                </p>
                <p>Спасибо за Ваш звонок. Всего доброго! До свидания!</p>
                <button type="button" class="btn btn-primary">
                    <a class="endOfCall" href="./?r=<?= Yii::$app->layout?>/end-of-call">Завершение звонка</a>
                </button>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Нет возможности подать заявку, так как в программе нет страны/города/улицы КЛ.
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
            <div class="accordion-body">
                <p>
                    <span class="bold-text">Оператор: </span>Можете указать страну/город/улицу, территориально близкую к данной, наш сотрудник внесет правки.
                </p>
                <p>Спасибо за Ваш звонок. Всего доброго! До свидания!</p>
                <button type="button" class="btn btn-primary">
                    <a class="endOfCall" href="./?r=<?= Yii::$app->layout?>/end-of-call">Завершение звонка</a>
                </button>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Вопросы по карте/кредиту (не связанные с ошибками, например графики погашения, максимальные суммы и т.д.)
            </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordion">
            <div class="accordion-body">
                <p>
                    <span class="bold-text">Оператор: </span>По данному вопросу, вам необходимо обратиться на горячую линию Банка, по номеру 8-800-250-0520
                </p>
                <p>Спасибо за Ваш звонок. Всего доброго! До свидания!</p>
                <button type="button" class="btn btn-primary">
                    <a class="endOfCall" href="./?r=<?= Yii::$app->layout?>/end-of-call">Завершение звонка</a>
                </button>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Что делать, если КЛ отказывается от кредита после того как были распечатаны документы (документы еще не были подписаны)?
            </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordion">
            <div class="accordion-body">
                <p>
                    <span class="bold-text">Оператор: </span>Необходимо поставить статус «отказ от подписания документов»
                </p>
                <p class="hint-text">
                    <span class="bold-text">Примечание: </span>после печати документов производится подписание документации клиентом. Сотрудник РТК не должен ставить отметку о подписании клиентом документов до тех пор, пока клиент фактически не поставит на них свою подпись. Только после этого сотрудник ТТ должен завершить оформление кредита в системе/проставить отметку о подписании документов.
                </p>
                <p>Спасибо за Ваш звонок. Всего доброго! До свидания!</p>
                <button type="button" class="btn btn-primary">
                    <a class="endOfCall" href="./?r=<?= Yii::$app->layout?>/end-of-call">Завершение звонка</a>
                </button>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                Вопросы по дебетовым картам (кроме отказов и ошибок автоматических)
            </button>
        </h2>
        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordion">
            <div class="accordion-body">
                <p>
                    <span class="bold-text">Оператор: </span>Необходимо обратиться на горячую линию банка по номеру 8-800-250-05-20
                </p>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingEight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                Звонок Клиента.
            </button>
        </h2>
        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordion">
            <div class="accordion-body">
                <p>Выслушиваем суть вопроса. </p>
                <p>
                    <span class="bold-text">Оператор: </span>Необходимо обратиться на горячую линию банка по номеру 8-800-250-05-20
                </p>
            </div>
        </div>
    </div>
</div>
