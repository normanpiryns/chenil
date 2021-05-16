<?php $i = 0; ?>
<div class="page">
    <div class="content-page">

        <div style="margin-bottom: 20px">
            <a class="btn bg-grey" href="/vaccines/create_form">Ajouter un nouveau vaccin</a>
        </div>

        <h1>Liste des vaccins</h1>

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
            <?php if (!empty($vaccines)): ?>
                <?php foreach ($vaccines as $vaccine): $i++ ?>
                    <tr>
                        <th><?php echo $i; ?></th>
                        <td><?= $vaccine->__get('name'); ?></td>
                        <td>
                            <a class="btn bg-yellow" href="/vaccines/show/<?= $vaccine->__get('id'); ?>">Modifier</a>
                            <a class="btn bg-red" href="/vaccines/delete/<?= $vaccine->__get('id'); ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>

