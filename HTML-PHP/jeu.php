<?php
$aDeviner = 150;
require 'header.php'
?>

<div class="d-flex flex-column align-items-center p-5">
    <?php if ($_GET['chiffre'] > $aDeviner): ?>
        <div class="alert alert-danger">
            Votre chiffre est trop grand
        </div>
    <?php elseif ($_GET['chiffre'] < $aDeviner): ?>
        <div class="alert alert-danger">
            Votre chiffre est trop petit
        </div>
    <?php else: ?>
        <div class="alert alert-success">
            Bravo vous avez trouvez le bon chiffre <?= $aDeviner ?>
        </div>
    <?php endif ?>

    <form action="/jeu.php" method="GET">
        <input type="number" name="chiffre" placeholder="entre 0 et 1000">
        <button type="submit">Deviner</button>
    </form>
</div>

<?php require 'footer.php' ?>