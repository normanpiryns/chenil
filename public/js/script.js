$(document).ready(function () {
    let errorMessage = document.getElementById('error-message');

    // Recherche d'un animal
    $('form#form-search-animal').on('submit', function (e) {
        e.preventDefault();

        $('div#animal-presentation').remove();
        $('div#master-presentation').remove();

        let $animalName = $(this).find('input#search-animal').val();
        let data = {
            name: $animalName
        }

        $.post('/animals/search/', data, function () {

        })
            .done(function (result) {
                errorMessage.innerText = '';
                errorMessage.style.display = 'none';

                if (result) {
                    $('div#container-result').append(result) // on ajoute l'animal dans le container
                } else {
                    errorMessage.style.display = 'block';
                    errorMessage.innerText = "Aucun animal n'a été trouvé";
                }
            })
            .fail(function (error) {
                console.log('error', error);
            });
    });

    // Recherche d'un maitre

    $('form#form-search-master').on('submit', function (e) {
        e.preventDefault();

        $('div#master-presentation').remove();
        $('div#animal-presentation').remove();

        let $masterName = $(this).find('input#search-master').val();
        let data = {
            name: $masterName
        }

        $.post('/persons/search/', data, function () {

        })
            .done(function (result) {
                errorMessage.innerText = '';
                errorMessage.style.display = 'none';

                if (result) {
                    $('div#container-result').append(result) // on ajoute l'animal dans le container
                } else {
                    errorMessage.style.display = 'block';
                    errorMessage.innerText = "Aucune personne n'a été trouvé";
                }
            })
            .fail(function (error) {
                console.log('error', error);
            });
    });

});