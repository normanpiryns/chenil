<?php foreach ($persons as $person): ?>
    <div id="master-presentation" class="animal-presentation" style="margin-bottom: 20px">
        <div class="wrapper-image">
            <img src="/images/person.jpg" alt="">

        </div>
        <div class="wrapper-text">

            <h3><?= $person->firstName ?> <?= $person->lastName ?></h3>
            <p><span class="label">Date de naissance :</span> <span><?= $person->birthDate ?></span></p>
            <p><span class="label">Email :</span> <span><?= $person->email ?></span></p>
            <p><span class="label">Téléphone :</span> <span><?= $person->telephone ?></span></p>


            <p class="container-btn"><a class="btn bg-yellow" style="width: 100%; margin-top: 10px" href="/persons/show/<?= $person->id ?>">Détails</a></p>
        </div>
    </div>
<?php endforeach; ?>