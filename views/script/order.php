<?php
//echo __FILE__;
//echo '<br>';
//echo 'Страница оформления заказа';

?>

<form method="post" action="">
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
        <label for="inputStreet" class="form-label">Улица</label>
        <input type="text" class="form-control" id="inputStreet" aria-describedby="inputStreet" name="inputStreet">
    </div>
    <div class="mb-3">
        <label for="inputHouse" class="form-label">Дом</label>
        <input type="text" class="form-control" id="inputHouse" aria-describedby="inputHouse" name="inputHouse">
    </div>
    <div class="mb-3">
        <label for="inputApartment" class="form-label">Квартира</label>
        <input type="text" class="form-control" id="inputApartment" aria-describedby="inputApartment" name="inputApartment">
    </div>
    <div class="mb-3">
        <label for="inputPhoneNum" class="form-label">Контактный телефон<span class="requiredArea">*</span></label>
        <input type="tel" class="form-control" id="inputPhoneNum" aria-describedby="inputPhoneNum" required pattern="8[0-9]{10}" value="8" name="inputPhoneNum">
    </div>
    <div class="mb-3">
        <label for="inputEmail" class="form-label">Email<span class="requiredArea">*</span></label>
        <input type="email" class="form-control" id="inputEmail" aria-describedby="inputEmail" required pattern="^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$" name="inputEmail">
    </div>
    <div class="mb-3">
        <label for="inputProductName" class="form-label">Наименование товара (артикул)<span class="requiredArea">*</span></label>
        <input type="text" class="form-control" id="inputProductName" aria-describedby="inputProductName" required pattern="[0-9]{6}" name="inputProductName">
    </div>
    <div class="form-group">
        <label for="commentTextarea">Комментарий к заявке</label>
        <textarea class="form-control" id="commentTextarea" rows="3" name="commentTextarea"></textarea>
    </div>
  <button type="submit" class="btn btn-primary">Сохранить</button>
</form>