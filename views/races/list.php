<?php $i = 0; ?>
<div class="page">
    <div class="content-page">

        <div style="margin-bottom: 20px">
            <a href="/races/create_form" class="btn bg-grey">Ajouter une nouvelle race</a>
        </div>

        <h1>Liste des races</h1>

        <table class="table">
            <!--  Head-->
            <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Action</th>
            </tr>
            </thead>

            <!--  Body-->
            <tbody>
            <?php if (!empty($races)): ?>
                <?php foreach ($races as $race): $i++  ?>
                    <tr>
                        <th><?php echo $i; ?></th>
                        <td><?= $race->__get('name'); ?></td>
                        <td>
                            <a class="btn bg-yellow" href="/races/show/<?= $race->__get('id'); ?>">Modifier</a>
                            <a class="btn bg-red" href="/races/delete/<?= $race->__get('id'); ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>
