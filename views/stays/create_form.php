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

                
                
                <input type='hidden' name="fk_animal" value="<?= $id ?>">

                <input class="btn bg-yellow" type="submit" value="Enregistrer">
            </form>

        </div>
    </div>
</div>
