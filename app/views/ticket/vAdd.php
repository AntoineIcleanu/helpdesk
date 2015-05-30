<div class="well well-lg">
	<form method="post" action="Tickets/update">
    <fieldset>
        <legend>Creation d'un ticket</legend>
       	 	<div>       	 	
       	 	<div>
        	<select class="form-control" name="idCategorie">
        		<option>Categorie</option>
        		<?php foreach ($user as $u) {
        		echo "<option value=".$getId().">".$u->getLibelle()."</option>";};	?>
        	</select>
        	</div>
           
        
            <br/>
            <label for="titre">Titre :</label>
            <br/><input type="text" class="form-control" id="titre" name="titre" />
            <br/>
            <label for="description">Description :</label>
            <br/>
            <textarea id="description" class="form-control" name="description"></textarea>
        
        <div class="form-group" style="width:70%; float:left;">
            <label for="utilisateur">Utilisateur :</label>
            <br/><input type="text" class="form-control" id="utilisateur" name="utilisateur" readonly value="<?php echo $currentUser ?>" />
            <br/>
            <label for="datecreation">Date de creation :</label>
            <br/><input type="text" class="form-control" id="datecreation" name="datecreation" readonly value="<?php echo (new DateTime())->format('d-m-Y H:i:s'); ?>" style="width:50%;" />
            <br/>
            <label for="statut">Statut :</label>
            <br/><input type="text" class="form-control" id="statut" name="statut" readonly value="Nouveau" style="width:50%;" />
        </div>
        <div class="form-group" style="width:30%; float:right; padding-top:150px">
            <input type="submit" value="Valider" class="btn btn-default" style="width:100%;" />
            <br/><a class="btn btn-default" href="<?php echo $config["siteUrl"]?>Tickets" style="width:100%;">Annuler</a>
        </div>
        </div>
    </fieldset>
</form>
</div>