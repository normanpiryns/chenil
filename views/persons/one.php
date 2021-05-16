<!---->
<!--<h2>Information sur la personne</h2>-->
<!---->
<!---->
<!---->
<!---->
<!--<form action="/persons/update/--><?//= $person->id ?><!--" method="POST">-->
<!---->
<!--    <label for="firstName">Prénom</label>-->
<!--    <input type="text" name="firstName" id="firstName" value="--><?//= $person->firstName ?><!--">-->
<!---->
<!--    <label for="lastName">Nom</label>-->
<!--    <input type="text" name="lastName" id="lastName" value="--><?//= $person->lastName ?><!--">-->
<!---->
<!--    <label for="birthDate">Date de naissance</label>-->
<!--    <input type="date" name="birthDate" id="birthDate" value="--><?//= $person->birthDate ?><!--">-->
<!---->
<!--    <label for="email">E-mail</label>-->
<!--    <input type="text" name="email" id="email" value="--><?//= $person->email ?><!--">-->
<!---->
<!--    <label for="telephone">Téléphone</label>-->
<!--    <input type="text" name="telephone" id="telephone" value="--><?//= $person->telephone ?><!--">-->
<!---->
<!--    <input type="submit" value="Envoyer">-->
<!--</form>-->
<!---->
<!---->
<!---->
<!---->
<!--<button><a href="/persons/delete/--><?//= $person->__get('id'); ?><!--">Supprimer</a></button>-->

<div class="single-person-animal page">
    <div class="content-page">

        <h2>Information du maitre</h2>
        <!--Master -->
        <div class="master-cart-info">

            <div class="group">
                <span class="label">Prénom</span>
                <span>Evelyne</span>
            </div>

            <div class="group">
                <span class="label">Nom</span>
                <span>Joyner</span>
            </div>

            <div class="group">
                <span class="label">Date de naissance</span>
                <span>1970-08-31</span>
            </div>

            <div class="group">
                <span class="label">Email</span>
                <span>ejoyner1@cloudflare.com</span>
            </div>

            <div class="group">
                <span class="label">Téléphone</span>
                <span>0484090853</span>
            </div>
        </div>

        <div style="margin-top: 40px;">
            <a class="link" style="background-color: #aba8a8" routerLink="/create-all">Ajouter un nouveau chien</a>
        </div>

    </div>
</div>


<div class="page">
    <div class="content-page">

        <h2>Ses animaux</h2>

        <div class="animal-presentation">
            <img src="assets/images/chien.jpg" alt="">
            <div class="wrapper-text">
                <h3>Brutus</h3>
                <p><span class="label">Sexe :</span> <span>M</span></p>
                <p><span class="label">Date de naissance :</span> <span>8 octobre 1992</span></p>
                <p><span class="label">Maitre :</span> <span>Emile Cyimena</span></p>
                <p><span class="label">Race :</span> <span>Berger Allemand</span></p>
                <p><span class="label">Sexe :</span> <span>M</span></p>
                <p class="sterilized"><span>Stérilizé</span></p>
                <p class="container-btn"><a class="btn link" routerLink="/single-animal">Détails</a></p>
            </div>
        </div>

    </div>
</div>
