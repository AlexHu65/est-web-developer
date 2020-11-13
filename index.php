<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/validationEngine.jquery.css">
    <title>ALEX - DEVELOPER TEST</title>
</head>
<body>

<?php 

include './views/layouts/menu.php';
$view = '';
require_once ('./config/routing.php');
require_once ('./rendering.php');

// get the path and view
if(isset($_SESSION['login'])){

    $view = 'home';

}else{
    if(isset($_GET['path'])){
        $view = $_GET['path'];
    }
}



// render template
$template = new Rendering;
$template->index($view);
?>
  
<script src="./assets/js/jquery.validationEngine.min.js"></script>
<script src="./assets/js/jquery-3.5.1.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/app.js"></script>
</body>
</html>