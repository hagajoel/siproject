<link rel="stylesheet" href="<?php echo base_url("assets/css/error.css"); ?>">
<div class="container">
    <div class="box login_box">
        <h2>Log in</h2>
        <?php
            if ($err == 3) { ?>
        <div class="alert alert-danger">
            <p>Le nom ou le mot de passe est invalide</p>
        </div>
        <?php
            }
        ?>
        <form action="<?php echo site_url('login/sign_in'); ?>" method="post">
            <input type="text" class="input" placeholder="Entrer le nom de votre société" name="nom" autocomplete="off">
            <span><?php echo form_error('nom'); ?></span>
            <input type="password" class="input" name="pwd" placeholder="Mot de passe">
            <span><?php echo form_error('pwd'); ?></span>
            <input type="submit" value="Se connecter" class="btn btn-primary">
        </form>
        <div class="links">
            <p>Pas encore enregitré ? <a href="<?php echo site_url('login/inscription'); ?>" class="link">S'incrire</a>
            </p>
        </div>
    </div>
</div>