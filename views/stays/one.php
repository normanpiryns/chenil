
<div class="single-person-animal page">
    <div class="content-page">

        <!--    Race-->
        <h2>Modifier un séjour</h2>
        <div class="animal-cart-info">

            <form action="/stays/update/<?= $stay->id ?>?fk_animal=<?= $fkAnimal ?>" method="POST">
                <div class="group">
                    <label class="label" for="dateBegin">Date du début</label>
                    <input type="date" name="dateBegin" id="dateBegin" value="<?= $stay->dateBegin; ?>">
                </div>

                <div class="group">
                    <label class="label" for="dateEnd">Date de la fin</label>
                    <input type="date" name="dateEnd" id="dateEnd" value="<?= $stay->dateEnd; ?>">
                </div>

                <input class="btn bg-yellow" type="submit" value="Enregistrer">
            </form>

            <div>
                <a class="btn bg-red" href="/stays/delete/<?= $stay->__get('id'); ?>?fk_animal=<?= $fkAnimal ?>">Supprimer le séjour</a>
            </div>
        </div>
    </div>
</div>

