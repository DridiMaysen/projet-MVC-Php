<?php
require_once __DIR__.'/../model/Produit.php';
require_once __DIR__.'/../model/Marque.php';
require_once __DIR__.'/../model/Categorie.php';
require_once __DIR__.'/../model/UploadFile.php';
class ProduitController{

    public static function index(){
        $produits = Produit::all();
        require_once __DIR__.'/../View/produit/index.php';
    }
    public static function create(){
        $marques = Marque::all();
        $categories= Categorie::all();
        require_once __DIR__.'/../View/produit/create.php';
    }
    public static function store(){
        if(!isset($_POST['nomProduit'],$_POST['descriptionProduit'])){
            $_SESSION['error']="Champs non remplies!";
        }else{
            //dossier la ou on veut enregistrer
            $target_dir = __DIR__."/../public/img/";
            //nom du fichier uploadé
            $target_file_name =  UploadFile::upload("fileAffiche",$target_dir);
            if(!isset($_SESSION['error'])){
                $_POST['fileAffiche']=$target_file_name;
                $r = Produit::create($_POST);
                if($r){
                    $_SESSION['success']="Produit crée avec succès";
                }else{
                    $_SESSION['error']="Erreur insertion Produit";
                }
            }          
                
            
        }
        header('Location: index.php?controller=Produit&action=index');
       
    }
    public static function edit(){
        $produit=Produit::find($_GET['id']);
        $marques = Marque::all();
        $categorie = Categorie::all();
        require_once __DIR__.'/../View/produit/edit.php';
    }
    public static function update(){
        if(!isset($_POST['nomProduit'],$_POST['descriptionProduit'])){
            $_SESSION['error']="Champs non remplies!";
        }else{
            $r = Produit::update($_POST);
            if($r){
                $_SESSION['success']="Produit mis à jour avec succès";
            }else{
                $_SESSION['error']="Erreur mise à jour  Produit";
            }
        }
        header('Location: index.php?controller=Produit&action=index');
    }
    public static function destroy(){
        if(!isset($_GET['id'])){
            $_SESSION['error']="Produit id nn envoyé!";
        }else{
            $r=Produit::delete($_GET['id']);
            if($r){
                $_SESSION['success']="Produit supprimé avec succès";
            }else{
                $_SESSION['error']="Erreur suppression Produit";
            }
        }
        
        header('Location: index.php?controller=Produit&action=index');
    }
}
?>