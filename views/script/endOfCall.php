<?php
//echo __FILE__;
//echo '<br>';
//echo 'Страница завершения звонка';

?>

<p>
    <span class="bold-text">Оператор: </span>Могу еще чем-то Вам помочь? Благодарим Вас за обращение. Всего доброго!
</p>
<form method="post" action="">
    <div class="mb-3">
        <label for="inputCallStatus" class="form-label">Тематика обращения<span class="requiredArea">*</span></label>
        <select class="form-select" aria-label="" id="inputCallStatus" required name="inputCallStatus">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>

    <p>
        <span class="bold-text">Оператор: </span>Спасибо за звонок. Всего доброго, до свидания.
    </p>

    <p>
        <span class="bold-text">Оператор: </span>Вы позвонили на линию Newcontact. Проверьте, пожалуйста, корректность набора номера телефона.
    </p>
    <p class="hint-text">
        Если продолжают угрожать, баловаться или оскорблять:
    </p>
    <p>
        <span class="bold-text">Оператор: </span>Ваш звонок расценен как хулиганский. Я буду вынуждена прервать разговор и сообщить в правоохранительные органы,
        если Вы не перейдете к конструктивному разговору.
    </p>

    <p>
        <span class="bold-text">Оператор: </span>Вы позвонили на линию Newcontact. Проверьте, пожалуйста, корректность набора номера телефона.<br>
        Спасибо за звонок. Всего доброго, до свидания.
    </p>

    <button type="submit" class="btn btn-primary">Завершить звонок</button>
</form>

