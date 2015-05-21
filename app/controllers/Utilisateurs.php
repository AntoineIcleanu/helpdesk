<?php

Class Utilisateurs extends \_DefaultController{
	public function Utilisateurs(){
		$this->model="User";
	}
	
	public function test(){
		$users=DAO::getAll("User", "login like 'a%'");
		foreach ($users as $u){
			echo $u->toString()."br";
		}
	}
	
	public function show($params=NULL){
		$id=$params[0];
		$user=DAO::getOne("User", $id);
		$tickets=DAO::getAll("Ticket", "idUser=", $id);
		$this->loadView("user/vshow", array("utilisateur"=>$user, "titre"=>"Utilisateur", "tickets"=>$tickets));
	}
	
	public function formulaire($params=NULL){
		$user=$this->getInstance($params);
		$this->loadView("user/vform", $user);
	}
}