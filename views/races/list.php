<?php //if (!empty($races)): ?>
<!---->
<!--    <h2>Liste des races</h2>-->
<!---->
<!--    <table>-->
<!--        <thead>-->
<!--        <tr>-->
<!--            <th>Nom</th>-->
<!--            <th>Actions</th>-->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        --><?php //foreach ($races as $race): ?>
<!--            <tr>-->
<!--                <td>--><?//= $race->__get('name'); ?><!--</td>-->
<!--                <td>-->
<!--                    <button class="btn btn-warning btn-sm"><a href="/races/show/--><?//= $race->__get('id'); ?><!--">Modifier</a></button>-->
<!--                    <button class="btn btn-warning btn-sm"><a href="/races/delete/--><?//= $race->__get('id'); ?><!--">Supprimer</a></button>-->
<!--                </td>-->
<!--            </tr>-->
<!--        --><?php //endforeach; ?>
<!--        </tbody>-->
<!--    </table>-->
<!---->
<?php //endif; ?>
<!---->
<!--<a href="/races/create_form">Ajouter une nouvelle race</a>-->

<div class="page">
    <div class="content-page">

        <h1>Liste des races</h1>

        <table class="table">
            <!--  Head-->
            <thead>
            <tr>
                <th>Nom</th>
                <th>Espèce</th>
                <th>Action</th>
            </tr>
            </thead>

            <!--  Body-->
            <tbody>
            <tr>
                <td>Border collie</td>
                <td>Canidé</td>
                <td>Modifier Supprimer</td>
            </tr>

            <tr>
                <td>Border collie</td>
                <td>Canidé</td>
                <td>Modifier Supprimer</td>
            </tr>

            <tr>
                <td>Border collie</td>
                <td>Canidé</td>
                <td>Modifier Supprimer</td>
            </tr>

            <tr>
                <td>Border collie</td>
                <td>Canidé</td>
                <td>Modifier Supprimer</td>
            </tr>

            <tr>
                <td>Border collie</td>
                <td>Canidé</td>
                <td>Modifier Supprimer</td>
            </tr>

            <tr>
                <td>Border collie</td>
                <td>Canidé</td>
                <td>Modifier Supprimer</td>
            </tr>

            </tbody>
        </table>
    </div>
</div>
