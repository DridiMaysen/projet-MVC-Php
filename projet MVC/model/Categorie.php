<?php 
require_once __DIR__.'/./DataBase.php';
class Categorie{
    private $idCategorie;
    private $nomCategorie;
    public function getIdCategorie(){
        return $this->idCategorie;
    }
    public function getNomCategorie(){
        return $this->nomCategorie;
    }
    public static function all(){
        $rq="select * from categorie";
        return DataBase::Query($rq,'Categorie');
    }
    public static function create($tab){
        $rq="insert into categorie (nomCategorie) values (:nomCategorie)";
        return DataBase::execute($rq,$tab);

    }
    public static function update($tab){
        $rq="update categorie set nomCategorie= :nomCategorie where idCategorie= :idCategorie";
        return DataBase::execute($rq, $tab);
    }
    public static function find($id){
        $rq="select * from categorie where idCategorie= :idCategorie";
        $tab['idCategorie']=$id;
        return DataBase::Find($rq,'Categorie',$tab);
    }
    public static function delete($id){
        $rq="delete from categorie where idCategorie= :idCategorie";
        $tab['idCategorie']=$id;
        return DataBase::execute($rq,$tab);
    }
}?>

