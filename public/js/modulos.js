function mostrarMedallasObtenidas(){
        var parametros = {
                "id" : user_id
        };
        $.ajax({
                data:  parametros,
                url:   '/medals_obtained/show',
                type:  'get',
                beforeSend: function () {
                        $("#medallas").html("Cargando Medallas...");
                },
                success:  function (data) {
                   //$("#resultado").html(data.sms + " - " + data.variable);
                   //retorna vista
                   $("#medallas").html(data);
                   //retorna view
                }
        });
}

function mostrarUltimosComentario(){
  var parametros = {
                "id" : user_id
        };
  $.ajax({
                data:  parametros,
                url:   'showlastcomment',
                type:  'post',
                beforeSend: function () {
                        $("#lastComments").html("Cargando...");
                },
                success:  function (data) {
                   //$("#resultado").html(data.sms + " - " + data.variable);
                   //retorna vista
                   $("#lastComments").html(data);
                   //retorna view
                }
        });
}

$( document ).ready(function() {
    mostrarUltimosComentario();
    mostrarMedallasObtenidas();
});