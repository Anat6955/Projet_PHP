<?php

 require "../Model/pdo.php";
 echo "<br>";
 echo "Eleve : ".$_POST['nv_nom_eleve']." ".$_POST['nv_prenom_eleve'];

 $resultat = $dbPDO->prepare("INSERT INTO eleves (nom, prenom, id_classes) VALUES (:nom, :prenom, 1)");
 $resultat ->execute(['nom' => $_POST['nv_nom_eleve'], 'prenom' => $_POST['nv_prenom_eleve']])or die(print_r($resultat ->errorInfo()));
?>

<br>
<a href="../index.php">Retour</a>