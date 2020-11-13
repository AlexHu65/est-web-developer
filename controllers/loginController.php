<?php

// models
require './models/loginModel.php';

class loginController 
{
    public function doLogin($postData){
        return $login = loginModel::doLogin($postData);        
    }    
}
