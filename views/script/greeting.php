<?php
//echo __FILE__;
//echo '<br>';
//echo 'Страница приветствия';

?>

<p><span class="bold-text">Оператор: </span>Здравствуйте! Информационно-справочная служба ХХХ, оператор <span class="bold-text">%имя оператора%</span>.</p>
<p><span class="bold-text">Оператор: </span>Как я могу к Вам обращаться?</p>

<form>
    <div class="mb-3">
        <label for="inputClientName" class="form-label">Имя абонента</label>
        <input type="text" class="form-control" id="inputClientName" aria-describedby="clientName" required>
<!--        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
    </div>
    <div class="mb-3">
        <label for="inputClientType" class="form-label">Тип абонента</label>
        <select class="form-select" aria-label="Default select example" id="inputClientType" required>
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="inputOtherClientType" class="form-label">Тип абонента (другое)</label>
        <input type="text" class="form-control" id="inputOtherClientType" aria-describedby="inputOtherClientType">
    </div>

    <p>
        <span class="bold-text">Оператор: </span>Из какого города Вы звоните?
    </p>
    <div class="mb-3">
        <label for="inputCity" class="form-label">Город</label>
        <input type="text" class="form-control" id="inputCity" aria-describedby="inputCity" required>
    </div>
    <div class="mb-3">
        <label for="inputOtherCity" class="form-label">Город (другое)</label>
        <input type="text" class="form-control" id="inputOtherCity" aria-describedby="inputOtherCity">
    </div>

    <p>
        <span class="bold-text">Оператор: </span>Чем я могу Вам помочь?
    </p>
    <div class="mb-3">
        <label for="inputSubjectOfAppeal" class="form-label">Тематика обращения</label>
        <input type="text" class="form-control" id="inputSubjectOfAppeal" aria-describedby="inputSubjectOfAppeal" required>
    </div>
    <div class="mb-3">
        <label for="inputSubjectOfAppealOther" class="form-label">Тематика обращения (другое)</label>
        <input type="text" class="form-control" id="inputSubjectOfAppealOther" aria-describedby="inputSubjectOfAppealOther">
    </div>
    <button type="submit" class="btn btn-primary">
        <a class="sendFormBtn" href="./?r=<?= Yii::$app->layout?>/faq">Продолжить</a>
    </button>
</form>
<br>
<br>
<br>
<button type="button" class="btn btn-danger">
    <a class="outsideCallBtn" href="./?r=<?= Yii::$app->layout?>/end-of-call">Посторонний звонок</a>
</button>