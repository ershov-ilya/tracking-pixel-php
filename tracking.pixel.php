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

header("content-type: image/gif");
setcookie('test',rand(),0,'/');

//$s=date("Y-m-d H:i:s") . ": ". $_SERVER['REMOTE_ADDR'] . " : " .$_GET['id']. "\n";
//file_put_contents("my_track_file.txt", $s, FILE_APPEND);


die(base64_decode("R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="));
