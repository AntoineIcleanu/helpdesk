<div class="well well-lg">
	<form method="post" action="Faqs/update" >
		<input type="hidden" name="id" value="<?php echo $faq->getId()?>">
		<div>
			<select class="form-control" name="idCategorie">
				<option>Categorie</option>
				<?php foreach ($user as $u) {echo "<option value=".$u->getId().">".$u->getLibelle()."</option>";}; ?>
			</select>
		</div>
		</br>
		<fieldset>
			<legend>Titre :</legend>
				<input type="text" class="form-control" name="titre" value="<?php echo $faq->getTitre()?>" required>
		</fieldset>
		</br>
		<fieldset>		
			<legend>Description :</legend>
				<div>
					<textarea id="description" class="form-control" name="description"></textarea>
				</div>
		</fieldset>
		<fieldset>
			<legend>Utilisateur :</legend>
				<input type="text" class="form-control" readonly value="<?php echo Auth::getUser()?>">
		</fieldset>
		<fieldset>
			<legend>Date de creation :</legend>
				<input type="text" placeholder="<?php if($faq->getDateCreation()==NULL): echo $date; else: echo $faq->getDateCreation(); endif; ?>" class="form-control" value="<?php echo $faq->getDateCreation()?>" readonly>
		</fieldset>
		<fieldset class="comment-form-autor">	
			<legend>Version :</legend>
				<input type="text" placeholder="<?php echo $faq->getVersion()?>" value="<?php echo $faq->getVersion() ?>" class="form-control" readonly>
		</fieldset>	
		</br>	
		<div>
			<input type="submit" value="Valider" class="btn btn-primary  btn-lg btn-block">
			<a class="btn btn-primary btn-lg btn-block" href="<?php echo $config["siteUrl"]?>ticket">Annuler</a>
		</div>
	</form>
</div>