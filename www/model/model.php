<?php 
  /*  defined('DIPLOMA') or die ('Access denied');

    function catalog(){

        $query = "SELECT * FROM flats";
        $res = mysql_query($query) or die(mysql_error());
        $cat = array();
        $cat = mysql_fetch_assoc($res);
           while($row = mysql_fetch_array($res)) {
            echo '<table class="search-result-blocks">
                <tr>
                  <td class="search-result-blocks id">'.$row['flat_id'].'</td>
                  <td class="search-result-blocks adress">'.$row['flat_adress'].'</td>
                  <td class="search-result-blocks stage>'.$row['flat_stage'].'</td>
                  <td class="search-result-blocks seller-phone>'.$row['flat_seller_phone'].'</td>
                  <td class="search-result-blocks>'.$row['flat_type'].'</td>
                  <td class="search-result-blocks flat-class>'.$row['flat_class'].'</td>
                  <td class="search-result-blocks price>'.$row['flat_price'].'</td>
                  <td class="search-result-blocks date>'.$row['flat_date'].'</td>
                </tr>

                  </table>';
           }

    } */
    function pages(){
       $query = "SELECT * FROM flats ORDER BY flat_id";
       $res = mysql_query($query) or die(mysql_error());

       $pages = array();
        while($row = mysql_fetch_assoc($res)){
          $pages[] = $row;
           }
         return $pages;
    }
    
       /*$type = $_POST['type'];
       $query = "SELECT * FROM flats WHERE flat_type= '$type' ORDER BY flat_id";
       $res = mysql_query($query) or die(mysql_error());
        while($row = mysql_fetch_assoc($res)){
       echo '<table>
                <tr>
                  <td>'.$row['flat_adress'].'</td>
                  <td>'.$row['flat_stage'].'</td>
                  <td>'.$row['flat_seller_phone'].'</td>
                  <td>'.$row['flat_type'].'</td>
                  <td>'.$row['flat_class'].'</td>
                  <td>'.$row['flat_price'].'</td>
                  </tr>

                  </table>';
   }*/
    ?>