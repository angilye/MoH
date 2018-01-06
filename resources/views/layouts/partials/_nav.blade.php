<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('root_path')}}">M|o|H</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('root_path')}}">Acceuil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Arma 3</a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="#">serveur</a>
                <a class="dropdown-item" href="#">stats</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle disabled" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos jeux</a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="#">Squad</a>
                <a class="dropdown-item" href="#">Star citizen</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about_path')}}">About</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search">
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item active">
                <a class="nav-link disabled" href="#">Login <span class="glyphicon glyphicon-log-in"></span><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Register <i class="fa fa-camera-retro"></i></a>
            </li>
        </ul>
        
    </div>
</nav>