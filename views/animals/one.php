
<h1><?= $animal->name ?></h1>

<h2>Information sur l'animal</h2>

<!--<p>Nom : --><?//= $animal->name ?><!--</p>-->
<!--<p>Sexe : --><?//= $animal->sex ?><!--</p>-->
<!--<p>Date de naissance : --><?//= $animal->birthDate ?><!--</p>-->
<!--<p>Race : --><?//= $animal->race ?><!--</p>-->
<!--<p>Est stérilisé : --><?//= $animal->sterilized ?><!--</p>-->
<!--<p>Numéro de puce : --><?//= $animal->chip ?><!--</p>-->




<form action="/animal/update/<?= $animal->id ?>" method="POST">

    <label for="name">Nom</label>
    <input type="text" name="name" id="name" value="<?= $animal->name ?>">

    <label for="name">Sexe</label>
    <input type="text" name="sex" id="sex" value="<?= $animal->sex ?>">

    <label for="name">Date de naissance</label>
    <input type="text" name="birthDate" id="birthDate" value="<?= $animal->birthDate ?>">

    <label for="name">Race</label>
    <input type="text" name="fk_race" id="fk_race" value="<?= $animal->race->id ?>">

    <label for="name">Stérilisé</label>
    <input type="text" name="sterilized" id="sterilized" value="<?= $animal->sterilized ?>">

    <label for="chip">Numéro de puce</label>
    <input type="text" name="chip" id="chip" value="<?= $animal->chip ?>">

    <input type="submit" value="Envoyer">
</form>



<h2>Information du maître</h2>

<p><?= $animal->person->firstName ?></p>
<p><?= $animal->person->lastName ?></p>
<p><?= $animal->person->birthDate ?></p>
<p><?= $animal->person->email ?></p>
<p><?= $animal->person->telephone ?></p>


<button><a href="/animals/delete/<?= $animal->__get('id'); ?>">Supprimer</a></button>
