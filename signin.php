<?php
require ('./controllers/loginController.php');
// do login
session_start();

if(isset($_POST)){

    $postData = $_POST;
    $login = new loginController;
    $user = $login->doLogin($postData);

    if(sizeof($user) > 0){
        $_SESSION['login'] = ['user' => $user[0]['name']];
        header('Location: index.php?path=home');
    }else{
        echo 'No users';
    }     

}


