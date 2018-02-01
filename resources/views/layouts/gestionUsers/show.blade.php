@extends('pages.admin.AdminIndex')

@section('gestion')
    <div class="offset-sm-3 col-sm-6">
    	<br>
		<div class="card text-center">
			<div class="card-header">
				<b>Fiche d'utilisateur :</b>
			</div>
			<div class="card-body">
				<h5 class="card-title">Nom : {{ $user->name }}</h5>
				<hr>
				<p class="card-text">Email : {{ $user->email }}</p>
				<p class="card-text">UIDSteam : {{ $user->UIDSteam }}</p>
				@if($user->adminlevel > 0)
					Administrateur level {{ $user->adminlevel }}
				@endif
				<br><br>
				<a href="javascript:history.back()" class="btn btn-primary">
					<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
				</a>
			</div>
		</div>
	</div>
@endsection

