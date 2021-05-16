<div class="single-person-animal page">
    <div class="content-page">
        <h1>Ajout d'une nouvelle race</h1>
        <div class="animal-cart-info">

            <form action="/races/create" method="POST">
                <div class="group">
                    <label class="label" for="name">Nom de la race</label>
                    <input id="name" type="text" name="name">
                </div>

                <div class="group">
                    <label class="label" for="fk_species">Nom de son espèce</label>
                    <select name="fk_species" id="fk_species">
                        <?php foreach ($species as $specie): ?>
                            <option value="<?= $specie->__get('id'); ?>"><?= $specie->__get('name'); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <input class="btn bg-yellow" type="submit" value="Enregistrer">
            </form>

        </div>
    </div>
</div>
