<?php

require ('./controllers/registerController.php');
session_start();

// do login
if(isset($_POST)){

    $postData = $_POST;    
    $register = new registerController;
    if($register->validate($postData)){
        $_SESSION['register'] = true;
        header('Location: index.php');
    }  
    
    

}


