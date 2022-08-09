<?php
$aDeviner = 150;
$erreur = null;
$success = null;
$value = null;
if (isset($_POST['chiffre'])) {
    $value = (int)$_POST['chiffre'];
    if ($value > $aDeviner){
        $erreur = "Votre chiffre est trop grand";
    } elseif ($value < $aDeviner){
        $erreur = "Votre chiffre est trop petit";
    } else {
        $success = "Bravo vous avez trouvez le bon chiffre <strong>$aDeviner</strong>";
    }
};
require 'header.php'
?>

<div class="d-flex flex-column align-items-center p-5">
    <?php if ($erreur): ?>
        <div class="alert alert-danger">
            <?= $erreur ?>
        </div>
    <?php elseif ($success): ?>
        <div class="alert alert-success">
            <?= $success ?>
        </div>
    <?php endif ?>

    <form action="/jeu.php" method="POST">
        <input type="number" name="chiffre" placeholder="entre 0 et 1000">
        <button type="submit">Deviner</button>
    </form>
</div>



