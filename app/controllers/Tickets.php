<?php
/**
 * Gestion des tickets
 * @author jcheron
 * @version 1.1
 * @package helpdesk.controllers
 */
class Tickets extends \_DefaultController {
	public function Tickets(){
		parent::__construct();
		$this->title="Tickets";
		$this->model="Ticket";
	}
	
	private static function getTypes() {
		return ["incident" => "Incident", "demande" => "Demande"];
	}

	public function messages($id){
		$ticket=DAO::getOne("Ticket", $id[0]);
		if($ticket!=NULL){
			echo "<h2>".$ticket."</h2>";
			$messages=DAO::getOneToMany($ticket, "messages");
			echo "<table class='table table-striped'>";
			echo "<thead><tr><th>Messages</th></tr></thead>";
			echo "<tbody>";
			foreach ($messages as $msg){
				echo "<tr>";
				echo "<td title='message' data-content='".htmlentities($msg->getContenu())."' data-container='body' data-toggle='popover' data-placement='bottom'>".$msg->toString()."</td>";
				echo "</tr>";
			}
			echo "</tbody>";
			echo "</table>";
			echo JsUtils::execute("$(function () {
					  $('[data-toggle=\"popover\"]').popover({'trigger':'hover','html':true})
				})");
		}
	}


	public function frm($id=NULL){
		if(Auth::isAuth()) {
			if(!empty($id) && Auth::isAdmin()) {
				$ticket = DAO::getOne("Ticket", $id[0]);
				$statuts = DAO::getAll("Statut");
				
				$this-> loadView("ticket/vEdit", array(
						"ticketTypes" => Tickets::getTypes(),
						"categories" => $categories,
						"ticket" => $ticket,
						"statut" => $statut
				));
			}
			elseif (!empty($id) && !Auth::isAdmin()) {
				$this-> messageDanger("blablabla");
			}
			Else {
				$this->loadView("ticket/vAdd", Array (
						"ticketTypes" => Tickets::getTypes(),
						));
			}
		}
		Else 
			$this-> messageDanger("Vous devez etre connecter pour acceder a la page !");
	}
}