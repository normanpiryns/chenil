<div class="single-person-animal page">
    <div class="content-page">

        <h2>Information sur le vaccin</h2>

        <div class="animal-cart-info">
            <form action="/vaccines/update/<?= $vaccine->id ?>" method="POST">
                <div class="group">
                    <label class="label" for="name">Nom</label>
                    <input id="name" type="text" name="name" value="<?= $vaccine->name ?>">
                </div>

                <div class="group">
                    <label class="label" for="description">Description</label>

                    <textarea name="description" id="name" cols="30" rows="10"><?= $vaccine->description ?></textarea>

                </div>

                <input class="btn bg-yellow" type="submit" value="Enregistrer">
            </form>

            <div>
                <a class="btn bg-red" href="/vaccines/delete/<?= $vaccine->__get('id'); ?>">Supprimer le vaccin</a>
            </div>
        </div>

    </div>
</div>
