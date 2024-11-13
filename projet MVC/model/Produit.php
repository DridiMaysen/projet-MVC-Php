<?php
require_once __DIR__.'/./DataBase.php';
class Produit {
    private $idProduit;
    private $nomProduit;
    private $descriptionProduit;
    private $idMarque;
    private $idCategorie;
    private $prixProduit;
    private $quantite;
    private $fileAffiche;
    public function getIdCategorie(){
        return $this->idCategorie;
    }
    public function getFileAffiche(){
        return $this->fileAffiche;
    }
    public function getIdProduit(){
        return $this->idProduit;
    }
    public function getNomProduit(){
        return $this->nomProduit;
    }
    public function getDescriptionProduit(){
        return $this->descriptionProduit;
    }
    public function getIdMarque(){
        return $this->idMarque;
    }
    public function getPrixProduit(){
        return $this->prixProduit;
    }
    public function getQuantite(){
        return $this->quantite;
    }
    public static function all(){
        $rq="select *from produit";
        return DataBase ::Query($rq,"Produit");
    }
    public static function create($tab){
        $rq="insert into produit (nomProduit,descriptionProduit,idMarque,idCategorie,prixProduit,quantite,fileAffiche) values (:nomProduit, :descriptionProduit, :idMarque, :idCategorie, :prixProduit, :quantite, :fileAffiche)";
        return DataBase::execute($rq,$tab);

    }
    public static function update($tab){
        $rq="update produit set nomProduit= :nomProduit,descriptionProduit= :descriptionProduit,idMarque= :idMarque,idCategorie= :idCategorie,prixProduit= :prixProduit,quantite= :quantite,fileAffiche= :fileAffiche where idProduit= :idProduit";
        return DataBase::execute($rq, $tab);
    }
    public static function find($id){
        $rq="select * from produit where idProduit= :idProduit";
        $tab['idProduit']=$id;
        return DataBase::Find($rq,'Produit',$tab);
    }
    public static function delete($id){
        $rq="delete from produit where idProduit= :idProduit";
        $tab['idProduit']=$id;
        return DataBase::execute($rq,$tab);
    }
    public static function searchDispo(){
        $rq="select * from produit where quantite >0";
        return DataBase::Query($rq,"Produit");
    }
    public static function searchProduitByMarque($idMarque){
        $rq="select * from produit where quantite >0 and produit.idMarque=:idMarque";
        $tab['idMarque']=$idMarque;
        return DataBase::Query($rq,"Produit",$tab);
    }
    public static function searchProduitByCategorie($idCategorie){
        $rq="select * from produit where quantite >0 and produit.idCategorie=:idCategorie";
        $tab['idCategorie']=$idCategorie;
        return DataBase::Query($rq,"Produit",$tab);
    }
}?>
