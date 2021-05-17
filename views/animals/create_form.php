
<div class="single-person-animal page">
    <div class="content-page">
        <h1 style="margin-bottom: 20px">Ajouter un animal</h1>

        <div class="animal-cart-info">
            <form id="form-add-animal" name="form-add-animal" action="/animals/create" method="POST">

                <div class="group" style="display: none">
                    <input id="fk_person" name="fk_person" type="text" value="<?= $fkPerson; ?>">
                </div>


                <div class="group">
                    <label class="label" for="name">Nom</label>
                    <input id="name" name="name" type="text">
                </div>

                <div class="group">
                    <label class="label" for="sex">Sexe</label>
                    <input id="sex" name="sex" type="text">
                </div>

                <div class="group">
                    <label class="label" for="birthDate">Date de naissance</label>
                    <input id="birthDate" name="birthDate" type="text">
                </div>

                <div class="group">
                    <label class="label" for="fk_race">Race</label>
                    <select name="fk_race" id="fk_race">
                        <?php foreach ($races as $race): ?>
                            <option value="<?= $race->__get('id'); ?>"><?= $race->__get('name'); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="group">
                    <label class="label" for="sterilized">Stérilisé</label>
                    <select name="sterilized" id="sterilized">
                            <option value="0" selected="selected">Non</option>
                            <option value="1">Oui</option>
                    </select>
                </div>

                <div class="group">
                    <label class="label" for="chip">Numéro de puce</label>
                    <input id="chip" name="chip" type="text">
                </div>

                <input class="btn bg-yellow" type="submit" value="Enregistrer le chien">
            </form>

            <p id="form-error" style="display: none; color: red">Veuillez encoder tous les champs </p>

        </div>
    </div>
</div>
