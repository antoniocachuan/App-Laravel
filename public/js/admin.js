$(window).ready(function () {
   if ($('.btn-delete').length) {
      $('.btn-delete').click(function() {
         var id = $(this).data('id');
         var form = $('#form-delete');
         var action = form.attr('action').replace('USER_ID', id);
         var row =  $(this).parents('tr'); 
         row.fadeOut(1000);
         if(!confirm("Estás seguro de eliminar al usuario?")){
            $.post(action, form.serialize(), function(result) {
               if (result.success) {
                  setTimeout (function () {
                        alert(result.msg);
                     row.delay(1000).remove();
                  }, 1000);                
               } else {
                   alert ("El registro "  + result.id + " no pudo ser eliminado");
                  row.show();
               }
            }, 'json');
            
         }else{
            event.preventDefault();
         }
      });
   }

});