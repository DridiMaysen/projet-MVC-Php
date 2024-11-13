<?php
require_once __DIR__.'/./DataBase.php';
class Commande {
    private $id;
    private $nomClient;
    private $prenomClient;
    private $addEmail;
    private $addresse;
    private $ville;
    private $mode;
    private $numero;
    private $total;
    public function getId(){
        return $this->id;
    }
    public function getNomClient(){
        return $this->nomClient;
    }
    public function getPrenomClient(){
        return $this->prenomClient;
    }
    public function getAddEmail(){
        return $this->addEmail;
    }
    public function getAddresse(){
        return $this->addresse;
    }
    public function getVille(){
        return $this->ville;
    }
    public function getMode(){
        return $this->mode;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getTotal(){
        return $this->total;
    }
    public static function all(){
        $rq="select *from commande";
        return DataBase ::Query($rq,"Commande");
    }
    public static function create($tab){
        $rq="insert into Commande (nomClient,prenomClient,addEmail,addresse,ville,mode,numero,total) values (:nomClient,:prenomClient,:addEmail,:addresse,:ville,:mode,:numero,:total)";
        return DataBase::execute($rq,$tab);

    }
}?>
