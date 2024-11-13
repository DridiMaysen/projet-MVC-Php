<?php 
require_once __DIR__.'/./DataBase.php';
class Marque{
    private $idMarque;
    private $nomMarque;
    public function getIdMarque(){
        return $this->idMarque;
    }
    public function getNomMarque(){
        return $this->nomMarque;
    }
    public static function all(){
        $rq="select * from marque";
        return DataBase ::Query($rq,'Marque');
    }
    public static function create($tab){
        $rq="insert into marque (nomMarque) values (:nomMarque)";
        return DataBase::execute($rq,$tab);

    }
    public static function update($tab){
        $rq="update marque set nomMarque= :nomMarque where idMarque= :idMarque";
        return DataBase::execute($rq, $tab);
    }
    public static function find($id){
        $rq="select * from marque where idMarque= :idMarque";
        $tab['idMarque']=$id;
        return DataBase::Find($rq,'Marque',$tab);
    }
    public static function delete($id){
        $rq="delete from marque where idMarque= :idMarque";
        $tab['idMarque']=$id;
        return DataBase::execute($rq,$tab);
    }
}?>

