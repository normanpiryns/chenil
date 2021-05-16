<div class="page">
    <div class="content-page">

        <div style="margin-bottom: 20px">
            <a href="/species/create_form" class="btn bg-grey">Ajouter une nouvelle espèce</a>
        </div>

        <h1>Liste des espèces</h1>

        <table class="table">
            <!--  Head-->
            <thead>
            <tr>
                <th>Nom</th>
                <th>Action</th>
            </tr>
            </thead>

            <!--  Body-->
            <tbody>
            <?php if (!empty($species)): ?>
                <?php foreach ($species as $s): ?>
                    <tr>
                        <td><?= $s->__get('name'); ?></td>
                        <td>
                            <a class="btn bg-yellow" href="/species/show/<?= $s->__get('id'); ?>">Modifier</a>
                            <a class="btn bg-red" href="/species/delete/<?= $s->__get('id'); ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>
