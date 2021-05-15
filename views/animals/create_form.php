<div>

    <h2>Enregistrer un nouvel animal</h2>

    <form action="/animal/create" method="POST">
        <div>
            <label for="name">Nom</label>
            <input id="name" type="text" name="name"/>
        </div>

        <div>
            <label for="sex">Sexe</label>
            <input id="sex" type="text" name="sex"/>
        </div>

        <div>
            <label for="birthDate">Date de naissance </label>
            <input id="birthDate" type="text" name="birthDate">
        </div>

        <div>
            <label for="fk_race">Race</label>
            <select name="fk_race" id="fk_race">
                <?php foreach ($races as $race): ?>
                    <option value="<?= $race->__get('id'); ?>"><?= $race->__get('name'); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label for="sterilized">Est stérilisé</label>
            <input id="sterilized" type="text" name="sterilized">
        </div>

        <div>
            <label for="chip">Numéro de puce </label>
            <input id="chip" type="text" name="chip">
        </div>

        <input type="submit" value="Enregistrer"/>
    </form>

</div>