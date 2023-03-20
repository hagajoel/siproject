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
            <form action="<?php echo site_url('pcg/pcgCsv'); ?>" method="post" enctype="multipart/form-data">
                <label for="file"> <img src="<?php echo site_url('assets/img/file-arrow-down-solid.svg');?>" alt="">
                    Import
                    un fichier CSV</label>
                <input type="file" id="file" class="input_file" name="csv">
                <input class="import-link" type="submit" value="Click here to Import">
            </form>
        </div>
    </div>
    <div class="box">
        <h2 class="page_title">Liste des comptes de gestion comptable:</h2>
        <table>
            <thead>
                <tr role="row">
                    <th scope="col">Code</th>
                    <th scope="col">Intitulé</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
					foreach ($pcg as $p) { ?>
                <tr role="row" id="<?php echo 'row'.$p['idPcg'] ;?>">
                    <td scope=" col"><?php echo $p['compte']; ?></td>
                    <td scope="col"><?php echo $p['intitule']; ?></td>
                    <td scope="col" class="action_col">
                        <a href="#?id=<?php echo $p['idPcg']; ?>" class="btn btn-success btn-action">Edit</a>
                        <button id="<?php echo $p['idPcg']; ?>"
                            class="btn btn-danger btn-action del-link">Delete</button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script src="<?php echo base_url('assets/js/delete.js'); ?>"></script>