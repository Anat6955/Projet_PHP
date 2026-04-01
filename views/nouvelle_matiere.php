<?php
require "../Model/pdo.php";

if(isset($_POST['nv_matiere']) && !empty($_POST['nv_matiere'])) {

    $nv_matiere = $_POST['nv_matiere'];

    $sql = "INSERT INTO matieres (nv_matiere) VALUES (?)";
    $requette = $dbPDO->prepare($sql);
    $requette->execute([$nv_matiere]);

    echo "Matière ajoutée !";
} else {
    echo "Champ vide";
}
?>

<br>
<a href="../index.php">Retour</a>