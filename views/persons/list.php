<?php if (!empty($persons)): ?>


<div id="person" class="page">
    <div class="content-page">

        <div class="add-person-link">
            <a href="/persons/create_form" class="link" >Ajouter un propriétaire</a>
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
                <?php foreach ($persons as $person): ?>
           <tr>
               <td><?= $person->__get('firstName'); ?></td>
               <td><?= $person->__get('lastName'); ?></td>
               <td><?= $person->__get('birthDate'); ?></td>
               <td><?= $person->__get('email'); ?></td>
               <td><?= $person->__get('telephone'); ?></td>
               <td>
                   <a class="link" href="/persons/show/<?= $person->__get('id'); ?>">Voir</a>
               </td>
           </tr>
      <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
