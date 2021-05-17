<div class="single-person-animal page">
    <div class="content-page">

        <h1><?= $species->name ?></h1>

        <!--    Race-->
        <h2>Modifier la race sur l'animal</h2>
        <div class="animal-cart-info">

            <form action="/species/update/<?= $species->id ?>" method="POST">
                <div class="group">
                    <label class="label" for="name">Nom</label>
                    <input id="name" type="text" name="name" value="<?= $species->name ?>">
                </div>

                <input class="btn bg-yellow" type="submit" value="Enregistrer">
            </form>

            <div>
                <a class="btn bg-red" href="/species/delete/<?= $species->__get('id'); ?>">Supprimer l'espèce</a>
            </div>
        </div>
    </div>
</div>

