<?php $this->load->view('components/sidebar.php');?>
	<div class="main-page">
		<?php $this->load->view('components/searchbar.php');?>
		<h2 class="page_title">Plan Comptable de Gestion</h2>
		<div class="box">
			<h3>Insérer un plan comptable de gestion</h3>
			<form action="">
					
					<input type="text" class="input" name="numero" placeholder="ex: 35">
					<input type="text" class="input" name="intitule" placeholder="Stocks de produits">
				<input type="submit" class="btn btn-primary" value="Insérer">
			</form>
		</div>
	</div>

