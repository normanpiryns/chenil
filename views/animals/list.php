<div class="page">
    <div class="content-page">

        <h1>Liste des animaux</h1>
        <?php if (!empty($animals)): ?>
        <table class="table">
            <!--  Head-->
            <thead>
            <tr>
                <th>Nom</th>
                <th>Sexe</th>
                <th>Stérilisation</th>
                <th>Date de naissance</th>
                <th>Action</th>
            </tr>
            </thead>

            <!--  Body-->
            <tbody>
            <?php foreach ($animals as $animal): ?>
            <tr>
                <td><?= $animal->__get('name'); ?></td>
                <td><?= $animal->__get('sex'); ?></td>
                <td><?= $animal->__get('sterilized'); ?></td>
                <td><?= $animal->__get('birthDate'); ?></td>
                <td>
                    <a href="/animals/show/<?= $animal->__get('id'); ?>" class="link bg-yellow">Voir</a>
                    <a href="">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
