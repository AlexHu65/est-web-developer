<?php if(isset($_SESSION['login'])){?>
    <div class="container">
    <div class="row">
        <div class="col">
            SESION STARTED
            Welcome <?=$_SESSION['login']['user']?>
        </div>
    </div>
</div>
<?php } ?> 
