<?php if (!empty($persons)): ?>

<h2>Liste des personnes</h2>

<table>
    <thead>
    <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Date de naissance</th>
        <th>E-mail</th>
        <th>Numéro de téléphone</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($persons as $person): ?>
        <tr>
            <td><?= $person->__get('firstName'); ?></td>
            <td><?= $person->__get('lastName'); ?></td>
            <td><?= $person->__get('birthDate'); ?></td>
            <td><?= $person->__get('email'); ?></td>
            <td><?= $person->__get('telephone'); ?></td>
            
            
            <td>
                <button class="btn btn-warning btn-sm"><a href="/persons/show/<?= $person->__get('id'); ?>">Voir</a></button>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php endif; ?>



<a href="/persons/create_form">Ajouter une nouvelle personne</a>