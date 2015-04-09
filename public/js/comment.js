function guardarComentario(){
        var parametros = {
                "comment" : $("#commentBox").val(),
                "idUsuario" : id_user,
                "idActividad":id_activity
        };
        $.ajax({
                data:  parametros,
                url:   'savecomment',
                type:  'post',
                beforeSend: function () {
                        $("#result").html("Guardando...");
                },
                success:  function (data) {
                   //$("#resultado").html(data.sms + " - " + data.variable);
                   //retorna vista
                   $("#result").html(data);
                   $("#commentBox").val("");
                   //retorna view
                }
        });
}

function mostrarComentario(){
  var parametros = {
                "idActividad":id_activity
        };
  $.ajax({
                data:  parametros,
                url:   'showcomment',
                type:  'post',
                beforeSend: function () {
                        $("#comentarios").html("Cargando...");
                },
                success:  function (data) {
                   //$("#resultado").html(data.sms + " - " + data.variable);
                   //retorna vista
                   $("#comentarios").html(data);
                   //retorna view
                }
        });
}


$( "#sendComment" ).click(function() {
  guardarComentario();
});

$( "#showComments" ).click(function() {
  mostrarComentario();
});
