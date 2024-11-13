<?php
require_once __DIR__.'/./DataBase.php';
class Panier{
    private $id;
    private $nomProduit;
    private $prixProduit;
    private $image;
   
    public  function getId(){
        return $this->id;
    }
    public  function getNomProduit(){
        return $this->nomProduit;
    }
    public  function getPrixProduit(){
        return $this->prixProduit;
    }
    public  function getImage(){
        return $this->image;
    }
    
    public static function all(){
        $rq="select * from panier";
        return DataBase ::Query($rq,'Panier');
    }
    public static function create($tab){
        $rq="insert into panier (nomProduit ,prixProduit ,image) values (:nomProduit, :prixProduit, :image)";
        return DataBase::Execute($rq,$tab);

    }
    public static function delete($id){
        $rq="delete from panier where id= :id";
        $tab['id']=$id;
        return DataBase::Execute($rq,$tab);
    }
}?>