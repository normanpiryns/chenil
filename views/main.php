<div id="home" class="page">
    <div class="content-page">

        <div class="container-search">

            <!--      Search master cart -->
            <div class="wrapper-search master">
                <h2>Trouver un maître</h2>
                <form id="form-search-master">
                    <input type="text" id="search-master" placeholder="Prénom du maître">
                    <input class="btn bg-yellow btn-search" type="submit" value="Rechercher un maître">
                </form>
            </div>

            <!--      Search animal cart-->
            <div class="wrapper-search animal">
                <h2>Trouver un chien</h2>
                <form id="form-search-animal">
                    <input type="text" id="search-animal" placeholder="Nom du chien">
                    <input class="btn bg-yellow btn-search" type="submit" value="Rechercher un chien">
                </form>
            </div>
        </div>

        <div id="container-result" class="container-result">
            <h2>Résultat de la recherche</h2>
            <!--   SPACE FOR AJAX SEARCH RESULT -->
        </div>

        <div>
            <p style="display: none; background-color: #c3c1c1; padding: 10px 100px; color: red" id="error-message"></p>
        </div>

    </div>
</div>
