
<form action="/races/update/<?= $race->id ?>" method="POST">

    <label for="name">Nom</label>
    <input type="text" name="name" id="name" value="<?= $race->name ?>">

    <input type="submit" value="Envoyer">
</form>