<?php 
class Admin {
    public static function connectUser($login,$password){
        $connex=new PDO("mysql:host=localhost;dbname=paranet","root","");
        $rq="select * from admin where login=:login and password= :password";
        $stmt=$connex->prepare($rq);
        $r=$stmt->execute(array("login"=>$login,"password"=>$password));
        return $r ;
    }
}
?>