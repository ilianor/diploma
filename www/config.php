<?php 
    defined('DIPLOMA') or die ('Access denied');
    define('PATH', 'http://diploma/');
    define('MODEL', 'model/model.php');
    define('CONTROLLER', 'controller/controller.php');
    define('VIEW', 'views/');
    define('TEMPLATE', VIEW.'diploma/');
//БД
    define('HOST', 'localhost');
    define('USER', 'ilianor');
    define('PASS', '');
    define('DB', 'flats');

// Подключение к БД
    mysql_connect(HOST, USER, PASS) or die('No connect to server');
    mysql_select_db(DB) or die('No connect to DB');
    mysql_query("SET NAMES 'UTF8'") or die('Cant set charset');

    ?>