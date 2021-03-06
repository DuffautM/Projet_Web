 @extends('template/template')

@section('contenu')
    <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src=@yield('img1') alt="Chania" width="460" height="345" class="car">
      </div>

      <div class="item">
        <img src=@yield('img2') alt="Chania" width="460" height="345" class="car">
      </div>
    
      <div class="item">
        <img src=@yield('img3') alt="Flower" width="460" height="345" class="car">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container">
    <div class="row">
        <h2 id="description">Description :</h2>
        <h2 id="date">Fin d'inscription le {{$evenement->date_activite}}</h2>
    </div>
    {{$evenement->detail_activite}}
    <h5>Participant :</h5>
</div>
@endsection