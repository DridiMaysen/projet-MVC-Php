<?php
    class SessionClient {
        //userSession
        public static function CreateSessionForUser ($user,$email) {
            if (!isset($_SESSION)) 
                session_start(); 

            $_SESSION["Client"]["idClient"] = $user;
            $_SESSION["Client"]["emailClient"] = $email;
            
        }

        public static function UserIsLoggedIn () {
            if (!isset($_SESSION))
                session_start(); 

            return isset($_SESSION["Client"]);
        }

        public static function DeleteSession () {
            if (!isset($_SESSION)) 
                session_start(); 
                session_destroy(); 
        }


    }
?>