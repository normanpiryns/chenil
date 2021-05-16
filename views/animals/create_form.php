<!--<div>-->
<!---->
<!--    <h2>Enregistrer un nouvel animal</h2>-->
<!---->
<!--    <form action="/animals/create" method="POST">-->
<!--        <div>-->
<!--            <label for="name">Nom</label>-->
<!--            <input id="name" type="text" name="name"/>-->
<!--        </div>-->
<!---->
<!--        <div>-->
<!--            <label for="sex">Sexe</label>-->
<!--            <input id="sex" type="text" name="sex"/>-->
<!--        </div>-->
<!---->
<!--        <div>-->
<!--            <label for="birthDate">Date de naissance </label>-->
<!--            <input id="birthDate" type="text" name="birthDate">-->
<!--        </div>-->
<!---->
<!--        <div>-->
<!--            <label for="fk_race">Race</label>-->
<!--            <select name="fk_race" id="fk_race">-->
<!--                --><?php //foreach ($races as $race): ?>
<!--                    <option value="--><?//= $race->__get('id'); ?><!--">--><?//= $race->__get('name'); ?><!--</option>-->
<!--                --><?php //endforeach; ?>
<!--            </select>-->
<!--        </div>-->
<!---->
<!--        <div>-->
<!--            <label for="sterilized">Est stérilisé</label>-->
<!--            <input id="sterilized" type="text" name="sterilized">-->
<!--        </div>-->
<!---->
<!--        <div>-->
<!--            <label for="chip">Numéro de puce </label>-->
<!--            <input id="chip" type="text" name="chip">-->
<!--        </div>-->
<!---->
<!--        <input type="submit" value="Enregistrer"/>-->
<!--    </form>-->
<!---->
<!--</div>-->

<div class="single-person-animal page">
    <div class="content-page">
        <h1 style="margin-bottom: 20px">Ajouter un animal</h1>
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

                        <div>
                            <label for="fk_race">Race</label>
                            <select name="fk_race" id="fk_race">
                                <?php foreach ($races as $race): ?>
                                    <option value="<?= $race->__get('id'); ?>"><?= $race->__get('name'); ?></option>
                                <?php endforeach; ?>
                            </select>
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
