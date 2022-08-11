<?php
// checckbox
$parfums = [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Vanille' => 3
];
// Radio
$cornets = [
    "Pot" => 2, 
    "Cornet" => 3
];
// checkbox
$supplements = [
    'Pépite de chocolat' => 1,
    'Chantilly' => 0.5
];
$title = "Composer votre glace";
$ingredients = [];
$total = 0;

foreach (['parfum', 'supplement'] as $name){
    if(isset($_GET[$name])){
        $liste = $name . 's';
        foreach($_GET[$name] as $value) {
            if(isset($$liste[$value])){
                $ingredients[] = $value;
                $total += $$liste[$value];
            }
        }
    }
}

if(isset($_GET['cornet'])){
    $cornet = $_GET['cornet'];
    if(isset($cornets[$cornet])){
        $ingredients[] = $cornet;
        $total += $cornets[$cornet];
    }
}

require 'function.php';
require 'header.php';
?>






<div class="row p-5">
    <h1 class="mb-4">Composer votre glace</h1>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Votre glace</h5>
                    <ul>
                        <?php foreach($ingredients as $ingredient): ?>
                            <li><?= $ingredient ?></li>
                        <?php endforeach ?>
                    </ul>
                    <p>
                        <strong>Prix: <?= $total ?>€</strong>
                    </p>
                </div>
            </div>
        </div>
    <div class="col-md-8">
        <form action="/glace.php" method="GET" class="mb-4">
            <h2>Choississez vos parfums</h2>
            <?php foreach($parfums as $parfum => $prix): ?>
                <div class="checkbox mb-2">
                    <label>
                        <?= checkbox('parfum', $parfum, $_GET) ?>
                        <?= $parfum ?> - <?= $prix ?>€
                    </label>
                </div>
            <?php endforeach ?>

            <h2>Choississez vos cornets</h2>
            <?php foreach($cornets as $cornet => $prix): ?>
                <div class="checkbox mb-2">
                    <label>
                        <?= radio('cornet', $cornet, $_GET) ?>
                        <?= $cornet ?> - <?= $prix ?>€
                    </label>
                </div>
            <?php endforeach ?>

            <h2>Choississez vos suppléments</h2>
            <?php foreach($supplements as $supplement => $prix): ?>
                <div class="checkbox mb-2">
                    <label>
                        <?= checkbox('supplement', $supplement, $_GET) ?>
                        <?= $supplement ?> - <?= $prix ?>€
                    </label>
                </div>
            <?php endforeach ?>
            
            <button type="submit" class="btn btn-primary mt-5">Composer ma glace</button>
        </form>
    </div>
</div>



<pre>
    <?php var_dump($_GET) ?>
</pre>


<?php require 'footer.php' ?>