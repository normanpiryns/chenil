<?php //if (!empty($stays)): ?>
<!---->
<!--<h2>Liste des séjours</h2>-->
<!---->
<?php //$animal = new AnimalDao(); ?>
<!---->
<!--<table>-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>Date début</th>-->
<!--        <th>Date fin</th>-->
<!--        <th>Animal</th>-->
<!--        -->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php //foreach ($stays as $stay): ?>
<!--        <tr>-->
<!--            <td>--><?//= $stay->__get('dateBegin'); ?><!--</td>-->
<!--            <td>--><?//= $stay->__get('dateEnd'); ?><!--</td>-->
<!--            <td>--><?//= $animal->getAnimalById($stay->__get('fk_animal'))->name ; ?><!--</td>            -->
<!--            <td>-->
<!--                <button class="btn btn-warning btn-sm"><a href="/stays/show/--><?//= $stay->__get('id'); ?><!--">Voir</a></button>-->
<!--            </td>-->
<!--        </tr>-->
<!--    --><?php //endforeach; ?>
<!--    </tbody>-->
<!--</table>-->
<!---->
<?php //else: echo "Pas de séjours dans la base de donnée." ?>
<?php //endif; ?>



