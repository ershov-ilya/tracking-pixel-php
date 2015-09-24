<?php
/**
 * Created by PhpStorm.
 * Author:   ershov-ilya
 * GitHub:   https://github.com/ershov-ilya/
 * About me: http://about.me/ershov.ilya (EN)
 * Website:  http://ershov.pw/ (RU)
 * Date: 24.09.2015
 * Time: 9:58
 */

if(isset($_GET['t'])) define('DEBUG', true);
defined('DEBUG') or define('DEBUG', false);

if(DEBUG){
    header("Content-type: text/plain");
//    print_r($_SERVER);
    die;
}

header("content-type: image/gif");
setcookie('test',rand(),0,'/');
print base64_decode("R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==");

//$s=date("Y-m-d H:i:s") . ": ". $_SERVER['REMOTE_ADDR'] . " : " .$_GET['id']. "\n";
//file_put_contents("my_track_file.txt", $s, FILE_APPEND);


