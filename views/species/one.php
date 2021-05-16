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

                <div class="group">
                    <label class="label" for="species">Espèce</label>
                    <p>AJOUTER L4SPECE</p>
                </div>

                <input class="btn bg-yellow" type="submit" value="Enregistrer">
            </form>

            <div>
                <a class="btn bg-red" href="/races/delete/<?= $race->__get('id'); ?>">Supprimer la race</a>
            </div>
        </div>
    </div>
</div>

