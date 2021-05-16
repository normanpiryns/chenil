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
                    <th>Est stérilisé</th>
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

                        <td>
                            <?php if ($animal->sterilized) { ?>
                                <span  style="padding: 2px 8px; background-color: green">Oui</span>
                            <?php } ?>
                            <?php if (!$animal->sterilized) { ?>
                                <span style="padding: 2px 5px; background-color: rgb(181, 25, 29);">Non</span>
                            <?php } ?>
                        </td>

                        <td><?= $animal->__get('birthDate'); ?></td>
                        <td>
                            <a href="/animals/show/<?= $animal->__get('id'); ?>" class="btn bg-yellow">Voir</a>
                            <a href="/animals/delete/<?= $animal->__get('id'); ?>" class="btn bg-red">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>
