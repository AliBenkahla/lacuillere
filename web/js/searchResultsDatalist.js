'use strict';

(
    function() {
        //alert('ok');

        let inputSearch = $('.input-search');
        inputSearch.on('keyup', onKeyUpInputSearch);


        function onKeyUpInputSearch(e) {
            //alert('onkeyupok');

            let value = $(this).val();
            console.log(value);

            $.ajax({
                data: {'searchValue': value},/*value : variable plus haut*/
                dataType: 'json', /*type de retour qu'on attend*/
                url: '/ajax/datalist', /*dans ajaxcontroller*/
                type: 'post', /*on envoie la requete post pour l'envoyer a la route ajax*/
                success: onSuccessKeyUpInputSearch
            });

            function onSuccessKeyUpInputSearch(response)/*réponse de l'ajax*/
            {
                //console.log(response);
                let datalistSearch = $('#datalist-search');/*celui de la nav*/
                datalistSearch.empty();/*pour vider et recreer a chaque fois*/

                let html = '';
                response.map(function(el){/*equivalent d'un foreach, fonction qui permet de parcourir un tableau*/
                    html += `<option value="${el.name}">`;/*el : element; name : la propriété name de l'element qu'on peut voir dans l'inspecteur*/
                });
                datalistSearch.append(html);/*datalistSearch est la variable juste plus haut. .append c'est pour ajouter a la suite.*/
            }


        }
    }
)();