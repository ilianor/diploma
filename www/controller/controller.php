<?php 
    defined('DIPLOMA') or die ('Access denied');

    require_once MODEL;
    $get_page = pages();


    require_once TEMPLATE.'index.php';
    ?>