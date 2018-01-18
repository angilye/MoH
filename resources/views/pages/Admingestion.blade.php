@extends('template', ['title' => 'Gestion' ])

@section('content')


    <div class="container-fluid h-100">
    <div class="row h-100">
        <div class="col-2 collapse d-md-flex bg-faded pt-2 h-100" id="sidebar">
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="#">Overview</a></li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Gestion</a>
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0" href="">Article</a></li>
                            <li class="nav-item">
                                <a class="nav-link collapsed py-0" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1">Un tout</a>
                                <div class="collapse small" id="submenu1sub1" aria-expanded="false">
                                    <ul class="flex-column nav pl-4">
                                        <li class="nav-item">
                                            <a class="nav-link p-0" href="">
                                                <i class="fa fa-fw fa-clock-o"></i> Publication
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" href="">
                                                <i class="fa fa-fw fa-dashboard"></i> Dashboard
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link p-0" href="">
                                                <i class="fa fa-fw fa-bar-chart"></i> Utilisateur
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Analytics</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Pages</a></li>
            </ul>
        </div>
        <div class="col pt-2">
            <h2>
                <a href="" data-target="#sidebar" data-toggle="collapse" class="hidden-md-up"><i class="fa fa-bars"></i></a>
                Panel Administration
            </h2>
            <h6 class="hidden-sm-down">Sois patient sa arrive</h6>
            <p>Tes impatient dis donc, aller prend ton mal en patience et fais moi un bisous</p>
        </div>
    </div>
</div>


@stop