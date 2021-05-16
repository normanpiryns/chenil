
<?php foreach ($animals as $animal): ?>
<div id="animal-presentation" class="animal-presentation">
    <div class="wrapper-image">
        <img src="/images/dog.jpg" alt="">

    </div>
    <div class="wrapper-text">

        <h3><?= $animal->name ?></h3>
        <p><span class="label">Sexe :</span> <span><?= $animal->sex ?></span></p>
        <p><span class="label">Date de naissance :</span> <span><?= $animal->birthDate ?></span></p>
        <p><span class="label">Race :</span> <span><?= $animal->race->name ?></span></p>


        <?php if (!$animal->sterilized) { ?>
            <p class="sterilization"><span class="bg-unsterilized">Non stérilisé</span></p>
        <?php } ?>


        <?php if ($animal->sterilized) { ?>
            <p class="sterilization"><span class="bg-sterilized">Stérilisé</span></p>
        <?php } ?>

        <p style="display: flex; align-items: center">
            <span class="label">Maitre :</span>
            <a class="btn bg-green" style="padding: 3px 10px; color: #e2e1e1" href="/persons/show/<?= $animal->person->id ?>"><?= $animal->person->firstName ?> <?= $animal->person->lastName ?></a>
        </p>


        <p class="container-btn"><a class="btn bg-yellow" style="width: 100%; margin-top: 10px" href="/animals/show/<?= $animal->id ?>">Détails</a></p>
    </div>
</div>
<?php endforeach; ?>