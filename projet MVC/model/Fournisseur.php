<?php
require_once __DIR__.'/./DataBase.php';
class Fournisseur{
    private $idFournisseur;
    private $nomFournisseur;
    private $prenomFournisseur;
    private $emailFournisseur;
    private $teleFournisseur;
    public function getIdFournisseur(){
        return $this->idFournisseur;
    }
    public function getNomFournisseur(){
        return $this->nomFournisseur;
    }
    public function getPrenomFournisseur(){
        return $this->prenomFournisseur;
    }
    public function getEmailFournisseur(){
        return $this->emailFournisseur;
    }
    public function getTeleFournisseur(){
        return $this->teleFournisseur;
    }
    public static function all(){
        $rq="select * from fournisseur";
        return DataBase ::Query($rq,'Fournisseur');
    }
    public static function create($tab){
        $rq="insert into fournisseur (nomFournisseur,prenomFournisseur,emailFournisseur,teleFournisseur) values (:nomFournisseur,:prenomFournisseur,:emailFournisseur,:teleFournisseur)";
        return DataBase::execute($rq,$tab);

    }
    public static function update($tab){
        $rq="update fournisseur set nomFournisseur= :nomFournisseur,prenomFournisseur= :prenomFournisseur,emailFournisseur= :emailFournisseur,teleFournisseur= :teleFournisseur where idFournisseur=:idFournisseur";
        return DataBase::execute($rq, $tab);
    }
    public static function find($id){
        $rq="select * from fournisseur where idFournisseur= :idFournisseur";
        $tab['idFournisseur']=$id;
        return DataBase::Find($rq,'Fournisseur',$tab);
    }
    public static function delete($id){
        $rq="delete from fournisseur where idFournisseur=:idFournisseur";
        $tab['idFournisseur']=$id;
        return DataBase::execute($rq,$tab);
    }
}