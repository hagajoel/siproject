<?php $this->load->view('components/sidebar.php');?>
<div class="main-page">
	<?php $this->load->view('components/searchbar.php');?>
	<div class="box">
		<h2 class="page_title">Journal:</h2>
		<form action="" method="post">
			<p class="info">Numéro de compte</p>
			<input type="text" class="input" placeholder="ex: 35">
			<p class="info">Montant débit</p>
			<input type="text" class="input" placeholder="10 000 ar">
			<p class="info">Montant crédit</p>
			<input type="text" class="input" placeholder="10 000 ar">
			<p class="info">Date</p>
			<input type="date" class="input" >
			<input type="submit" value="Ajouter" class="btn btn-primary">
		</form>
		<div class="upload_container">
				<label for="file"> <img src="<?php echo site_url('assets/img/file-arrow-down-solid.svg');?>" alt=""> Import un fichier CSV</label>
				<input type="file" id="file" class="input_file">
				<p class="file_name">journal.csv</p>
			</div>
	</div>
	<div class="box">
		<h2 class="page_title">Liste des journales</h2>
		<table>
			<thead>
				<tr>
					<th>Compte</th>
					<th>Débit</th>
					<th>Crédit</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>0035</td>
					<td>10 000 Ar</td>
					<td>10 000 Ar</td>
					<td>2023-03-01</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
