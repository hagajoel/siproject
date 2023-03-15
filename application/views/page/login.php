<div class="container">
    <div class="box login_box">
        <h2>Log - in</h2>
        <form action="<?php echo site_url('login'); ?>" method="post">
            <p><?php echo form_error('nom'); ?></p>
            <input type="text" class="input" placeholder="Entrer le nom de votre société" name="nom">
            <p><?php echo form_error('pwd'); ?></p>
            <input type="password" class="input" name="pwd" placeholder="Mot de passe">
            <input type="submit" value="Se connecter" class="btn btn-primary">
        </form>
        <div class="links">
            <p>Pas encore enregitré ? <a href="<?php site_url('login/inscription'); ?>" class="link">S'incrire</a></p>
        </div>
    </div>
    <?php
        if (isset($err)) {
            if ($err == 3) { ?>
    <div class="alert alert-danger">
        <p>Le nom ou le mot de passe est invalide</p>
    </div>
    <?php }
        }
    ?>
</div>