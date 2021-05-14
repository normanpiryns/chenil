<?php if (!empty($animals)): ?>

    <h2>Liste des animaux</h2>

    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Sexe</th>
            <th>Est stérilisé</th>
            <th>Date de naissance</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($animals as $animal): ?>
            <tr>
                <td><?= $animal->__get('name'); ?></td>
                <td><?= $animal->__get('sex'); ?></td>
                <td><?= $animal->__get('sterilized'); ?></td>
                <td><?= $animal->__get('birthDate'); ?></td>
                <td>
                    <button class="btn btn-warning btn-sm"><a href="/animals/show/<?= $animal->__get('id'); ?>">Voir</a></button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php endif; ?>

<h2>COucou</h2>

<a href="/animals/create_form">Ajouter un nouvel animal</a>