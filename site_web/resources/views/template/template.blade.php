<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <div class="row">
                <a href="home"><img src="{!!asset('img/logo_cesi.jpg')!!}" alt="Logo du cesi" class=" col-xs-offset-1 col-xs-2" id="logo"></a>
                <h1 id="title" class="col-xs-offset-6">CESI</h1>
            </div>
        </header>
        
        <nav>
            <div class="row">
            <ul class="nav navbar-nav col-xs-3">
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                  Évènement
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="event">Voir les événements</a></li>
                  <li><a href="createEv">Proposer une idée</a></li>
                </ul>
              </li>
            </ul>
            
            <ul class="nav navbar-nav col-xs-3">
              <li class="dropdown">
                <a href="goodies" class="dropdown-toggle">
                  Goodies
                </a>
              </li>
            </ul>
                
            <ul class="nav navbar-nav col-xs-3">
              <li class="dropdown">
                <a href="club" class="dropdown-toggle" data-toggle="dropdown">
                  Club
                    <span class="caret"></span>
                </a>
                  <ul class="dropdown-menu" role="menu">
                  <li><a href="club">Voir les clubs</a></li>
                  <li><a href="createClub">Créer un club</a></li>
                </ul>
              </li>
            </ul>
                
            <ul class="nav navbar-nav col-xs-3">
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                  Profil
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="login">Connection</a></li>
                  <li><a href="profil">Voir le profil de</a></li>
                  <li class="divider"></li>
                  <li><a href="editProfil">Mon profil</a></li>
                </ul>
              </li>
            </ul>
            </div>
        </nav>
        @yield('titre')
        @yield('contenu')
        
        <footer id="mention">
                <p class="center">Mentions légales</p>
        
        </footer>
        
        <script>
            var timerIn = 200;
var timerOut = 200;
$('ul.nav li.dropdown').hover(function() {
    $(this).find('> .dropdown-menu').stop(true, true).fadeIn(timerIn);
    $(this).addClass('open');
}, function() {
    $(this).find('> .dropdown-menu').stop(true, true).fadeOut(timerOut);
    $(this).removeClass('open');
});
        
        
        </script>
    </body>
</html>