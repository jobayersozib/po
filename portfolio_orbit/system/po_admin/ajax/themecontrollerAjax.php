<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function themeLoad($dir,$theme_name){
    $var =  scandir($dir);
    echo $theme_name."is activated</br>";
    for ($i=2;$i<count($var);$i++){
        
        if($var[$i]==="index.php"){
        $my_file1 =$dir.'/'.$var[$i];
        $handle1 = fopen($my_file1, 'r');
        $data = fread($handle1,filesize($my_file1));
        $my_file = $_SERVER['DOCUMENT_ROOT'].'/portfolio_orbit/index.php';
        $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
        fwrite($handle, $data);
        }
    }
}
themeLoad($_POST['dir'],$_POST['theme-name']);
