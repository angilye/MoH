<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon sur l'onglet-->
        <link rel="icon" type="image/png" href="img/favicon.png" />


        <title>{{ page_title($title ?? '')}}</title> <!-- appel de la fonction dans le fichier "helpers" et test de si la variable title existe ( si non = '' )-->

        <!-- Bootstrap CSS -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
-->

        <!-- FontAwesome ajout d'icone-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--Importation style d'ecriture Open Sans sur google-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
        <style>
            body{
                font-family: 'Open Sans', Arial, sans-serif !important; 
                background-image: url("img/Fond.jpg");
            }
            footer{
                font-size:0.8em;
                height: 60px;
                position: absolute;
                bottom: 0;
                width: 100%;
            }
            .imageCentre {
                margin-top:170px;
            }
            .nav-acceuil{
                background-color: rgba(52, 58, 64, 0.8);
            }
            .imageCentre img:hover
            {
                opacity: 0.9;
                
            }
            /* permet d'afficher une popup d'indication */
            .menu a span{
                position:absolute;
                margin-top:-25px;
                margin-left:-55px;
                color:#09c;
                background:rgba(0,0,0,.9);
                padding:15px;
                border-radius:3px;
                box-shadow:0 0 2px rgba(0,0,0,.5);
                transform:scale(0) rotate(-12deg);
                transition:all .25s;
                opacity:0;        
            }
            a:hover span, a:focus span{
                transform:scale(1) rotate(0);
                opacity:1;        
            }
            
        </style>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body>

            <nav class="navbar navbar-expand-sm navbar-dark nav-acceuil">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto mx-auto">
                        <li class="nav-item {{ set_active_route('root_path') }}"> <!-- Permet de definir l'onglet actif grace a la fonction situe dans helpers -->
                            <a class="nav-link h1" href="{{ route('root_path') }}"><img src="/img/favicon.png" width="50" height="50" alt="">Bienvenue chez la M|o|H<img src="/img/favicon.png" width="50" height="50" alt=""></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="imageCentre menu">
                <a href="{{ route('warzonefr_path') }}"><img width="50%" class="rounded float-left mx-auto warzone" src="img/fondwarzone.png" alt="test"><span>Site {{env('mod')}}</span></a>
                <a href="{{ route('root_path') }}"><img width="50%" class="rounded float-right mx-auto" src="img/Couverture1.png" alt=""><span>Site {{config('app.name')}}</span></a>
            </div>
        
        @include('layouts/partials/_footer')

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
        
        <script src="//code.jquery.com/jquery.js"></script>
        @include('flashy::message')
        
    </body>
</html>