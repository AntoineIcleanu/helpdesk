<div class="container">
	<div class='well well-lg'>
		<?php 
			$idUser=Auth::getUser()->getId();
			echo $_SESSION["user"];
		?>
		</br>
		<table class="table">
			<tr>
				<td>Mes tickets</td>
				<td>Nombre</td>
			</tr>
			<tr class="info">
				<td>Nouveau</td>
				<td><?php 
					echo count(DAO::getAll("Ticket","idStatut=1 and idUser=".$idUser));
				?></td>
			</tr>
			<tr>
				<td>Attribu&eacute</td>
				<td><?php 
					echo count(DAO::getAll("Ticket","idStatut=2 and idUser=".$idUser));
				?></td>
			</tr>
			<tr class="info">
				<td>R&eacutesolu</td>
				<td><?php 
					echo count(DAO::getAll("Ticket","idStatut=4 and idUser=".$idUser));
				?></td>
			</tr>
			
		</table>
	</div>
	<a class="btn btn-info" href="tickets">Cr&eacuteer un ticket</a>
	</div>
	<div class="container well well-lg">
		<table class="table">
			<thead>
				<th><h3>Base de connaissance : Sujets les plus r&eacutecents</h3></th>
			</thead>
				<tbody><?php $articles=DAO::getAll("Faq", "1=1 order by dateCreation desc");
						$article=$articles[0];
						$article->getTitre();
						foreach ($articles as $a){
							echo "<tr><td>".$a->getTitre()."</td><td>".$a->getdateCreation()."</td></tr>";
						}
				?>
				</tbody>
		</table>
	</div>