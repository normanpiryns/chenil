

<div class="single-person-animal page">
    <div class="content-page">

        <h2>Information du maitre</h2>
        <!--Master -->
        <div class="master-cart-info">

            <div class="group">
                <span class="label">Prénom</span>
                <span><?= $person->firstName ?></span>
            </div>

            <div class="group">
                <span class="label">Nom</span>
                <span><?= $person->lastName ?></span>
            </div>

            <div class="group">
                <span class="label">Date de naissance</span>
                <span><?= $person->birthDate ?></span>
            </div>

            <div class="group">
                <span class="label">Email</span>
                <span><?= $person->email ?></span>
            </div>

            <div class="group">
                <span class="label">Téléphone</span>
                <span><?= $person->telephone ?></span>
            </div>

            <div style="margin-top: 40px;">
                <a class="btn bg-red" href="/persons/delete/<?= $person->__get('id'); ?>">Supprimer la personne</a>
            </div>

        </div>



        <div style="margin-top: 40px;">
            <a class="btn bg-yellow" href="/animals/create_form/">Ajouter un nouveau chien</a>
        </div>

    </div>
</div>

<?php $animal = new AnimalDao(); ?>

<div class="page">
    <div class="content-page">

        <h2>Ses animaux</h2>
        <?php if (empty($animal->getAnimalsByFkPerson($person->__get('id')))) print("Pas d'animaux associés."); ?>
        <?php foreach($animal->getAnimalsByFkPerson($person->__get('id')) as $result) : ?>
            <div class="animal-presentation">
                <div class="wrapper-image">
                    <img src="/images/dog.jpg" alt="Photo of a dog">
                </div>
                
                <div class="wrapper-text">
                    <h3><?= $result->name ?></h3>
                    <p><span class="label">Sexe :</span><span><?= $result->sex ?></span></p>
                    <p><span class="label">Date de naissance :</span> <span><?= $result->birthDate ?></span></p>
                    <p><span class="label">Race :</span> <span><?= $result->race->__get('name'); ?></span></p>
                    <p class="sterilized"><span><?php ($result->sterilized == 1) ? print("Stérilisé") :  print("Pas Stérilisé"); ?></span></p>
                    <p class="container-btn"><a class="btn bg-yellow" href="/animals/show/<?= $result->id; ?>">Détails</a></p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
