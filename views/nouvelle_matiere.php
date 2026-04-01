 <?php

 require "../Model/pdo.php";
 echo "<br>";
 echo "Matiere : ".$_POST['nv_matiere'];

 $resultat = $dbPDO->prepare("INSERT INTO matieres(nom) VALUES (:nom)" );
 $resultat ->execute(['nom' => $_POST['nv_matiere']])or die(print_r($resultat ->errorInfo()));
?>
<br>
<a href="../index.php">Retour</a>