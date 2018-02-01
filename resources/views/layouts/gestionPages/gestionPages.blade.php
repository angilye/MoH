@extends('pages.admin.AdminIndex')

@section('gestion')
    @if(session()->has('ok'))
        <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
    @endif
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Liste des Pages</h3>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Langue</th>
                    <th>Parent</th>
                    <th>Titre</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $pages)
                    <tr>
                        <td>{!! $pages->id !!}</td>
                        <td class="text-primary"><strong>{!! $pages->SelectLang !!}</strong></td>
                        <td>{!! $pages->parent !!}</td>
                        <td class="text-primary"><strong>{!! $pages->title !!}</strong></td>
                        <td>{!! link_to_route('page.show', 'Voir', [$pages->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                        <td>{!! link_to_route('page.edit', 'Modifier', [$pages->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                        <!-- <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['page.destroy', $pages->id]]) !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                            {!! Form::close() !!}
                        </td> -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection