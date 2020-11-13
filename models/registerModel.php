<?php require ('connection.php');

class registerModel
{

    public static function doRegister($postData){
        // do register on db
        $name = $postData['name'];
        $email = $postData['email'];
        $pass = md5($postData['pass']);


        $insert = connection::connect()->prepare('INSERT INTO users (name,email,pass) VALUES (?,?,?)'); 
        if($insert->execute([$name,$email,$pass])){
            return true;
        };

        return false;

    
    }
    
}
