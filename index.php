<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>LogiCrèche</title>

</head>
<body>
<?php
require ("connect.php");
?>

<h1>Bienvenue dans LogiCrèche</h1>

<h5 id="dayDate">date</h5>

	<div>
		
		<h3>Enfants Inscrits</h3><button onclick="self.location.href='registration_form.php'">Ajouter nouvel enfant</button>
		<table class="table table-striped table-dark">
			  <thead>
			    <tr>
			      <th scope="col">N°d'inscription</th>
			      <th scope="col">Nom</th>
			      <th scope="col">Prénom</th>
			      <th scope="col">présence</th>
			    </tr>
			  </thead>
			  <tbody>

<!-- INSERT  DATA CHILDREN FROM DATABASE INTO TABLE -->
<?php

	$children = $db->query('SELECT * FROM children');
	          

	     while ($list = $children->fetch())
	    	{
	    		$child_details = $list['children_id'];
?>
			     <tr>
					
			      <th scope="row"><?php echo $list['children_id']; ?>
			      <a href="child_details.php" class="idChild" name="children_id" value="' . $list['children_id'] . '">Voir détails</a>
			      	
			      </th>
			 	
			      <td><?php echo $list['children_firstname']; ?></td>
			      <td><?php echo $list['children_lastname']; ?></td>
			      <td>
			      	<div class="custom-control custom-radio">
					  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
					  <label class="custom-control-label" for="customRadio1">valider si enfant présent</label>
<?php 
//requete if radio select into tabla child care
var_dump($child_details);
?>
					</div>
				</td>
			    </tr>
			    
<?php
}

$children->closeCursor(); // end and close the request children

?>
			  </tbody>
			</table>
			
		
	</div>

<!-- MODAL for child's details -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


	<div>
		
		<h3>Liste des Activités</h3><button onclick="self.location.href='add_activity.php'">Ajouter Activité</button>

		<table class="table table-striped table-dark">
			  <thead>
			    <tr>
			      <th scope="col">N°Activité</th>
			      <th scope="col">Nom Activité</th>
			      <th scope="col">Type</th>
			      <th scope="col">Nb enf. MAX</th>
			    </tr>
			  </thead>
			  <tbody>
<?php
 $activity=$db->query('SELECT*FROM activity');

 while ($list1 = $activity->fetch())
 	{
 ?>
			    <tr>
			      <th scope="row"><?php echo $list1 ['activity_id']; ?></th>
			      <td><?php echo $list1 ['activity_name']; ?></td>
			      <td><?php echo $list1 ['activity_type']; ?></td>
			      <td><?php echo $list1 ['activity_number_max_child']; ?></td>
			    </tr>
<?php
}

$activity->closeCursor(); // Termine le traitement de la requête

?>			   
			  </tbody>
			</table>
			
	</div>

    		 
		

</body>
</html>