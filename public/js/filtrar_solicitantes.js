$(function () {
    if ($('#cidade').val() !== '') {
        var cidade_id = $('#cidade').val();
        var solicitante = $("#solicitante_id");
        filtrar_solicitantes(cidade_id, solicitante);
    }

    $('.js-single-cidades').on('change', function () {
        var cidade_id = $('#cidade').val();
        var solicitante = $("#solicitante_id");
        filtrar_solicitantes(cidade_id, solicitante);
    });

    function filtrar_solicitantes(cidade_id, solicitante) {
        
        $.ajax('solicitantes/cidade/' + cidade_id, {
            method: "GET",
            processData: false,
            contentType: false,
            dataType: "JSON",
            success(data) {
                solicitante.html("");
                $.each(data, function (i, solicitante) {
                    $("#solicitante_id").append($('<option>', {
                        value: solicitante.id,
                        text: solicitante.nome
                    }));
                });
            },
            error() {
                solicitante.html("");
            },
        });
    }
});


