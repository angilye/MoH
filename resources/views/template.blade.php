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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        

        <!-- FontAwesome ajout d'icone-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--Importation style d'ecriture Open Sans sur google-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
        <style>
            body{
                font-family: 'Open Sans', Arial, sans-serif;
            }
            .body{
                padding-top:8em;
            }
            footer{
                font-size:0.8em;
                position: absolute;
                bottom: 30px;
                width: 100%;
                height: 60px;
            }
            
        </style>


    </head>

    <body>

        @include('layouts/partials/_nav')


        @yield('content')

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