<?php

session_start();


class Rendering { 

    public function index($view = ''){        
        
        if(!empty($view)){
            include './views/layouts/' . $view .'.php';   
        }else{
            include './views/layouts/login.php';
        }
    }   

    public static function doLogin(){

    }
}
