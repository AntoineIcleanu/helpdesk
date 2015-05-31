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
	protected function setValuesToObject(&$object) {
		parent::setValuesToObject($object);
		if(isset($_POST["idCategorie"])){
			$cat=DAO::getOne("Categorie", $_POST["idCategorie"]);
			$object->setCategorie($cat);
		}
		$object->setUser(Auth::getUser());
		$statut=DAO::getOne("Statut", $_POST["Statut"]);
		$object->setStatut($statut);
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
		if(Auth::isAuth()){
			$object=$this->getInstance($id);
			$cat=DAO::getAll('Categorie');
			$date = date("d-m-y H:i:s");
			$this->loadView("ticket/vAdd", array("user"=>$cat, "faq"=>$object, "date"=>$date));
		}
		else {
		echo $this->messageDanger("Vous devez &ecirc;tre connecté au site pour acceder a cette page !");
	}}
}
/* (non-PHPdoc)
 * @see _DefaultController::setValuesToObject()
 */


	