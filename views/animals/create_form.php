<div>

    <h2>Enregistrer un nouvel animal</h2>

    <form  action="/animal/create" method="POST">

        <div>
            <label for="FirstName">Nom</label>
            <input class="form-control" id="FirstName" type="text" name="FirstName"/>
        </div>

        <div>
            <label for="LastName">Sexe</label>
            <input class="form-control" id="LastName" type="text" name="LastName"/>
        </div>

        <div>
            <label for="Mail">Race</label>
            <input class="form-control" id="Mail" type="text" name="Mail">
        </div>

        <div>
            <label for="PostalCode">Est stérilisé</label>
            <input id="PostalCode" type="text" name="PostalCode">
        </div>

        <div>
            <label for="Department">Date de naissance </label>
            <input id="Department" type="text" name="Department">
        </div>

        <input type="submit" value="Enregistrer" />
    </form>

</div>