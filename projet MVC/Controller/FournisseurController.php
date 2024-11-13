<?php
require_once __DIR__.'/../Model/Fournisseur.php';
class FournisseurController{

    public static function index(){
        $fournisseur = Fournisseur::all();
        require_once __DIR__.'/../View/fournisseur/index.php';

    }
    public static function create(){
        $fournisseur = Fournisseur::all();
        require_once __DIR__.'/../View/fournisseur/create.php';
    }
    public static function store(){
        if(!isset($_POST['nomFournisseur'],$_POST['prenomFournisseur'],$_POST['emailFournisseur'],$_POST['teleFournisseur'])){
            $_SESSION['error']="Champs non remplies!";
        }else{
                $r = Fournisseur::create($_POST);
                if($r){
                    $_SESSION['success']="Fournisseur crée avec succès";
                }else{
                    $_SESSION['error']="Erreur insertion Fournisseur";
                }
            }          
                
            
        header('Location: index.php?controller=Fournisseur&action=index');
       
    }
    public static function edit(){
        $fournisseur=Fournisseur::find($_GET['id']);
        require_once __DIR__.'/../View/fournisseur/edit.php';
    }
    public static function update(){
        if(!isset($_POST['nomFournisseur'],$_POST['prenomFournisseur'],$_POST['emailFournisseur'],$_POST['teleFournisseur'])){
            $_SESSION['error']="Champs non remplies!";
        }else{
            $r = Fournisseur::update($_POST);
            if($r){
                $_SESSION['success']="Fournisseur mis à jour avec succès";
            }else{
                $_SESSION['error']="Erreur mise à jour  Fournisseur";
            }
        }
        header('Location: index.php?controller=Fournisseur&action=index');
    }
    public static function destroy(){
        if(!isset($_GET['id'])){
            $_SESSION['error']="Fournisseur id nn envoyé!";
        }else{
            $r=Fournisseur::delete($_GET['id']);
            if($r){
                $_SESSION['success']="Fournisseur supprimé avec succès";
            }else{
                $_SESSION['error']="Erreur suppression Fournisseur";
            }
        }
        
        header('Location: index.php?controller=Fournisseur&action=index');
    }
}
?>