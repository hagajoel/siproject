<link rel="stylesheet" href="<?php echo base_url('assets/css/error.css'); ?>">
<?php $this->load->view('components/sidebar.php');?>
<div class="main-page">
    <?php $this->load->view('components/searchbar.php');?>
    <h2 class="page_title">Plan Comptable de Gestion</h2>
    <div class="box">
        <h3>Insérer un plan comptable de gestion</h3>
        <form action="<?php echo site_url('/pcg'); ?>" method="post">
            <?php 
                if(isset($num)){ ?>
            <span>Code incorrect</span>
            <?php
                }
            ?>
            <?php 
                if(isset($contains)){ ?>
            <span>Le compte <?php echo $contains; ?> existe déjà.</span>
            <?php } ?>
            <input type="text" class="input" name="numero" placeholder="ex: 35000">
            <span><?php echo form_error('numero'); ?></span>
            <input type="text" class="input" name="intitule" placeholder="ex: Stocks de produits">
            <span><?php echo form_error('intitule'); ?></span>
            <input type="submit" class="btn btn-primary" value="Insérer">
        </form>
        <div class="upload_container">
            <?php 
                if($err == 69){ ?>
            <span>Veuillez choisir un fichier csv à importer.</span>
            <?php }
                if($err == 96){ ?>
            <span>Le fichier n'est pas de type .csv</span>
            <?php }
                if($err == -1){ ?>
            <span>Le fichier csv n'est pas accepté, importer un fichier avec les colonnes :
                numero_de_compte;intitule</span>
            <?php }
            if($err == -2){ ?>
            <span>Le numéro de compte doit-être un format numérique.</span>
            <?php }
            ?>
            <form action="<?php echo site_url('pcg/pcgCsv'); ?>" method="post" enctype="multipart/form-data">
                <label for="file"> <img src="<?php echo site_url('assets/img/file-arrow-down-solid.svg');?>" alt="">
                    Importer
                    un fichier CSV</label>
                <input type="file" id="file" class="input_file" name="csv">
                <input class="import-link" type="submit" value="Click here to Import">
            </form>
        </div>
    </div>
    <div class="box">
        <h2 class="page_title">Liste des comptes de gestion comptable:</h2>
        <?php $this->load->view('components/liste_compte'); ?>
    </div>
</div>
<script src="<?php echo base_url('assets/js/delete.js'); ?>"></script>