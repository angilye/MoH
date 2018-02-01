@extends('pages.admin.AdminIndex')

@section('gestion')

<style>
.moncercle{
  background:#bfd70e;
  border-radius:50%;
  width:10px;
  height:10px;
  margin-top:10px;
}
.centrerHauteurProgression
{
    margin-top:26px;
}
</style>

    @if(session()->has('ok'))
        <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
    @endif
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Liste des utilisateurs</h3>
        </div>
        
        <table class="table table-striped col-md-12">
            <thead class="thead-light col-md-12">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Raison</th>
                <th scope="col">Poster Par</th>
                <th scope="col">Progression</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Administration</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $contact)
                        @switch($contact->importance)
                            @case(1)
                                    <tr class="table-primary">
                                @break

                            @case(2)
                                    <tr class="table-info">
                                @break

                            @case(3)
                                    <tr class="table-warning">
                                @break

                            @case(4)
                                    <tr class="table-warning">
                                @break

                            @case(5)
                                    <tr class="table-danger">
                                @break

                            @default
                                    <tr class="table-light">
                        @endswitch
                        <th scope="row">{!! $contact->id !!}</th>
                        @switch($contact->raison)
                            @case("navigation")
                                    <td> <strong class="h4">Site: <br> {!! $contact->raison !!} </strong> </td>
                                @break

                            @case("inscription")
                                    <td> <strong class="h4">Site: <br>  {!! $contact->raison !!} </strong> </td>
                                @break

                            @case("connexion")
                                    <td> <strong class="h4">Site: <br>  {!! $contact->raison !!} </strong> </td>
                                @break

                            @case("glitch")
                                    <td> <strong class="h4">Serveur: <br>  {!! $contact->raison !!} </strong> </td>
                                @break

                            @case("bug")
                                    <td> <strong class="h4">Serveur: <br> {!! $contact->raison !!} </strong> </td>
                                @break

                            @case("connexion-serv")
                                    <td> <strong class="h4">Serveur: <br> {!! $contact->raison !!} </strong> </td>
                                @break

                            @default
                                    <td> <strong class="h4">Autre: <br> {!! $contact->raison !!} </strong> </td>
                        @endswitch
                        <td> <strong class="h5"> {!! $contact->name !!} </strong> <br> <div style="display: inline-block" class="moncercle"></div> Online <br> le {!! $contact->created_at->format('d/m \\à H:i') !!}</td>
                        @if($contact->progression>=0 and $contact->progression<=25)
                            <td colspan="2">
                                <div class="progress centrerHauteurProgression">
                                    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: {!! $contact->progression !!}%" aria-valuenow="{!! $contact->progression !!}" aria-valuemin="0" aria-valuemax="100">{!! $contact->progression !!}</div>
                                </div>
                            </td>
                        @elseif($contact->progression>=25 and $contact->progression<=50)
                            <td colspan="2">
                                <div class="progress centrerHauteurProgression">
                                    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: {!! $contact->progression !!}%" aria-valuenow="{!! $contact->progression !!}" aria-valuemin="0" aria-valuemax="100">{!! $contact->progression !!}</div>
                                </div>
                            </td>
                        @elseif($contact->progression>=50 and $contact->progression<=75)
                            <td colspan="2">
                                <div class="progress centrerHauteurProgression">
                                    <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: {!! $contact->progression !!}%" aria-valuenow="{!! $contact->progression !!}" aria-valuemin="0" aria-valuemax="100">{!! $contact->progression !!}</div>
                                </div>
                            </td>
                        @elseif($contact->progression>=75 and $contact->progression<=100)
                            <td colspan="2">
                                <div class="progress centrerHauteurProgression">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: {!! $contact->progression !!}%" aria-valuenow="{!! $contact->progression !!}" aria-valuemin="0" aria-valuemax="100">{!! $contact->progression !!}</div>
                                </div>
                            </td>
                        @endif
                        <td></td>
                        <td style="width:10%; padding-top:28px;">
                            {!! Form::open(['method' => 'DELETE', 'route' => ['ticket.destroy', $contact->id]]) !!}
                                <a href="ticket\{!! $contact->id !!}\edit" class="btn btn-warning" ><i class="fa fa-wrench" aria-hidden="true"></i></a>
                                {!! Form::submit('&#x274C;', ['class' => 'btn btn-danger', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $links !!}
        
    </div>
@endsection