<div class="single-person-animal page">
    <div class="content-page">
       
        <h2>Modifier la personne</h2>
        <!-- ... -->
        <div class="master-cart-info">
            

            <form action="/persons/update/<?= $person->id ?>" method="POST">
            <div class="group">
                <label class="label" for="firstName">Prénom</label>
                <input type="text" name="firstName" id="firstName" value="<?= $person->firstName ?>">
            </div>

            <div class="group">
                <label class="label" for="lastName">Nom</label>
                <input type="text" name="lastName" id="lastName" value="<?= $person->lastName ?>">
            </div>

            <div class="group">
                <label class="label" for="birthDate">Date de naissance</label>
                <input type="date" name="birthDate" id="birthDate" value="<?= $person->birthDate ?>">
            </div>

            <div class="group">
                <label class="label" for="email">E-mail</label>
                <input type="text" name="email" id="email" value="<?= $person->email ?>">
            </div>

            <div class="group">
                <label class="label" for="telephone">Téléphone</label>
                <input type="text" name="telephone" id="telephone" value="<?= $person->telephone ?>">
            </div>

            <input class="btn bg-yellow" type="submit" value="Modifier">

            </form>
        </div>
        

    </div>

</div>












