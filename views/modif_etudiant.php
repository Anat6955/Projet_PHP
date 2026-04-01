<?php

 require "../Model/pdo.php";

 $requette = $dbPDO->prepare("SELECT * FROM eleves WHERE id_eleve = :id");
 $requette->execute(['id' => $_GET['id']]);

 $eleve = $requette->fetch();
 ?>

 <h2>Modifier un élève</h2>

<form method="POST">
    <input type="text" name="nom" value="<?= $eleve['nom'] ?>">
    <input type="text" name="prenom" value="<?= $eleve['prenom'] ?>">
    <input type="submit" value="Valider" />
</form>

<?php
 $requette = $dbPDO->prepare("UPDATE eleves SET nom = :nom, prenom = :prenom WHERE id_eleve = :id");
 $requette->execute([
     'nom' => $_POST['nom'],
     'prenom' => $_POST['prenom'],
     'id' => $_GET['id']
    ]);

?>

<br>
<a href="../index.php">Retour</a>