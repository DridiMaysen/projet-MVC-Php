<?php
require_once __DIR__.'/../model/Categorie.php';
class CategorieController{
    public static function index(){
        $categories = Categorie::all();
        require_once __DIR__.'/../View/categorie/index.php';

    }
    public static function create(){
        require_once __DIR__.'/../View/categorie/create.php';
    }
    public static function store(){
        if(!isset($_POST['nomCategorie'])){
            $_SESSION['error']="Champs non remplies!";
        }else{
            $r = Categorie::create($_POST);
                if($r){
                    $_SESSION['success']="Categorie crée avec succès";
                }else{
                    $_SESSION['error']="Erreur insertion Categorie";
                }
                   
                
            
        }
        header('Location: index.php?controller=Categorie&action=index');
       
    }
    public static function edit(){
        $categorie=Categorie::find($_GET['id']);
        require_once __DIR__.'/../View/categorie/edit.php';
    }
    public static function update(){
        if(!isset($_POST['nomCategorie'])){
            $_SESSION['error']="Champs non remplies!";
        }else{
            $r = Categorie::update($_POST);
            if($r){
                $_SESSION['success']="Categorie mis à jour avec succès";
            }else{
                $_SESSION['error']="Erreur mise à jour  Categorie";
            }
        }
        header('Location: index.php?controller=Categorie&action=index');
    }
    public static function destroy(){
        if(!isset($_GET['id'])){
            $_SESSION['error']="Categorie id nn envoyé!";
        }else{
            $r=Categorie::delete($_GET['id']);
            if($r){
                $_SESSION['success']="categorie supprimé avec succès";
            }else{
                $_SESSION['error']="Erreur suppression categorie";
            }
        }
        
        header('Location: index.php?controller=Categorie&action=index');
    }
}