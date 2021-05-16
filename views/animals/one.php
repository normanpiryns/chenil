<div class="single-person-animal page">
    <div class="content-page">

        <h1><?= $animal->name ?></h1>

        <!--    Animal-->
        <h2>Information sur l'animal</h2>
        <div class="animal-cart-info">

            <form action="/animals/update/<?= $animal->id ?>" method="POST">
                <div class="group">
                    <label class="label" for="name">Nom</label>
                    <input id="name" type="text" name="name" value="<?= $animal->name ?>">
                </div>

                <div class="group">
                    <label class="label" for="sex">Sexe</label>
                    <input id="sex" type="text" name="sex" value="<?= $animal->sex ?>">
                </div>

                <div class="group">
                    <label class="label" for="birthDate">Date de naissance</label>
                    <input id="birthDate" type="text" name="birthDate" value="<?= $animal->birthDate ?>">
                </div>

                <div class="group">
                    <label class="label" for="fk_race">Race</label>
                    <select name="fk_race" id="fk_race">
                        <option value="<?= $animal->race->id ?>" selected="selected">
                            <?= $animal->race->name ?>
                        </option>
                        <?php foreach ($races as $race) { ?>
                            <?php if ($race->id != $animal->race->id) { ?>
                                <option value="<?php echo $race->id; ?>"><?php echo $race->name; ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>

                <div class="group">
                    <label class="label" for="sterilized">Stérilisé</label>
                    <select name="sterilized" id="sterilized">
                        <?php if ($animal->sterilized) { ?>
                        <option value="1" selected="selected">Oui</option>
                            <option value="0">Non</option>
                        <?php } ?>
                        <?php if (!$animal->sterilized) { ?>
                            <option value="0" selected="selected">Non</option>
                            <option value="1">Oui</option>
                        <?php } ?>
                    </select>
                </div>


                <div class="group">
                    <label class="label" for="chip">Numéro de puce</label>
                    <input id="chip" type="text" name="chip" value="<?= $animal->chip ?>">
                </div>

                <input class="btn bg-yellow" type="submit" value="Enregistrer">
            </form>

            <div style="margin-top: 20px">
                <a class="btn bg-red" href="/animals/delete/<?= $animal->__get('id'); ?>">Supprimer le chien</a>
            </div>
        </div>
    </div>
</div>

<div class="single-person-animal page">
    <div class="content-page">

        <h2>Séjour dans le chenil</h2>

        <div style="margin-top: 20px; margin-bottom: 20px">
            <a href="/stays/create" class="btn bg-grey">Nouveau séjour</a>
        </div>
        <?php $stays = new StayDao(); ?>

        <table class="table">
            <!--  Head-->
            <thead>
            <tr>
                <th>#</th>
                <th>Début</th>
                <th>Fin</th>
                <th>Actions<th>
            </tr>
            </thead>

            <!--  Body-->
            <tbody>
            <?php $counter = 1; ?>
            <?php foreach($stays->getStaysByFkAnimal($animal->__get('id')) as $stay): ?>
            <tr>
                <td><?= $counter++ ?></td>
                <td><?= $stay->dateBegin ?></td>
                <td><?= $stay->dateEnd ?></td>
                <td>
                    <a class="btn bg-yellow" href="/stays/show/<?= $stay->__get('id'); ?>">Modifier</a>
                    <a class="btn bg-red" href="/stays/delete/<?= $stay->__get('id'); ?>">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>


    </div>
</div>


<div class="single-person-animal page">
    <div class="content-page">

        <h2>Information du maitre</h2>
        <!--Master -->
        <div class="master-cart-info">
            <div class="group">
                <span class="label">Prénom</span>
                <span><?= $animal->person->firstName ?></span>
            </div>

            <div class="group">
                <span class="label">Nom</span>
                <span><?= $animal->person->lastName ?></span>
            </div>

            <div class="group">
                <span class="label">Date de naissance</span>
                <span><?= $animal->person->birthDate ?></span>
            </div>

            <div class="group">
                <span class="label">Email</span>
                <span><?= $animal->person->email ?></span>
            </div>

            <div class="group">
                <span class="label">Téléphone</span>
                <span><?= $animal->person->telephone ?></span>
            </div>

            <div style="margin-top: 20px">
                <a class="btn bg-yellow" style="padding: 8px 150px" href="/persons/show/<?= $animal->person->id ?>">Afficher</a>
            </div>

        </div>
    </div>
</div>

