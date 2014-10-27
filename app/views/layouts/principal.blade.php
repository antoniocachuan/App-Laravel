@extends('layouts.main')
@section('content')
    <section class="hero">
      <div class="row">
        <div class="large-12 columns">
          <div class="main-wrapper">
            <h1>Health App Game</h1>  
            <hr>
            <br>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="large-6 columns about-box">
          <div class="black-box">
            <h2>Descrubre</h2>
            <p><i> "Que la prevensión sea tu mejor medicina".</i> </p> 
            <p> Conoce más sobre como prevenir las principales enfermedades hoy y vive mejor mañana, solo necesitas 15 minutos por semana.</p> 
            <p>¿Te interesa vivir mejor?</p> 
            <a href="{{ URL::route('user/login') }}" data-reveal-id="Signup" data-reveal-ajax="true" class="secondary small button">Regístrate →</a>
          </div>
        </div>
      </div>
    </section>
    
    <section class="hero-content"> 
    <div class="row">
      
      <div class="large-8 columns about-content">
        <h4>La Salud en Adolescentes</h4>
        <p><i>"Muchas enfermedades graves comienzan en la adolescencia, y pueden causar muerte prematura en fases posteriores de la vida".  <b>OMS, 2014.</b></i></p> 
        <p1>¿Por qué?</p1>
        <p class="justify">
				Los adolescentes y los jóvenes juegan un papel importante en la sociedad, representan 30 % de la población de América Latina. Generalmente los adolescentes son considerados como un grupo "sano" de la población, y como resultado sus necesidades de salud son a menudo pasados ​​por alto. Sin embargo, la mayoría de los hábitos perjudiciales para la salud se adquieren en una etapa temprana, y se manifiestan con mayor severidad en la edad adulta.
			</p>
			<p class="justify">
				Es fundamental para educar a los adolescentes para que puedan evitar los malos resultados de salud, como las enfermedades no transmisibles (por ejemplo, cáncer de pulmón causados por el consumo de tabaco). La protección de la salud y el bienestar de los adolescentes y jóvenes es una prioridad para todos.
      </p>
      </div>
      
      <div class="large-4 columns">
        
        <ul class="small-block-grid-2">
          <li><a href="#"><img alt="Corazon frutas" src="../img/portada/Adolescente-3.jpeg"/></a></li>
          <li><a href="#"><img alt="Cruz roja" src="../img/portada/Adolescente-4.jpg"/></a></li>
          <li><a href="#"><img alt="Cara feliz" src="../img/portada/Adolescente-5.jpg"/></a></li>
          <li><a href="#"><img alt="Adolescente" src="../img/portada/Adolescente-6.png"/></a></li>
        </ul>
      </div>
          
    </div>
    </section>
    <div class="row">
      <div class="large-12 columns">
        <div class="panel">
          <div class="row">
            <div class="large-9 columns">
              <h4>¡Comienza Hoy!</h4>
              <p>Registrate con tu red social favorita.</p>
            </div>
            <div class="large-3 columns">
              <a href="{{ URL::route('user/login') }}" data-reveal-id="Signup" data-reveal-ajax="true" class="radius button right">Regístrate</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <div class="reveal-modal tiny login" id="Signup" data-reveal>
    </div>
@stop  