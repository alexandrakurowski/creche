
<?php
	
	try  
			{
				$db = new PDO('mysql:host=localhost;dbname=creche;charset=utf8', 'alex', 'alexandra32');
			}
			// en cas d'erreur on affiche un message :
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			} 
	ini_set('display error',1);
	var_dump('hello');
?>