var fondo = document.getElementsByClassName("hero");
           
$(fondo).css('background-image','url({{ URL::asset($activity->url_image3 ) }}');