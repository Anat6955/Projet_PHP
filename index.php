<?php
require "model/pdo.php";
?>

<h2>Liste des élèves:</h2>
<?php
$resultat_eleves = $dbPDO->prepare("SELECT nom, prenom, id_eleve FROM eleves");
$resultat_eleves ->execute();

while($actuel = $resultat_eleves->fetch()) {
    echo "<p>" . $actuel['nom'] . " " . $actuel['prenom'] . ". Id de l'élève: " . $actuel['id_eleve']."</p>";
}
?>


<h2>Liste des clases:</h2>
<?php
$resultat_classes = $dbPDO->prepare("SELECT nom FROM classes");
$resultat_classes ->execute();

while($actuel = $resultat_classes->fetch()) {
    echo "<p>" . $actuel['nom'] . "</p>";
}
?>


<h2>Liste des profésseurs:</h2>
<?php
$resultat_profs = $dbPDO->prepare("SELECT nom, prenom FROM prof");
$resultat_profs ->execute();

while($actuel = $resultat_profs->fetch()) {
    echo "<p>" . $actuel['nom'] . " " . $actuel['prenom'] . "</p>";
}
?>




<h2>Ajouter une matière</h2>

<form action="Views/nouvelle_matiere.php" method = "POST">
    Matière: <input type="text" name="nv_matiere" />
    <input type="submit" value="Valider" />
</form>

<h2>Ajouter un eleve</h2>

<form action="Views/nouvel_etudiant.php" method = "POST">
    Nom: <input type="text" name="nv_nom_eleve" />
    Prenon: <input type="text" name="nv_prenom_eleve" />
    <input type="submit" value="Valider" />
</form>