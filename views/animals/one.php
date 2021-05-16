
<div class="single-person-animal page">
    <div class="content-page">

        <h1><?= $animal->name ?></h1>

        <!--    Animal-->
        <h2>Information sur l'animal</h2>
        <div class="animal-cart-info">

            <form action="/animals/update/<?= $animal->id ?>" method="POST">
                <div class="group">
                    <label class="label" for="name">Nom</label>
                    <input id="name" type="text" value="<?= $animal->name ?>">
                </div>

                <div class="group">
                    <label class="label" for="sex">Sexe</label>
                    <input id="sex" type="text" value="<?= $animal->sex ?>">
                </div>

                <div class="group">
                    <label class="label" for="birthDate">Date de naissance</label>
                    <input id="birthDate" type="text" value="<?= $animal->birthDate ?>">
                </div>

                <div class="group">
                    <label class="label" for="race">Race</label>
                    <input id="birthDate" type="text" value="<?= $animal->race->name ?>">
                </div>

                <div class="group">
                    <label class="label" for="sterilized">Stérilisé</label>
                    <input id="sterilized" type="text" value="<?= $animal->sterilized ?>">
                </div>

                <div class="group">
                    <label class="label" for="chip">Numéro de puce</label>
                    <input id="chip" type="text" value="<?= $animal->chip ?>">
                </div>

                <input class="bg-yellow" type="submit" value="Enregistrer">
            </form>

            <div>
                <a class="bg-red" href="/animals/delete/<?= $animal->__get('id'); ?>">Supprimer le chien</a>
            </div>
        </div>
    </div>
</div>

<div class="single-person-animal page">
    <div class="content-page">

        <h2>Séjour dans le chenil</h2>

        <div style="margin-top: 20px; margin-bottom: 20px">
            <a href="" class="link " style="background-color: #4f4f4f">Nouveau séjour</a>
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
                <span><?= $animal->person->firstName ?></span>
            </div>

            <div class="group">
                <span class="label">Nom</span>
                <span><?= $animal->person->lastName ?></span>
            </div>

            <div class="group">
                <span class="label">Date de naissance</span>
                <span><?= $animal->person->birthDate ?></span>
            </div>

            <div class="group">
                <span class="label">Email</span>
                <span><?= $animal->person->email ?></span>
            </div>

            <div class="group">
                <span class="label">Téléphone</span>
                <span><?= $animal->person->telephone ?></span>
            </div>

            <div style="margin-top: 20px">
                <a class="link bg-yellow" href="">Afficher</a>
            </div>

        </div>
    </div>
</div>

