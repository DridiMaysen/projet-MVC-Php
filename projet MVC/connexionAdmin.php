<?php
require_once "admin.php";
if (isset($_POST['login'],$_POST['password'])){
    if (Admin::connectUser($_POST['login'],$_POST['password'])){
        session_start();
        $_SESSION['utilisateur']=$_POST;
        header('Location: index.php?controller=Produit&action=index');
    }
    else echo "oops login ou mot de passe erroné";
}
?>