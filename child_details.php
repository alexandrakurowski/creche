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

require ('connect.php')

?>
	<h4>détails de l'enfant</h4>
<?php
if(isset($_POST['child_details'])){
var_dump($child_details);

 $details = $db->query('SELECT * FROM children WHERE children_id = '.$list['children_id'].'');


	$children_lastname = $_POST ['children_lastname'];
  $children_firstname = $_POST ['children_firstname'];
  $children_birthday = $_POST['children_birthday'];
  $children_adress = $_POST ['children_adress']; 
  $children_parents_contact = $_POST ['children_parents_contact'];
  $children_remarks = $_POST ['children_remarks'];

	var_dump($children_lastname);
}

	          

	//      while ($list = $children->fetch())
	//     	{

?> 
$idChild = $_POST['children_id'];
$child = $db->query("SELECT * FROM children WHERE children_id = " . $idChild);
		while($datas = $child->fetch())
		{
			echo 
				"<div>" . $datas['children_lastname'] . "</div>
				<div>" . $datas['children_firstname'] . "</div>
				<div>" . $datas['children_birthday'] . "</div>
				<div>" . $datas['children_adress'] . "</div>
				<div>" . $datas['children_parents_contact'] . "</div>
				<div>" . $datas['children_remarks'] . "</div>";
		}
</body>
</html>