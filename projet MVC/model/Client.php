<?php
require_once __DIR__.'/./DataBase.php';
class Client{

    private $idClient;
    private $nomClient;
    private $prenomClient;
    private $emailClient;
    private $addClient;
    private $teleClient;

    public function getIdClient(){
        return $this->idClient;
    }
    public function getNomClient(){
        return $this->nomClient;
    }
    public function getPrenomClient(){
        return $this->prenomClient;
    }
    public function getEmailClient(){
        return $this->emailClient;
    }
    public function getAddClient(){
        return $this->addClient;
    }
    public function getTeleClient(){
        return $this->teleClient;
    }
    public static function all(){
        $rq="select * from client";
        return DataBase ::Query($rq,'Client');
    }
    public static function create($tab){
        $rq="insert into client (nomClient,prenomClient,emailClient,addClient,teleClient) values (:nomClient,:prenomClient,:emailClient,:addClient,:teleClient)";
        return DataBase::Execute($rq,$tab);

    }
    public static function update($tab){
        $rq = "update client set 
         nomClient= :nomClient,
          prenomClient= :prenomClient,
           emailClient= :emailClient,
            addClient= :addClient, 
            teleClient= :teleClient 
            where idClient= :idClient";
        return DataBase::Execute($rq, $tab);
    
    }
    public static function find($id){
        $rq="select * from client where idClient= :idClient";
        $tab['idClient']=$id;
        return DataBase::Find($rq,'Client',$tab);
    }
    public static function delete($id){
        $rq="delete from client where idClient= :idClient";
        $tab['idClient']=$id;
        return DataBase::Execute($rq,$tab);
    }
}?>