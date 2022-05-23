<?php

require('DAO/ClientDAO.php');

class ControllerAccueil
{
	
	public function includeView()
	{
		require_once('pages/header/header.php');
		require_once('View_accueil.php');
		require_once('pages/header/footer.php');
	}
	public function getAllClient()
	{
		$tab_client = ClientDAO::getAllClient();
		return $tab_client;
	}
}
?>