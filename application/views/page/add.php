<div class="box sign-in" style="width:850px; margin:auto; margin-top: 50px">
	<h2 class="page_title">Enregistre les donnees de votre entreprise</h2>
	<form action="" method="post">
		<div class="input_float">
			<label for="input_nom">Nom de la societe</label>
			<input type="text" class="input" name="nom" id="input_nom">
		</div>
		<div class="input_float">
			<label for="input_dir">Nom du dirigeant</label>
			<input type="text" class="input" name="dir" id="input_dir">
		</div>
		<div class="input_float">
			<label for="input_mdp">Mot de passe</label>
			<input type="text" class="input" name="mdp" id="input_mdp">
		</div>
		<div class="input_float">
			<label for="input_obj">Objet de la societe</label>
			<input type="text" class="input" name="obj" id="input_obj">
		</div>
		<div class="input_float">
			<label for="input_siege">Siege</label>
			<input type="text" class="input" name="siege" id="input_siege">
		</div>
		<div class="input_float">
			<label for="input_debexe">Date de debut d'exercice</label>
			<input type="date" class="input" name="debutexe" id="input_debexe">
		</div>
		<div class="input_float">
			<label for="input_nif">Numero d'Identification Fiscale:</label>
			<input type="text" class="input" name="nif" id="input_nif">
		</div>
		<div class="input_float">
			<label for="input_nrc">Numero de Registre de Commerce:</label>
			<input type="text" class="input" name="nrc" id="input_nrc">
		</div>
		<div class="input_float">
			<label for="input_stat">Stat:</label>
			<input type="text" class="input" name="stat" id="input_stat">
		</div>
		<div class="input_float">
			<label for="input_devise">Devise:</label>
			<input type="text" class="input" name="devise" id="input_devise">
		</div>
		<div class="upload_container">
					<label for="file"> <img src="<?php echo site_url('assets/img/file-arrow-down-solid.svg');?>" alt="">Ajouter le logo de votre entreprise.</label>
					<input type="file" id="file" class="input_file">
					<p class="file_name">logo.png</p>
		</div>
		<input type="submit" value="Enregistrer" class="btn btn-success">
		<p>Deja inscrit ? <a href="<?php echo site_url('Login')?>">Se connecter</a></p>
	</form>
</div>
