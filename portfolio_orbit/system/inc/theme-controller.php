<?php

function getThemes(){
    $value=($_SERVER['DOCUMENT_ROOT'] . '/portfolio_orbit/assets/themes/');
   $obj=  scandir($value);
   for ($i=2;$i<count($obj);$i++){
       echo '<a class="theme-class" href="'.$value.$obj[$i].'">'.$obj[$i].'</a></br>';
   }
}




?>