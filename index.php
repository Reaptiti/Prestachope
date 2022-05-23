<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>PrestaChop!</title>		
	</head>
	<body>

        <?php

        session_name("prestachope2");
        session_start();


        require('tools/DataBaseLinker.php');
        DataBaseLinker::getConnexion();

        include_once('tools/SuperController.php');
        include_once('tools/DataBaseLinker.php');

        $page = 'accueil';
        if (!empty($_GET['page']))
        {
            $page = $_GET['page'];
        }
        SuperController::callPage($page);

        ?>
    </body>
</html>




