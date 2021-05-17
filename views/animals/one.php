<?php
$v = 0;
$i = 0;
?>
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
                    <select name="sex" id="sex">
                        <option value="<?= $animal->sex ?>" selected="selected">
                            <?= $animal->sex ?>
                        </option>
                            <?php if ($animal->sex == "M") { ?>
                                <option value="F">F</option>
                            <?php } ?>

                        <?php if ($animal->sex == "F") { ?>
                            <option value="M">M</option>
                        <?php } ?>
                    </select>
                </div>

                <div class="group">
                    <label class="label" for="birthDate">Date de naissance</label>
                    <input id="birthDate" type="date" name="birthDate" value="<?= $animal->birthDate ?>">
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

<!-- ADD VACCINE-->
<div class="single-person-animal page">
    <div class="content-page">

        <h2>Ajouter un nouveau vaccin</h2>

        <div class="animal-cart-info">
            <form action="/vaccines/addVaccineToAnimal" style="display: flex; align-items: center">

                <input style="display: none" type="text" name="fk_animal" value="<?= $animal->__get('id'); ?>">

                <div>
                    <label class="label" for="fk_vaccine">Nom du vaccin</label>
                    <select name="fk_vaccine" id="fk_vaccine">
                        <?php foreach ($vaccines as $vaccine): ?>
                            <option value="<?= $vaccine->__get('id'); ?>"><?= $vaccine->__get('name'); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button class="btn bg-yellow" type="submit"
                        style="display: flex; align-items: center; margin-left: 10px; padding: 8px"><i
                            class="fas fa-plus" style="font-size: 20px"></i>
                </button>
            </form>
        </div>

    </div>
</div>


<!--VACCINS LIST-->
<div class="single-person-animal page">
    <div class="content-page">


        <h2>Vaccins administrés</h2>

        <div style="margin-top: 20px; margin-bottom: 20px">
            <a href="" class="btn bg-grey">Ajouter un vaccin</a>
        </div>

        <table class="table">
            <!--  Head-->
            <thead>
            <tr>
                <th>#</th>
                <th>Nom du vaccin</th>
                <th>Description</th>
            </tr>
            </thead>

            <!--  Body-->
            <tbody>
            <?php foreach ($animal->vaccines as $vaccine): $v++ ?>
                <tr>
                    <th><?php echo $v; ?></th>
                    <td><?= $vaccine->name; ?></td>
                    <td><?= $vaccine->description; ?></td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>

    </div>
</div>

<!--SEJOUR-->
<div class="single-person-animal page">
    <div class="content-page">

        <h2>Séjour dans le chenil</h2>

        <div style="margin-top: 20px; margin-bottom: 20px">
            <a href="/stays/create_form/<?= $animal->id ?>" class="btn bg-grey">Nouveau séjour</a>
        </div>

        <table class="table">
            <!--  Head-->
            <thead>
            <tr>
                <th>#</th>
                <th>Début</th>
                <th>Fin</th>
                <th>Actions</th>
            </tr>
            </thead>

            <!--  Body-->
            <tbody>
            <?php foreach ($animal->stays as $stay): $i++ ?>
                <tr>
                    <th><?php echo $i; ?></th>
                    <td><?= $stay->dateBegin; ?></td>
                    <td><?= $stay->dateEnd; ?></td>
                    <td>
                        <a class="btn bg-yellow" href="/stays/show/<?= $stay->__get('id'); ?>?fk_animal=<?= $animal->id; ?>">Modifier</a>
                        <a class="btn bg-red" href="/stays/delete/<?= $stay->__get('id'); ?>?fk_animal=<?= $animal->id; ?>">Supprimer</a>
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

