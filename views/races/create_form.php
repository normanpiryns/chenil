<div>

    <h2>Ajouter une nouvelle race</h2>

    <form action="/races/create" method="POST">

        <div>
            <label for="name">Nom de la race</label>
            <input id="name" type="text" name="name"/>
        </div>

        <div>
            <label for="fk_species">Nom de l'espèce</label>
            <input id="fk_species" type="text" name="fk_species"/>
        </div>

        <input type="submit" value="Enregistrer"/>
    </form>

</div>