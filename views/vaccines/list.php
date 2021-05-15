<?php if (!empty($vaccines)): ?>

    <h2>Liste des vaccins</h2>

    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($vaccines as $vaccine): ?>
            <tr>
                <td><?= $vaccine->__get('name'); ?></td>
                <td><?= $vaccine->__get('description'); ?></td>
                <td>
                    <button class="btn btn-warning btn-sm"><a href="/races/show/<?= $vaccine->__get('id'); ?>">Modifier</a></button>
                    <button class="btn btn-warning btn-sm"><a href="/races/delete/<?= $vaccine->__get('id'); ?>">Supprimer</a></button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php endif; ?>

<a href="/races/create_form">Ajouter une nouvelle race</a>
