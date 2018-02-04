@extends('pages.admin.AdminIndex')

@section('gestion')
    @if(session()->has('ok'))
        <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
    @endif
    <div class="panel panel-primary">
        <div class="panel-heading row">
            <h3 class="panel-title">Liste des utilisateurs</h3>
            <form class="form-inline my-2 my-md-0 offset-md-8">
                <input class="form-control" type="text" placeholder="Search">
            </form>
        </div>
        <p><div class='ajax'></div><p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{!! $user->id !!}</td>
                        <td class="text-primary"><strong>{!! $user->name !!}</strong></td>
                        <td>{!! link_to_route('user.show', 'Voir', [$user->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                        <td>{!! link_to_route('user.edit', 'Modifier', [$user->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
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

        {!! link_to_route('user.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info pull-right']) !!}

    @endif
    {!! $links !!}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
    
    jQuery(document).ready(function(e){        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '<?php echo csrf_token(); ?>'
            }
        });

        $.ajax({
	        url: '/ajax',
            type: 'POST',
            data: {
					
            },
                
	        dataType: 'JSON',
            success: function (data) {
					
                $('.ajax').empty();
                $('.ajax').append('Nbrs d utilisateur: ' + data);

            },
            error: function (e) {
                //console.log(e.responseText);
            }
        });
    });
</script>
    
@endsection