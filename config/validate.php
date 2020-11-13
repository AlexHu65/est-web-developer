<?php

class validate 
{
    public function doValidation($postData){

        $error = ['email' => '' , 'name' => '' , 'pass' => ''];
        $count = 0;
        
        $password = $postData['pass'];

        // validate al password
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);

        if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
        // tell the user something went wrong
            $error['pass'] = 'Invalid pass, you need 1 at least one uppercase characters, 1 lowercase character an 1 number and 8 characters length';
            $count++;            
        }

        // validate email
        $email = $postData['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {    
            $error['email'] = 'Invalid email direction';         
            $count++;
        }

        // validate name
        $name = $postData['name'];   
        
        if(!preg_match("/^([a-zA-Z' ]+)$/",$name)){
            $count++;
            $error['name'] = 'Invalid name given';
        }     
        
        
        
        if($count > 0){
            // we have errors
            return $error;
        }else{
            return true;
        }

    }
}
