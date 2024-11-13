<?php
session_start();
require_once __DIR__.'/Controller/ClientController.php';
if(isset($_GET['action'])){
    $action= $_GET['action'];
    
    
}else{
    $action='index';
}
if(isset($_GET['controller'])){
    $controller=$_GET['controller'].'Controller';
    
    
}else{
    $controller='HomeController';
}
require_once __DIR__.'/Controller/'.$controller.'.php';
$controller::$action();

?>