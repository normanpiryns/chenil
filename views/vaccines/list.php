<?php //if (!empty($vaccines)): ?>
<!---->
<!--    <h2>Liste des vaccins</h2>-->
<!---->
<!--    <table>-->
<!--        <thead>-->
<!--        <tr>-->
<!--            <th>Nom</th>-->
<!--            <th>Description</th>-->
<!--            <th>Actions</th>-->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        --><?php //foreach ($vaccines as $vaccine): ?>
<!--            <tr>-->
<!--                <td>--><?//= $vaccine->__get('name'); ?><!--</td>-->
<!--                <td>--><?//= $vaccine->__get('description'); ?><!--</td>-->
<!--                <td>-->
<!--                    <button><a href="/vaccines/show/--><?//= $vaccine->__get('id'); ?><!--">Modifier</a></button>-->
<!--                    <button><a href="/vaccines/delete/--><?//= $vaccine->__get('id'); ?><!--">Supprimer</a></button>-->
<!--                </td>-->
<!--            </tr>-->
<!--        --><?php //endforeach; ?>
<!--        </tbody>-->
<!--    </table>-->
<!---->
<?php //endif; ?>
<!---->
<!--<a href="/races/create_form">Ajouter un nouveau vaccin</a>-->

<div class="page">
    <div class="content-page">

        <h1>Liste des vaccins</h1>

        <table class="table">
            <!--  Head-->
            <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>

            <!--  Body-->
            <tbody>
            <tr>
                <td>Maladie de carré</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut delenitiqu</td>
                <td>Modifier supprimer</td>
            </tr>

            <tr>
                <td>Maladie de carré</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut delenitiqu</td>
                <td>Modifier supprimer</td>
            </tr>

            <tr>
                <td>Maladie de carré</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut delenitiqu</td>
                <td>Modifier supprimer</td>
            </tr>

            <tr>
                <td>Maladie de carré</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut delenitiqu</td>
                <td>Modifier supprimer</td>
            </tr>

            <tr>
                <td>Maladie de carré</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut delenitiqu</td>
                <td>Modifier supprimer</td>
            </tr>

            <tr>
                <td>Maladie de carré</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut delenitiqu</td>
                <td>Modifier supprimer</td>
            </tr>

            </tbody>
        </table>
    </div>
</div>

