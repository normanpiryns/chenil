$(document).ready(function () {
    let containerResult = document.getElementById('container-result');

    console.log("LE document est pret");
    $('form#form-search-animal').on('submit', function (e) {
        e.preventDefault();

        $('div#animal-presentation').remove();

        let $animalName = $(this).find('input#search-animal').val();
        let data = {
            name: $animalName
        }

        $.post('/animals/search/', data, function () {

        })
            .done(function (result) {
                $('div#container-result').append(result) // on ajoute l'animal dans le container

            })
            .fail(function (error) {
                console.log('error', error);

            });
         });

    // $('form').on('submit', function (e) {
    //     e.preventDefault();
    //     console.log("Recherche d'un pokémon");
    //     let resultElement = document.getElementById('result');
    //     let $search = $(this).find('input#search').val();
    //
    //     if ($search === '') {
    //         resultElement.style.display = 'none';
    //         errorMessage.innerText = "Veuillez entrer un pokémon.";
    //     } else {
    //         $.get(apiUrl + $search, function () {
    //             // ce bloc de code ne fonctionne qu'en cas de succès
    //         })
    //             .done(function (result) {
    //                 // on vide le contenu du précédent résultat s'il existe
    //                 errorMessage.innerText = '';
    //                 $('#types').empty();
    //                 $('#abilities').empty();
    //
    //                 // recupération du resultat
    //                 pokemonId = result.id;
    //                 pokemon = result.name;
    //                 spriteURL = result.sprites.front_default;
    //                 // affichage du nom du pokémon et de son image
    //                 $('h3#name').text(result.name);
    //                 $('img#sprite').attr('src', result.sprites.front_default);
    //
    //                 // recupération des compétences et création d'une balise li
    //                 result.types.forEach(element => {
    //                     let ul = document.getElementById('types');
    //                     let li = document.createElement("li");
    //                     li.innerText = element.type.name;
    //                     ul.append(li);
    //                 })
    //
    //                 // recupération des compétences et création d'une balise li
    //                 result.abilities.forEach(element => {
    //                     let ul = document.getElementById('abilities');
    //                     let li = document.createElement("li");
    //                     li.innerText = element.ability.name;
    //                     ul.append(li);
    //                 })
    //                 // une fois le contenu chargé on l'affiche
    //                 resultElement.style.display = 'flex';
    //             })
    //             .fail(function (error) {
    //                 console.log('error', error);
    //                 resultElement.style.display = 'none';
    //                 errorMessage.innerText = "Désolé ce pokémon est introuvable.";
    //             });
    //     }
    // });

});