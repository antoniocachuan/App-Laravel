
function guardarCalificacion(){
        var parametros = {
                "calificacion" : $("#calificacion").val(),
                "idUsuario" : id_user,
                "idActividad":id_activity
        };
        $.ajax({
                data:  parametros,
                url:   'savegrade',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Guardando...");
                },
                success:  function (data) {
                   //$("#resultado").html(data.sms + " - " + data.variable);
                   //retorna vista
                   $("#resultado").html(data);
                   //retorna view
                }
        });
}

$( "#calificacion" ).change(function() {
  guardarCalificacion();
});