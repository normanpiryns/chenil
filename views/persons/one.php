
<h2>Information sur la personne</h2>




<form action="/persons/update/<?= $person->id ?>" method="POST">

    <label for="firstName">Prénom</label>
    <input type="text" name="firstName" id="firstName" value="<?= $person->firstName ?>">

    <label for="lastName">Nom</label>
    <input type="text" name="lastName" id="lastName" value="<?= $person->lastName ?>">

    <label for="birthDate">Date de naissance</label>
    <input type="date" name="birthDate" id="birthDate" value="<?= $person->birthDate ?>">

    <label for="email">E-mail</label>
    <input type="text" name="email" id="email" value="<?= $person->email ?>">

    <label for="telephone">Téléphone</label>
    <input type="text" name="telephone" id="telephone" value="<?= $person->telephone ?>">

    <input type="submit" value="Envoyer">
</form>




<button><a href="/persons/delete/<?= $person->__get('id'); ?>">Supprimer</a></button>
