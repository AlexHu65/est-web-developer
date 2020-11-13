<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./index.php">Start</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       
      <?php if(isset($_SESSION['login'])){ ?>
        <li class="nav-item active">
        <?=$_SESSION['login']['user']?>
      </li> 
      <?php }else{ ?>
        <li class="nav-item active">
            <a class="nav-link" href="./index.php?path=register">Register <span class="sr-only">(current)</span></a>
        </li>  

     <?php } ?>
    </ul>    
  </div>
</nav>
<div class="container">   
    <?php if(isset($_SESSION['register'])){?>

        <div class="alert alert-success" role="alert">
            User registered
        </div>

   <?php } ?>
</div>