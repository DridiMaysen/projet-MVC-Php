<?php
require_once __DIR__.'/../model/panier.php';
class PanierController{

    public static function index(){
        $panier = Panier::all();
        require_once __DIR__.'/../View/panier/panier.php';
    }
    public static function destroy(){
        if(!isset($_GET['id'])){
            $_SESSION['error']="Produit id nn envoyé!";
        }else{
            $r=Panier::delete($_GET['id']);
            if($r){
                $_SESSION['success']="Produit supprimé avec succès";
            }else{
                $_SESSION['error']="Erreur suppression Produit";
            }
        }
        
        header('Location: index.php?controller=Panier&action=index');
    }
}
?>