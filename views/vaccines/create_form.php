<div class="single-person-animal page">
    <div class="content-page">
        <h1>Ajout d'un nouveau vaccin</h1>
        <div class="animal-cart-info">

            <form action="/vaccines/create" method="POST">
                <div class="group">
                    <label class="label" for="name">Nom du vaccin</label>
                    <input id="name" type="text" name="name">
                </div>

                <div class="group">
                    <label class="label" for="description">Nom du vaccin</label>
                    <textarea name="description" id="description" cols="30" rows="5"></textarea>
                </div>

                <input class="btn bg-yellow" type="submit" value="Enregistrer">
            </form>

        </div>
    </div>
</div>
