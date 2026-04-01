<?php
require "../Model/pdo.php";

$id = $_GET['id'] ?? null;

if ($_GET['id']) {
    $verif = $dbPDO->prepare("SELECT * FROM eleves WHERE id_eleve = :id");
    $verif->execute(['id' => $_GET['id']]);
    $etudiant = $verif->fetch();

    if ($etudiant) {
        $suppr = $dbPDO->prepare("DELETE FROM eleves WHERE id_eleve = :id");
        $statut = $suppr->execute(['id' => $_GET['id']]);
        echo "<br>";
        echo "Etudiant suprimer";
    } else {
        echo "Cet étudiant n'existe pas dans la base de données";
    }
}
?>
<br>
<a href="../index.php">Retour</a>