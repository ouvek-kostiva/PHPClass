<?php
require 'db.inc.php';

$state = "login";

if(!empty($_POST['state'])){
    $state = $_POST['state'];
}
$v="";
setcookie('linkStart', $v, time()+60*5);

if($_COOKIE['linkStart']==""){
    $state = 'login';
    echo 'nothing';
}
if($_COOKIE['linkStart']==2){
    $state = "show";
}

switch($state){
            case 'show':
                require 'show.php';
                break;
            case 'insert':
                require 'insert.php';
                break;
            case 'exec_insert':
                require 'exec_insert.php';
                break;
//            case 'update':
//                require 'update.php';
//                break;
//            case 'exec_update':
//                require 'exec_update.php';
//                break;
            case 'delete':
                require 'delete.php';
                break;
//            case 'exec_delete':
//                require 'exec_delete.php';
            case 'login':
                require 'login.php';
                break;
            case 'exec_login':
                require 'exec_login.php';
                break;
            default:
        }
?>
