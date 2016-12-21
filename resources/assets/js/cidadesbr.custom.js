(function ( $ ) {

    $.fn.ufs = function(options) {

        var select = $(this);
        select.selectpicker('destroy');

        var settings = $.extend({
            'default': select.attr('default'),
            'onChange': function(uf){}
        }, options );

        $.get("/admin/ufs", null, function (json) {
            
            var data = [];

            $.each(json, function (key, value) {
                select.append('<option value="' + value.uf + '" '+(settings.default==value.uf?'selected':'')+'>' + value.uf + '</option>');
            });

            select.selectpicker('refresh');

            settings.onChange(select.val());

        }, 'json');

        select.change(function(){
            settings.onChange(select.val());
        });

    };


    $.fn.cidades = function(options) {

        var select = $(this);
        select.selectpicker('destroy');

        var settings = $.extend({
            'default': select.attr('default'),
            'uf': null
        }, options );

        if(settings.uf == null)
            console.warn('Nenhuma UF informada');
        else{

            select.html('<option>Carregando..</option>');

            $.get("/admin/cidades/"+settings.uf, null, function (json) {
                select.html('<option value="">Selecione</option>');

                $.each(json, function (key, value) {
                    select.append('<option value="' + value.id + '" '+((settings.default==value.id || settings.default==value.nome)?'selected':'')+'>' + value.nome + '</option>');
                })

                select.selectpicker('refresh');

            }, 'json');

        }
    };

}( jQuery ));