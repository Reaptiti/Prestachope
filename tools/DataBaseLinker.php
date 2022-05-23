<?php

class DataBaseLinker{
 private static $dsn = 'mysql:host=localhost;dbname=prestachope_bdd2';
 private static $user = 'root';
 private static $password = 'root';
 private static $bdd = null;

 public static function getConnexion()
	{
		if (DataBaseLinker::$bdd==null)
		{
			DataBaseLinker::$bdd = new PDO(DataBaseLinker::$dsn,DataBaseLinker::$user,DataBaseLinker::$password); 
		}
		return DataBaseLinker::$bdd;
	}


    
     
}

?>