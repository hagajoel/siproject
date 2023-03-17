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
			<div class="upload_container">
				<label for="file"> <img src="<?php echo site_url('assets/img/file-arrow-down-solid.svg');?>" alt=""> Import un fichier CSV</label>
				<input type="file" id="file" class="input_file">
				<p class="file_name">pgc.csv</p>
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
					<tr role="row">
						<td scope="col">0035</td>
						<td scope="col">Stocks de produits</td>
						<td scope="col" class="action_col">
							<a href="#" class="btn btn-success btn-action">Edit</a>
							<a href="#" class="btn btn-danger btn-action" >Delete</a>
						</td>
					</tr>
					<tr role="row">
						<td scope="col">0035</td>
						<td scope="col">Stocks de produits</td>
						<td scope="col" class="action_col">
							<a href="#" class="btn btn-success btn-action">Edit</a>
							<a href="#" class="btn btn-danger btn-action" >Delete</a>
						</td>
					</tr>
					<tr role="row">
						<td scope="col">0035</td>
						<td scope="col">Stocks de produits</td>
						<td scope="col" class="action_col">
							<a href="#" class="btn btn-success btn-action">Edit</a>
							<a href="#" class="btn btn-danger btn-action" >Delete</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
