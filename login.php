<?php

require ('./controllers/loginController.php');
// do login

if(isset($_POST)){

    $postData = $_POST;
    $login = new loginController;
    if($login->doLogin($postData)){

        $_SESSION['login'] = ['user' => $postData['name']];
        
    }   

}


