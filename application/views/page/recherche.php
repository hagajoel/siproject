<?php $this->load->view('components/sidebar.php');?>
<div class="main-page">
    <?php $this->load->view('components/searchbar.php');?>
    <div class="box">
        <h2 class="page_title">Résultat recherche :</h2>
        <?php $this->load->view('components/liste_compte'); ?>
    </div>
</div>
<script src="<?php echo base_url('assets/js/delete.js'); ?>"></script>