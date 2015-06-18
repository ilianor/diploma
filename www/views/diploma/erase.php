<?php
    define('HOST', 'localhost');
    define('USER', 'ilianor');
    define('PASS', '');
    define('DB', 'flats');

    mysql_connect(HOST, USER, PASS) or die('No connect to server');
    mysql_select_db(DB) or die('No connect to DB');
    mysql_query("SET NAMES 'UTF8'") or die('Cant set charset');
   

    $number_final_erase = $_POST['number'];
    $erase_req = "DELETE FROM flats WHERE flat_id= '$number_final_erase'";
    $erase = mysql_query($erase_req) or die(mysql_error());
    echo $number_final_erase;
?>