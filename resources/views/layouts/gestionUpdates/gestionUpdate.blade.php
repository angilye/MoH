@extends('pages.admin.AdminIndex')

@section('gestion')
    @if(session()->has('ok'))
        <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
    @endif
    <div class="panel panel-primary">
        <div class="panel-heading row">
            <h3 class="panel-title">Liste des Updates</h3>
            <form class="form-inline my-2 my-md-0 offset-md-8">
                <input class="form-control" type="text" placeholder="Search">
            </form>
        </div>
        <p><div class='ajax'></div><p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($update as $update)
                    <tr>
                        <td>{!! $update->id !!}</td>
                        <td class="text-primary"><strong>{!! $update->title !!}</strong></td>
                        <td>{!! link_to_route('updates.show', 'Voir', [$update->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                        <td>{!! link_to_route('updates.edit', 'Modifier', [$update->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['updates.destroy', $update->id]]) !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet update ?\')']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- exemple de gestion d'affichage via variable -->
    {{$modif=false}} 
    @if(!$modif)

        {!! link_to_route('updates.create', 'Ajouter une Update', [], ['class' => 'btn btn-info pull-right']) !!}

    @endif
    {!! $links !!}
    
@endsection