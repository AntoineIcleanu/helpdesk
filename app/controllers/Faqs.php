<?php
/**
 * Gestion des articles de la Faq
 * @author jcheron
 * @version 1.1
 * @package helpdesk.controllers
 */
class Faqs extends \_DefaultController {
	public function Faqs(){
		parent::__construct();
		$this->title="Foire aux questions";
		$this->model="Faq";
	}

	/* (non-PHPdoc)
	 * @see _DefaultController::setValuesToObject()
	 */
	protected function setValuesToObject(&$object) {
		parent::setValuesToObject($object);
		$object->setUser(Auth::getUser());
		$categorie=DAO::getOne("Categorie", $_POST["idCategorie"]);
		$object->setCategorie($categorie);
	}
	
	public function frm($id=NULL){
		if(Auth::isAdmin()){
			$object=$this->getInstance($id);
			$cat=DAO::getAll('Categorie');
			$date = date("d-m-y H:i:s");
			$this->loadView("article/vAdd", array("user"=>$cat, "faq"=>$object, "date"=>$date));
		}
		else {
		echo $this->messageDanger("Vous devez etre un administrateur du site pour acceder a cette apge !");
	}

}
}