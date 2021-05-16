
<div class="single-person-animal page">
    <div class="content-page">
        <h1 style="margin-bottom: 20px">Ajouter un maître</h1>
        
        <h2>Information du maître</h2>
        <div class="animal-cart-info">


            <form action="/persons/create/" method="POST">
                <div class="group">
                    <label class="label" for="firstName">Prénom</label>
                    <input id="firstName" type="text" name="firstName">
                </div>

                <div class="group">
                    <label class='label' for="lastName">Nom</label>
                    <input id="lastName" type="text" name="lastName"/>
                </div>

                <div class="group">
                    <label class="label" for="birthDate">Date de Naissance</label>
                    <input id="birthDate" type="date" name="birthDate">
                </div>

                <div class="group">
                    <label class="label" for="email">E-mail</label>
                    <input  id="email" type="text" name="email">
                </div>

                <div class="group">
                    <label class="label" for="telephone">Téléphone </label>
                    <input  id="telephone" type="text" name="telephone">
                </div>

                <input type="submit" value="Créer le maître">
            </form>

        </div>
    </div>
</div>
