<?php

    define('HOST', 'localhost');
    define('USER', 'ilianor');
    define('PASS', '');
    define('DB', 'flats');

    mysql_connect(HOST, USER, PASS) or die('No connect to server');
    mysql_select_db(DB) or die('No connect to DB');
    mysql_query("SET NAMES 'UTF8'") or die('Cant set charset');


      $input_type = $_POST['input_type'];
      $input_class = $_POST['input_class'];
      $input_adress =$_POST['input_adress'];
      $input_cost = $_POST['input_cost'];
      $input_phone = $_POST['input_phone'];
      $input_stage = $_POST['input_stage'];
      $current_date = date("m.d.y");

      $input_query = "INSERT INTO 
                      flats (flat_adress, flat_stage, flat_seller_phone, flat_type, flat_class, flat_price)
                      VALUES ('$input_adress', '$input_stage', '$input_phone', '$input_type', '$input_class', '$input_cost')";
      $insert_res = mysql_query($input_query) or die (mysql_error()); 


      $input_query_res = "SELECT flat_id FROM flats WHERE flat_adress= '$input_adress'";  
      $input_query_res_res = mysql_query($input_query_res) or die (mysql_error());            
while ($res_row = mysql_fetch_assoc($input_query_res_res)){
	echo $res_row['flat_id'];
} 
?>