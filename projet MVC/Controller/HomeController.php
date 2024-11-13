<?php 
require_once __DIR__.'/../model/Produit.php';
require_once __DIR__.'/../model/Marque.php';
require_once __DIR__.'/../model/Categorie.php';
require_once __DIR__.'/../model/panier.php';
require_once __DIR__ . '/../model/SessionClient.php';
class HomeController{
    public static function index(){
        $marques=Marque::all();
        $categories=Categorie::all();
        if (isset($_GET['id_marque'])){
            $produits = Produit::searchProduitByMarque($_GET['id_marque']);

        }else {
            $produits = Produit::searchDispo();
        }
        if (isset($_GET['id_cat'])){
            $produits = Produit::searchProduitByCategorie($_GET['id_cat']);
        }
        require_once __DIR__.'/../View/client1/index.php';
    }
    public static function afficherDetail(){
        $marques=Marque::all();
        $categories=Categorie::all();
        $produit=Produit::find($_GET['id']);
        require_once __DIR__.'/../View/client1/afficherDetail.php';
    }
    public static function ajouterAuPanier(){
        $paniers=Panier::create($_POST);
        $marques=Marque::all();
        $categories=Categorie::all();
        if (isset($_GET['id_marque'])){
            $produits = Produit::searchProduitByMarque($_GET['id_marque']);

        }else {
            $produits = Produit::searchDispo();
        }
        if (isset($_GET['id_cat'])){
            $produits = Produit::searchProduitByCategorie($_GET['id_cat']);
        }
        require_once __DIR__.'/../View/client1/index.php';
    }
    public static function New(){
        require_once __DIR__ . '/../View/client/inscription.php';
    }
    public static function login(){
        require_once __DIR__ . '/../View/client/connexion.php';
    }
    public static function save(){
        if ($_POST){
            SessionClient::CreateSessionForUser($_POST['idClient'],$_POST['emailClient']);
            header('Location: index.php?controller=Home&action=index');
        }

    }
    public static function Disconnect(){    
        SessionClient::DeleteSession();
        header('Location: index.php?controller=Home&action=index');
    }
   
}
?>