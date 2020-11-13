<?php require 'connection.php';


class loginModel {

    public static function doLogin($postData){

        $email = $postData['email'];
        $pass = md5($postData['pass']);

        $login = connection::connect()->prepare('SELECT name,email from users WHERE email = \''.$email.'\' AND pass = \''.$pass.'\''); 
        $login->execute();
        return $login->fetchAll();

    }
    

}