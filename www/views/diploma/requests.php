 <?php 
 /*echo 'Thank you '.$_POST['type'].' '.$_POST['stage'].',says the php file!';*/
/* echo $_POST['input_class'].'  '.$_POST['input_type'].'  '.$_POST['input_adress'].'  '.$_POST['input_cost'].'  '.$_POST['input_phone'];*/
    

    define('HOST', 'localhost');
    define('USER', 'ilianor');
    define('PASS', '');
    define('DB', 'flats');

    mysql_connect(HOST, USER, PASS) or die('No connect to server');
    mysql_select_db(DB) or die('No connect to DB');
    mysql_query("SET NAMES 'UTF8'") or die('Cant set charset');

    

       $type = $_POST['type'];
       $classes = $_POST['classes'];
       $cost = $_POST['cost'];
    

       if ($cost == 0){
       	echo "Ведите максимальную цену!";
       }
       $query = "SELECT * FROM flats WHERE flat_type= '$type' AND flat_class= '$classes' 
       AND flat_price BETWEEN 0 AND '$cost' ORDER BY flat_id";
       $res = mysql_query($query) or die(mysql_error());
        while($row = mysql_fetch_assoc($res)){
       echo       '<div class="search-result-blocks"><p class="adress-to-search">'.$row['flat_adress'].'</p> ',
                  $row['flat_stage'].' ',
                  $row['flat_seller_phone'].' ',
                  $row['flat_type'].' ',
                  $row['flat_class'].' ',
                  $row['flat_price'].
                  '</div><br>'; 
   }

   ?>
