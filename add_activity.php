<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Enregistrer Activité</title>
</head>
	<body>
	<div class="card">
	  <div class="card-body">

	    <h5>Enregistrer une nouvelle activité</h5>

	    <form method="POST"  name="activity_form">
	        <label>Nom de l'activité: </label><input type="text" name="activity_name">
	        <label>Type d'activité: </label><input type="text" name="activity_type">
	        <label>Nombre d'enfant max :</label><input type="text" name="activity_number_max_child">
	        <input class="btn btn-success" type="submit" value="ok" name="ok" />
	    </form>

	    </div>
	  </div>
<?php
require ("connect.php");
if (isset ($_POST["ok"]))
{

 $activity_name = $_POST['activity_name'];
 $activity_type = $_POST['activity_type'];
 $activity_number_max_child =$_POST['activity_number_max_child'];
var_dump($activity_name);
 $db->query(
      'INSERT INTO activity
      (activity_name,activity_type,activity_number_max_child) 
      VALUES ("'.$activity_name.'","'.$activity_type.'","'.$activity_number_max_child.'")'
  );
header("Location: index.php");
  
};

?>

	</body>
</html>
