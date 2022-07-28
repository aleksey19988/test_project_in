<?php
//echo __FILE__;
//echo '<br>';
//echo 'Нестандартный вопрос';

?>

<form method="post" action="">
    <div class="mb-3">
        <label for="inputSubjectOfAppeal" class="form-label">Тематика обращения<span class="requiredArea">*</span></label>
        <select class="form-select" aria-label="" id="inputSubjectOfAppeal" required name="inputSubjectOfAppeal">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="inputMiddleName" class="form-label">Фамилия</label>
        <input type="text" class="form-control" id="inputMiddleName" aria-describedby="middleName" name="inputMiddleName">
    </div>
    <div class="mb-3">
        <label for="inputName" class="form-label">Имя<span class="requiredArea">*</span></label>
        <input type="text" class="form-control" id="inputName" required name="inputName">
    </div>
    <div class="mb-3">
        <label for="inputLastName" class="form-label">Отчество</label>
        <input type="text" class="form-control" id="inputLastName" name="inputLastName">
    </div>
    <div class="mb-3">
        <label for="inputCity" class="form-label">Город<span class="requiredArea">*</span></label>
        <input type="text" class="form-control" id="inputCity" aria-describedby="inputCity" required name="inputCity">
    </div>
    <div class="mb-3">
        <label for="inputOtherCity" class="form-label">Город (другое)</label>
        <input type="text" class="form-control" id="inputOtherCity" aria-describedby="inputOtherCity" name="inputOtherCity">
    </div>
    <div class="mb-3">
        <label for="inputPhoneNum" class="form-label">Контактный телефон<span class="requiredArea">*</span></label>
        <input type="tel" class="form-control" id="inputPhoneNum" aria-describedby="inputPhoneNum" required pattern="8[0-9]{10}" value="8" name="inputPhoneNum">
    </div>
    <div class="mb-3">
        <label for="inputEmail" class="form-label">Email<span class="requiredArea">*</span></label>
        <input type="email" class="form-control" id="inputEmail" aria-describedby="inputEmail" required pattern="^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$" name="inputEmail">
    </div>
    <div class="form-group">
        <label for="inputEssenceOfAppeal">Суть обращения</label>
        <textarea class="form-control" id="inputEssenceOfAppeal" rows="3" name="inputEssenceOfAppeal"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
</form>
