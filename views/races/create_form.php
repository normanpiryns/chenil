<!--<div>-->
<!---->
<!--    <h2>Ajouter une nouvelle race</h2>-->
<!---->
<!--    <form action="/races/create" method="POST">-->
<!---->
<!--        <div>-->
<!--            <label for="name">Nom de la race</label>-->
<!--            <input id="name" type="text" name="name"/>-->
<!--        </div>-->
<!---->
<!--        <div>-->
<!--            <label for="fk_species">Nom de son espèce</label>-->
<!--            <select name="fk_species" id="fk_species">-->
<!--                --><?php //foreach ($species as $specie): ?>
<!--                    <option value="--><?//= $specie->__get('id'); ?><!--">--><?//= $specie->__get('name'); ?><!--</option>-->
<!--                --><?php //endforeach; ?>
<!--            </select>-->
<!--        </div>-->
<!---->
<!--        <input type="submit" value="Enregistrer"/>-->
<!--    </form>-->
<!---->
<!--</div>-->

<div class="single-person-animal page">
    <div class="content-page">
        <h1 style="margin-bottom: 20px">Ajouter un maître</h1>
        <!--    Animal-->
        <h2>Information du maître</h2>
        <div class="animal-cart-info">


            <form action="">
                <div class="group">
                    <label class="label" for="name">Prénom</label>
                    <input id="name" type="text" value="Rodger">
                </div>

                <div class="group">
                    <label class="label" for="sex">Nom</label>
                    <input id="sex" type="text" value="Rodger">
                </div>

                <div class="group">
                    <label class="label" for="birthDate">Date de naissance</label>
                    <input id="birthDate" type="text" value="Rodger">
                </div>

                <div class="group">
                    <label class="label" for="race">Email</label>
                    <input id="race" type="text" value="Rodger">
                </div>

                <div class="group">
                    <label class="label" for="sterilized">Téléphone</label>
                    <input id="sterilized" type="text" value="Rodger">
                </div>

                <input type="submit" value="Créer le maître">
            </form>

        </div>
    </div>
</div>
