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
                    <button><a href="/vaccines/show/<?= $vaccine->__get('id'); ?>">Modifier</a></button>
                    <button><a href="/vaccines/delete/<?= $vaccine->__get('id'); ?>">Supprimer</a></button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php endif; ?>

<a href="/vaccines/create_form">Ajouter un nouveau vaccin</a>
