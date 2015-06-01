<div class="container">
	<div class='well well-lg'>
		<?php 
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
					echo count(DAO::getAll("Ticket","idStatut=1"));
				?></td>
			</tr>
			<tr>
				<td>Attribu&eacute</td>
				<td><?php 
					echo count(DAO::getAll("Ticket","idStatut=2"));
				?></td>
			</tr>
			<tr class="info">
				<td>R&eacutesolu</td>
				<td><?php 
					echo count(DAO::getAll("Ticket","idStatut=4"));
				?></td>
			</tr>
			
		</table>
	</div>
	<a class="btn btn-info" href="tickets">Cr&eacuteer un ticket</a>
	</div>
	<div class="container well well-lg">
		<table class="table">
			<tr>
				<td colspan="2"><h3>Base de connaissance : Sujets les plus r&eacutecents</h3></td>
			</tr>
			<tr class="info">
				<td><?php $articles=DAO::getAll("Faq", "id * order by date desc");
						$article=$articles[0];
						$article->getTitre();
				?></td>
				<td><?php 
					echo count(DAO::getAll("Ticket","idStatut=1"));
				?></td>
			</tr>
			<tr>
				<td></td>
				<td><?php 
					echo count(DAO::getAll("Ticket","idStatut=2"));
				?></td>
			</tr>
			<tr class="info">
				<td></td>
				<td><?php 
					echo count(DAO::getAll("Ticket","idStatut=4"));
				?></td>
			</tr>
		</table>
	</div>