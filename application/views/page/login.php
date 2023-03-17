<?php
    $this->load->view('template/header.php');
?>

<div class="container">
    <div class="box login_box">
        <h2>Log in</h2>
        <form action="" method="post">
            <input type="text" class="input_login" placeholder="Entrer le nom de votre société" name="nom" required="">

            <input type="password" class="input_login" name="pwd" required="" placeholder="Mot de passe">

            <input type="submit" value="Se connecter" class="btn btn-primary">
        </form>
        <div class="links">
            <p>Pas encore enregistré ? <a href="#" class="link">S'incrire</a></p>
        </div>
    </div>
    <?php
        if (isset($err)) {
            if ($err == 3) {?>
                <div class="alert alert-danger">
                    <p>Mot de passe invalide</p>
                </div>
            <?php }
        }
    ?>
</div>

<?php
    $this->load->view('template/ending.php');
?>
