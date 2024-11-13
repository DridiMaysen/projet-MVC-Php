<?php
class DataBase{
    private static $connex;
    private static function init(){
        self::$connex= new PDO ('mysql:host=localhost;dbname=paranet',"root","");
        return self::$connex;
    }
    public static function getConnex(){
        if (self::$connex==null){
            Self ::init();
        }
        return self::$connex;
    }
    public static function Execute($rq,$tab){
        $stmt=self::getConnex()->prepare($rq);
        return $stmt->execute ($tab);
    }
    public static function Query($rq,$class,$tab=[]){
        $stmt=self::getConnex()->prepare($rq);
        $r=$stmt->execute($tab);
        return $stmt->Fetchall(PDO::FETCH_CLASS,$class);
    }
       
     public static function Find($rq,$class,$tab=[]){
        $stmt=self::getConnex()->prepare($rq);
        $r=$stmt->execute ($tab);
        $stmt->setFetchMode(PDO::FETCH_CLASS,$class);
        return $stmt->fetch();
    }
}?>