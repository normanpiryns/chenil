<div>

    <h2>Ajouter une nouvelle race</h2>

    <form action="/races/create" method="POST">

        <div>
            <label for="name">Nom de la race</label>
            <input id="name" type="text" name="name"/>
        </div>

        <div>
            <label for="fk_species">Nom de son espèce</label>
            <select name="fk_species" id="fk_species">
                <?php foreach ($species as $specie): ?>
                    <option value="<?= $specie->__get('id'); ?>"><?= $specie->__get('name'); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <input type="submit" value="Enregistrer"/>
    </form>

</div>