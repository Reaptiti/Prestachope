<?php
require ('DAO/ContactDAO.php');
class ControllerContact{
    
    public function includeView()
    {
        require_once('pages/header/header.php');
        require_once('View_contact.php');
        require_once('pages/header/footer.php');
    }
    public static function redirectUser()
	{
		header('Location: index.php?page=accueil');
	}

    public function InsertionContact($sujet, $contenu){
    	$insert = ContactDAO::InsertContact($sujet, $contenu);
		return $insert;
    }

}
?>