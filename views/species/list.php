<?php if (!empty($species)): ?>

<h2>Liste des espèces</h2>

<table>
    <thead>
    <tr>
        <th>Nom</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($species as $s): ?>
        <tr>
            <td><?= $s->__get('name'); ?></td>
            
            
            <td>
                <button class="btn btn-warning btn-sm"><a href="/species/show/<?= $s->__get('id'); ?>">Voir</a></button>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php endif; ?>



<a href="/species/create_form">Ajouter une nouvelle espèce</a>