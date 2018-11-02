<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Inscription</title>

</head>
<body>

<!-- REGISTRATION FORM -->
  
  <div class="card">
    <div class="card-body">
      <h5> Inscription Nouvel Enfant</h5>
    <form method="POST"  name="inscription_form">
        <label>Nom de l'enfant: </label><input type="text" name="children_lastname">
        <label>Prénom de l'enfant: </label><input type="text" name="children_firstname">
        <label>Date de naissance de l'enfant :</label><input type="date" name="children_birthday">
        <label>Adresse de l'enfant : </label><input type="text" name="children_adress">
        <label>Contacts des Parents : </label><input type="text" name="children_parents_contact">
        <textarea  name="children_remarks">Remarques particulieres : </textarea>
        <input class="btn btn-success" type="submit" value="ok" name="ok" />
    </form>
    </div>
  </div>

<!-- REQUEST TO SEND DATAS REGISTRATION TO DATABASE -->
<?php

require ("connect.php");

if (isset ($_POST["ok"]))
{

  $children_lastname = $_POST ['children_lastname'];
  $children_firstname = $_POST ['children_firstname'];
  $children_birthday = $_POST['children_birthday'];
  $children_adress = $_POST ['children_adress']; 
  $children_parents_contact = $_POST ['children_parents_contact'];
  $children_remarks = $_POST ['children_remarks'];

var_dump($children_firstname);

  $db->query(
      'INSERT INTO children(children_firstname,children_lastname,children_birthday,children_adress,children_parents_contact,children_remarks) 
      VALUES ("'.$children_lastname.'","'.$children_firstname.'","'.$children_birthday.'","'.$children_adress.'","'.$children_parents_contact.'","'.$children_remarks.'")'

    );
header("Location: index.php");
  
};

?> 
</body>
</html>

