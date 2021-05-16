<!---->
<!--<h1>--><?//= $animal->name ?><!--</h1>-->
<!---->
<!--<h2>Information sur l'animal</h2>-->
<!---->
<!---->
<!---->
<!--<form action="/animals/update/--><?//= $animal->id ?><!--" method="POST">-->
<!---->
<!--    <label for="name">Nom</label>-->
<!--    <input type="text" name="name" id="name" value="--><?//= $animal->name ?><!--">-->
<!---->
<!--    <label for="name">Sexe</label>-->
<!--    <input type="text" name="sex" id="sex" value="--><?//= $animal->sex ?><!--">-->
<!---->
<!--    <label for="name">Date de naissance</label>-->
<!--    <input type="text" name="birthDate" id="birthDate" value="--><?//= $animal->birthDate ?><!--">-->
<!---->
<!--    <label for="name">Race</label>-->
<!--    <input type="text" name="fk_race" id="fk_race" value="--><?//= $animal->race->id ?><!--">-->
<!---->
<!--    <label for="name">Stérilisé</label>-->
<!--    <input type="text" name="sterilized" id="sterilized" value="--><?//= $animal->sterilized ?><!--">-->
<!---->
<!--    <label for="chip">Numéro de puce</label>-->
<!--    <input type="text" name="chip" id="chip" value="--><?//= $animal->chip ?><!--">-->
<!---->
<!--    <input type="submit" value="Envoyer">-->
<!--</form>-->
<!---->
<!---->
<!---->
<!--<h2>Information du maître</h2>-->
<!---->
<!--<p>--><?//= $animal->person->firstName ?><!--</p>-->
<!--<p>--><?//= $animal->person->lastName ?><!--</p>-->
<!--<p>--><?//= $animal->person->birthDate ?><!--</p>-->
<!--<p>--><?//= $animal->person->email ?><!--</p>-->
<!--<p>--><?//= $animal->person->telephone ?><!--</p>-->
<!---->
<!---->
<!--<button><a href="/animals/delete/--><?//= $animal->__get('id'); ?><!--">Supprimer</a></button>-->

<div class="single-person-animal page">
    <div class="content-page">

        <h1>Rodger</h1>

        <!--    Animal-->
        <h2>Information sur l'animal</h2>
        <div class="animal-cart-info">


            <form action="">
                <div class="group">
                    <label class="label" for="name">Nom</label>
                    <input id="name" type="text" value="Rodger">
                </div>

                <div class="group">
                    <label class="label" for="sex">Sexe</label>
                    <input id="sex" type="text" value="Rodger">
                </div>

                <div class="group">
                    <label class="label" for="birthDate">Date de naissance</label>
                    <input id="birthDate" type="text" value="Rodger">
                </div>

                <div class="group">
                    <label class="label" for="race">Race</label>
                    <input id="race" type="text" value="Rodger">
                </div>

                <div class="group">
                    <label class="label" for="sterilized">Stérilisé</label>
                    <input id="sterilized" type="text" value="Rodger">
                </div>

                <div class="group">
                    <label class="label" for="chip">Numéro de puce</label>
                    <input id="chip" type="text" value="Rodger">
                </div>

                <input type="submit" value="Enregistrer">
            </form>

            <div>
                <button class="btn-delete">Supprimer l'animal</button>
            </div>
        </div>
    </div>
</div>

<div class="single-person-animal page">
    <div class="content-page">

        <h2>Séjour dans le chenil</h2>

        <div style="margin-top: 20px; margin-bottom: 20px">
            <a routerLink="" class="link " style="background-color: #4f4f4f">Nouveau séjour</a>
        </div>

        <table class="table">
            <!--  Head-->
            <thead>
            <tr>
                <th>#</th>
                <th>Début</th>
                <th>Fin</th>
            </tr>
            </thead>

            <!--  Body-->
            <tbody>
            <tr>
                <td>1</td>
                <td>8 octobre 2019</td>
                <td>21 mai 2020</td>
            </tr>

            <tr>
                <td>1</td>
                <td>8 octobre 2019</td>
                <td>21 mai 2020</td>
            </tr>

            <tr>
                <td>1</td>
                <td>8 octobre 2019</td>
                <td>21 mai 2020</td>
            </tr>

            <tr>
                <td>1</td>
                <td>8 octobre 2019</td>
                <td>21 mai 2020</td>
            </tr>

            <tr>
                <td>1</td>
                <td>8 octobre 2019</td>
                <td>21 mai 2020</td>
            </tr>

            </tbody>
        </table>


    </div>
</div>


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

            <div style="margin-top: 20px">
                <a class="link" href="" style="background-color: rgb(230, 199, 73);;">Afficher</a>
            </div>

        </div>
    </div>
</div>

