<div class="content">

    <h2>Ajouter une personne</h2>

    <form  action="/persons/create" method="post">

        <div class="form-group">
            <label for="firstName">Prénom</label>
            <input class="form-control" id="firstName" type="text" name="firstName"/>
        </div>

        <div class="form-group">
            <label for="lastName">Nom</label>
            <input class="form-control" id="lastName" type="text" name="lastName"/>
        </div>

        <div class="form-group">
            <label for="birthDate">Date de Naissance</label>
            <input class="form-control" id="birthDate" type="date" name="birthDate">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input class="form-control" id="email" type="text" name="email">
        </div>

        <div class="form-group">
            <label for="telephone">Téléphone </label>
            <input class="form-control" id="telephone" type="text" name="telephone">
        </div>

        <input class="btn btn-success mt-5" type="submit" value="Enregistrer" />
    </form>

</div>