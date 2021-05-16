
<h2>Information sur l'espèce</h2>




<form action="/species/update/<?= $species->id ?>" method="POST">

    <label for="firstName">Name</label>
    <input type="text" name="name" id="name" value="<?= $species->name ?>">

    <input type="submit" value="Envoyer">
</form>




<button><a href="/species/delete/<?= $species->__get('id'); ?>">Supprimer</a></button>
