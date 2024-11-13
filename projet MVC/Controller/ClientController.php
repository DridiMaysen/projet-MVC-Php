<?php
require_once __DIR__.'/../model/Client.php';
class ClientController{
    public static function index(){
        $clients = Client::all();
        require_once __DIR__.'/../View/client/index.php';

    }
    public static function create(){
        require_once __DIR__.'/../View/client/create.php';
    }

    public static function store(){
        if(!isset($_POST['nomClient'],$_POST['prenomClient'],$_POST['emailClient'],$_POST['addClient'],$_POST['teleClient'])){
            $_SESSION['error']="Champs non remplies!";
        }else{ 
            if(!isset($_SESSION['error'])){
                $r = Client::create($_POST);
                if($r){
                    $_SESSION['success']="client crée avec succès";
                }else{
                    $_SESSION['error']="Erreur insertion client";
                }
            }          
        }
        header('Location: index.php?controller=Client&action=index');
       
    }
    public static function edit(){
        $client=Client::Find($_GET['id']);
        require_once __DIR__.'/../View/client/edit.php';
    }
    public static function update(){
        if(!isset($_POST['nomClient'],$_POST['prenomClient'],$_POST['emailClient'],$_POST['addClient'],$_POST['teleClient'],$_POST['idClient'])){
            $_SESSION['error']="Champs non remplies!";
        }else{
            $r = Client::update($_POST);
            if($r){
                $_SESSION['success']="client mis à jour avec succès";
            }else{
                $_SESSION['error']="Erreur mise à jour  client";
            }
        }
        header ('Location: index.php?controller=Client&action=index');
    }
    public static function destroy(){
        if(!isset($_GET['id'])){
            $_SESSION['error']="Client id nn envoyé!";
        }else{
            $r=Client::delete($_GET['id']);
            if($r){
                $_SESSION['success']="Client supprimé avec succès";
            }else{
                $_SESSION['error']="Erreur suppression Client";
            }
        }
        
        header('Location: index.php?controller=Client&action=index');
    }}

?>