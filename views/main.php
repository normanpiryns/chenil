<!--<ul>-->
<!--    <li>-->
<!--        <a href='/animals/index'>Animal</a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a href='/persons/index'>Person</a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a href='/species/index'>Species</a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a href='/vaccines/index'>Vaccine</a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a href='/stays/index'>Stay</a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a href='/races/index'>Race</a>-->
<!--    </li>-->
<!--    -->
<!--</ul>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chenil</title>
    <link rel="stylesheet" href="/views/css/styles.css">
</head>
<body>


<div id="home" class="page">
    <div class="content-page">

        <div class="container-search">

            <!--      Search master cart -->
            <div class="wrapper-search master">
                <h2>Trouver un maître</h2>
                <form action="">
                    <input type="text">
                    <input class="btn" type="submit" value="Rechercher un maître">
                </form>
            </div>

            <!--      Search animal cart-->
            <div class="wrapper-search animal">
                <h2>Trouver un chien</h2>
                <form action="">
                    <input type="text">
                    <input class="btn" type="submit" value="Rechercher un chien">
                </form>
            </div>
        </div>

        <div class="container-result">
            <h2>Résultat de la recherche</h2>
            <!--      Search result cart-->
            <div class="animal-presentation">
                <div class="wrapper-image">
                    <img src="/images/dog.jpg" alt="">

                </div>
                <div class="wrapper-text">
                    <h3>Brutus</h3>
                    <p><span class="label">Sexe :</span> <span>M</span></p>
                    <p><span class="label">Date de naissance :</span> <span>8 octobre 1992</span></p>
                    <p><span class="label">Maitre :</span> <span>Emile Cyimena</span></p>
                    <p><span class="label">Race :</span> <span>Berger Allemand</span></p>
                    <p><span class="label">Sexe :</span> <span>M</span></p>
                    <p class="sterilized"><span>Stérilizé</span></p>
                    <p class="container-btn"><a class="btn link" href='/animals/one'>Détails</a></p>
                </div>
            </div>
        </div>

    </div>
</div>
