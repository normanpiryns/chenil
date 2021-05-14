<h1><?= $pokemon->name ?></h1>
<img src="<?= $pokemon->image ?>">

<h2>Types</h2>
<?php if ($pokemon->types) :
    foreach($pokemon->types as $type): ?>
        <h3><?= $type->name ?></h3>
    <?php endforeach; ?>
<?php else: ?>
    <h3><?= $pokemon->name ?> n'a pas de types</h3>
<?php endif; ?>
<h2>Propriétaire</h2>
<?php if ($pokemon->user) : ?>
    <h3><?= $pokemon->name ?> appartient à <?= $pokemon->user->name ?></h3>
<?php endif; ?>
