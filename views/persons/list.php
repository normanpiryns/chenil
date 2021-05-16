<?php //if (!empty($persons)): ?>
<!---->
<!--<h2>Liste des personnes</h2>-->
<!---->
<!--<table>-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>Prénom</th>-->
<!--        <th>Nom</th>-->
<!--        <th>Date de naissance</th>-->
<!--        <th>E-mail</th>-->
<!--        <th>Numéro de téléphone</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php //foreach ($persons as $person): ?>
<!--        <tr>-->
<!--            <td>--><?//= $person->__get('firstName'); ?><!--</td>-->
<!--            <td>--><?//= $person->__get('lastName'); ?><!--</td>-->
<!--            <td>--><?//= $person->__get('birthDate'); ?><!--</td>-->
<!--            <td>--><?//= $person->__get('email'); ?><!--</td>-->
<!--            <td>--><?//= $person->__get('telephone'); ?><!--</td>-->
<!--            -->
<!--            -->
<!--            <td>-->
<!--                <button class="btn btn-warning btn-sm"><a href="/persons/show/--><?//= $person->__get('id'); ?><!--">Voir</a></button>-->
<!--            </td>-->
<!--        </tr>-->
<!--    --><?php //endforeach; ?>
<!--    </tbody>-->
<!--</table>-->
<!---->
<?php //endif; ?>
<!---->
<!---->
<!---->
<!--<a href="/persons/create_form">Ajouter une nouvelle personne</a>-->


<div id="person" class="page">
    <div class="content-page">

        <div class="add-person-link">
            <a routerLink="/persons/create_form" class="link" >Ajouter un propriétaire</a>
        </div>



        <h1>Liste des propriétaires</h1>

        <table class="table">
            <!--  Head-->
            <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date de naissance</th>
                <th>Email</th>
                <th>Numéro de téléphone</th>
                <th>Action</th>
            </tr>
            </thead>

            <!--  Body-->
            <tbody>
            <tr>
                <td>Emile</td>
                <td>Cyimena</td>
                <td>08-10-1992</td>
                <td>cyimena09@hotmail.com</td>
                <td>0484090853</td>
                <td><a routerLink="/single-person" class="link" style="background-color:  rgb(230, 199, 73);; color: #181818">Voir </a> <a routerLink="/single-person" class="link">
                        Supprimer</a></td>
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
