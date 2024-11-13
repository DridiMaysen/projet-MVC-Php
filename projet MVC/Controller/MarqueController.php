<?php
require_once __DIR__.'/../Model/Marque.php';
class MarqueController{
    public static function index(){
        $marques = Marque::all();
        require_once __DIR__.'/../View/marque/index.php';

    }
    public static function create(){
        require_once __DIR__.'/../View/marque/create.php';
    }
    public static function store(){
        if(!isset($_POST['nomMarque'])){
            $_SESSION['error']="Champs non remplies!";
        }else{
            $r = Marque::create($_POST);
                if($r){
                    $_SESSION['success']="Marque crée avec succès";
                }else{
                    $_SESSION['error']="Erreur insertion Marque";
                }
                   
                
            
        }
        header('Location: index.php?controller=Marque&action=index');
       
    }
    public static function edit(){
        $marque=Marque::find($_GET['id']);
        require_once __DIR__.'/../View/marque/edit.php';
    }
    public static function update(){
        if(!isset($_POST['nomMarque'])){
            $_SESSION['error']="Champs non remplies!";
        }else{
            $r = Marque::update($_POST);
            if($r){
                $_SESSION['success']="Marque mis à jour avec succès";
            }else{
                $_SESSION['error']="Erreur mise à jour  Marque";
            }
        }
        header('Location: index.php?controller=Marque&action=index');
    }
    public static function destroy(){
        if(!isset($_GET['id'])){
            $_SESSION['error']="Marque id nn envoyé!";
        }else{
            $r=Marque::delete($_GET['id']);
            if($r){
                $_SESSION['success']="marque supprimé avec succès";
            }else{
                $_SESSION['error']="Erreur suppression marque";
            }
        }
        
        header('Location: index.php?controller=Marque&action=index');
    }
}