<?php //if (!empty($animals)): ?>
<!---->
<!--    <h2>Liste des animaux</h2>-->
<!---->
<!--    <table>-->
<!--        <thead>-->
<!--        <tr>-->
<!--            <th>Nom</th>-->
<!--            <th>Sexe</th>-->
<!--            <th>Est stérilisé</th>-->
<!--            <th>Date de naissance</th>-->
<!--            <th>Actions</th>-->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        --><?php //foreach ($animals as $animal): ?>
<!--            <tr>-->
<!--                <td>--><?//= $animal->__get('name'); ?><!--</td>-->
<!--                <td>--><?//= $animal->__get('sex'); ?><!--</td>-->
<!--                <td>--><?//= $animal->__get('sterilized'); ?><!--</td>-->
<!--                <td>--><?//= $animal->__get('birthDate'); ?><!--</td>-->
<!--                <td>-->
<!--                    <button class="btn btn-warning btn-sm"><a href="/animals/show/--><?//= $animal->__get('id'); ?><!--">Voir</a></button>-->
<!--                </td>-->
<!--            </tr>-->
<!--        --><?php //endforeach; ?>
<!--        </tbody>-->
<!--    </table>-->
<!---->
<?php //endif; ?>
<!---->
<!--<a href="/animals/create_form">Ajouter un nouvel animal</a>-->
<!---->
<!--<h2>Navigation</h2>-->
<!---->
<!--<a href="/races/showAll">Race</a>-->
<!--<a href="/vaccines/showAll">Vaccins</a>-->


<div class="page">
    <div class="content-page">

        <h1>Liste des animaux</h1>

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
            <tr>
                <td>Emile</td>
                <td>M</td>
                <td>Stérilisé</td>
                <td>08-10-1992</td>
                <td>Voir Supprimer</td>
            </tr>

            <tr>
                <td>Emile</td>
                <td>M</td>
                <td>Stérilisé</td>
                <td>08-10-1992</td>
                <td>Voir</td>
            </tr>

            <tr>
                <td>Emile</td>
                <td>M</td>
                <td>Stérilisé</td>
                <td>08-10-1992</td>
                <td>Voir</td>
            </tr>

            <tr>
                <td>Emile</td>
                <td>M</td>
                <td>Stérilisé</td>
                <td>08-10-1992</td>
                <td>Voir</td>
            </tr>

            <tr>
                <td>Emile</td>
                <td>M</td>
                <td>Stérilisé</td>
                <td>08-10-1992</td>
                <td>Voir</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
