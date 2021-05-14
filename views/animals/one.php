
<h1><?= $animal->name ?></h1>

<h2>Information du maître</h2>



<button class="btn btn-warning btn-sm"><a href="/animals/show/<?= $animal->__get('id'); ?>">Enregistrer</a>
<button class="btn btn-warning btn-sm"><a href="/animals/delete/<?= $animal->__get('id'); ?>">Supprimer</a>