<div>

    <h2>Ajouter un nouveau vaccin</h2>

    <form  action="/vaccines/create" method="POST">

        <div>
            <label for="name">Nom</label>
            <input id="name" type="text" name="name"/>
        </div>

        <div>
            <label for="description">Description</label>
            <input id="description" type="text" name="description"/>
        </div>

        <input type="submit" value="Enregistrer" />
    </form>

</div>