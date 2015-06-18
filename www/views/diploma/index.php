<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="<?=TEMPLATE?>css/style.css">
     <link rel="stylesheet" href="<?=TEMPLATE?>css/leaflet.css">
     <script type="text/javascript" src="<?=TEMPLATE?>js/jquery-1.11.2.min.js"></script>
     <script type="text/javascript" src="<?=TEMPLATE?>js/main.js"></script>
     <script type="text/javascript" src="<?=TEMPLATE?>js/leaflet.js"></script>
     <script src="<?=TEMPLATE?>js/src/js/l.control.geosearch.js"></script>
     <script src="<?=TEMPLATE?>js/src/js/l.geosearch.provider.google.js"></script>
     <link rel="stylesheet" href="<?=TEMPLATE?>js/src/css/l.geosearch.css" />
    <title>Map-service</title>
</head>
<body>
 <form class="insert-flat">
 <div class="insert-flat-head">Введите данные о помещении</div>
     <button class="button close-insert"><img class="close-image" src="<?=TEMPLATE?>img/close-button.png"></button>
     <div class="class-type-input">
     <select class="input-classes">
          <!--<option value="Все">Все</option>-->
          <option value="Комната">Комната</option>
          <option value="Однокомнатная">Однокомнатная</option>
          <option value="Двухкомнатная">Двухкомнатная</option>
          <option value="Трехкомнатная">Трехкомнатная</option>
          <option value="Четырехкомнатная">Четырехкомнатная</option>
       </select>
       <select class="input-type">
          <option value="Аренда">Аренда</option>
          <option value="Продажа">Продажа</option>
       </select></div>
     <div class="input-box input-adress">
     Внимание! Для правильного отображения адреса, перед подтверждением ввода данных, 
     пожалуйста, проверьте корректность их геоклокации на интерактивной карте!<br>
     <label>Введите адрес помещения</label><br>
     <input class="input-info" id="input-adress" type="text"><br>
     <button type="submit" class="button adress-check">Проверить!</button>
     </div>
     <div class="input-box">
     <label>Введите стоимость</label>
     <input class="input-info" id="input-cost" type="text">
     </div>
     <div class="input-box">
     <label>Введите этаж</label>
     <input class="input-info" id="input-stage" type="text">
     </div>
     <div class="input-box input-box-phone">
     <label>Введите свой номер телефона</label><br>
     <input class="input-info" id="input-phone" type="text">
     </div>
     <button class="button input-flat" type="submit">Разместить объявление</button>
     <div class="erase">
     <hr>
         <h4>Вы так же можете</h4>
         <button class="button open-erase-button">Удалить объявление</button>
     </div>
 </form>
 <div class="erase-block">
  <div class="erase-flat-head">Введите номер вашего объявления и номер вашего телефона</div>
     <button class="button close-erase"><img class="close-image" src="<?=TEMPLATE?>img/close-button.png"></button>
    <!--<label>Выберете параметр поиска</label>
    <select class="select classes">
          <option value="number">Номер объявления</option>
          <option value="adress">Адрес</option>
          <option value="phone">Телефон</option>
       </select>-->
       <div class="input-box">
       <label>Введите номер объявления</label>
       <input type="text" class="number-input"></div>
       <div class="input-box">
       <label>Введите номер телефона</label>
       <input type="text" class="phone-check"></div>
       <button class="button search-erase-button">Найти</button>
       <div class="search-erase-res"></div>
       <button class="button erase-button">Удалить</button>
       <button class="button redact-button">Редактировать</button>
 </div>
  <div class="main-header">
  <button class="button insert-flat-button"> Добавить объявлние</button>
  </div>
  <div class="main-info-block"> 
    <div class="search-block">
      <h5 class="search-head">Параметры поиска</h5> <br>
       <select class="select classes">
          <!--<option value="Все">Все</option>-->
          <option value="Комната">Комната</option>
          <option value="Однокомнатная">Однокомнатная</option>
          <option value="Двухкомнатная">Двухкомнатная</option>
          <option value="Трехкомнатная">Трехкомнатная</option>
          <option value="Четырехкомнатная">Четырехкомнатная</option>
       </select>
       <select class="select type">
          <option value="Аренда">Аренда</option>
          <option value="Продажа">Продажа</option>
       </select>
       <input type="text" class="cost">
      <button type="submit" class="button start-search-button">Найти!</button>
      </div>
      <div class="search-result">
          <?php if($get_page): ?>
          <?php foreach($get_page as $item):?>
                     <div class="search-result-blocks"><p class="adress-to-search"><?=$item['flat_adress']?></p>
                      <?=$item['flat_stage']?>
                      <?=$item['flat_seller_phone']?>
                      <?=$item['flat_type']?>
                      <?=$item['flat_class']?> 
                      <?=$item['flat_price']?></div>
                      <br>
           <?php endforeach;?>
           <?php else:?> 
           <p>Пусто</p>
           <?php endif;?>
          
      </div>
  </div>

  <div id="map"></div>
</body>
</html>