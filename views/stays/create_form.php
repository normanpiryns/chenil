<div class="single-person-animal page">
    <div class="content-page">
        <h1>Nouveau séjour</h1>
        <div class="animal-cart-info">

            <form action="/stays/create" method="POST">
            <div class="group">
                    <label class="label" for="dateBegin">Date de début</label>
                    <input id="dateBegin" type="date" name="dateBegin">
                </div>

                <div class="group">
                    <label class="label" for="dateEnd">Date de fin</label>
                    <input id="dateEnd" type="date" name="dateEnd">
                </div>

                

                <div class="group">
                    <label class="label" for="fk_animal">Nom de l'animal</label>
                    <select name="fk_animal" id="fk_animal">
                        <?php foreach ($animals as $animal): ?>
                            <option value="<?= $animal->__get('id'); ?>"><?= $animal->__get('name'); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <input class="btn bg-yellow" type="submit" value="Enregistrer">
            </form>

        </div>
    </div>
</div>
