@if(Session::has('message'))
    <div data-alert class="alert-box success radius">
      
      <strong> {{{Session::get('message')}}} </strong>
  
      <a href="#" class="close">&times;</a>
    </div>
@endif