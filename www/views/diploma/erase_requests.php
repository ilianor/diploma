<?php 
    define('HOST', 'localhost');
    define('USER', 'ilianor');
    define('PASS', '');
    define('DB', 'flats');

    mysql_connect(HOST, USER, PASS) or die('No connect to server');
    mysql_select_db(DB) or die('No connect to DB');
    mysql_query("SET NAMES 'UTF8'") or die('Cant set charset');

    $number = $_POST['number'];
    $erase_search = "SELECT * FROM flats WHERE flat_id= '$number'";
     $erase_res = mysql_query($erase_search) or die(mysql_error());
        while($row = mysql_fetch_assoc($erase_res)){
       echo       '<div class="search-result-blocks">'
                 .$row['flat_id'].' ',
                  $row['flat_adress'].' ',
                  $row['flat_stage'].' ',
                  $row['flat_seller_phone'].' ',
                  $row['flat_type'].' ',
                  $row['flat_class'].' ',
                  $row['flat_price'].' ',
                  $row['flat_date'].
                  '</div><br>'; 
   }
?>