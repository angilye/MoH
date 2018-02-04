@extends('pages.admin.AdminIndex')

@section('gestion')
	<div class="offset-sm-4 col-sm-4">
		<br>
		<div class="panel panel-primary">	
			<div class="panel-heading">Création d'un utilisateur</div>
			<div class="panel-body"> 
				<div class="col-sm-12">
					{!! Form::open(['route' => 'user.store', 'class' => 'form-horizontal panel']) !!}
						<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
							{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
							{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
							{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group {!! $errors->has('UIDSteam') ? 'has-error' : '' !!}">
							{!! Form::text('UIDSteam', null, ['class' => 'form-control', 'placeholder' => 'UIDSteam']) !!}
							{!! $errors->first('UIDSteam', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
							{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mot de passe']) !!}
							{!! $errors->first('password', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group {!! $errors->has('password_confirmation') ? 'has-error' : '' !!}">
							{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmation mot de passe']) !!}
							{!! $errors->first('password_confirmation', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group">
							<label for="adminlevel" class="control-label {{ $errors->has('adminlevel') ? 'text-danger' : '' }}">Admin Level :</label><br />
							<select name="adminlevel" id="adminlevel" class="form-control {{ $errors->has('adminlevel') ? 'is-invalid' : '' }}" required="required">
								<option value="" disabled selected>-Select Level-</option>
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
							{!! $errors->first('adminlevel', '<span class="invalid-feedback">:message</span>') !!}
                    	</div>
						<div class="form-group">
							<label for="role" class="control-label {{ $errors->has('role') ? 'text-danger' : '' }}">role :</label><br />
							<select name="role" id="role" class="form-control {{ $errors->has('role') ? 'is-invalid' : '' }}" required="required">
								<option value="inscrit">Inscrit</option>
								<option value="membre">Membre</option>
								<option value="editeur site">Editeur site</option>
								<option value="moderateur">Moderateur</option>
								<option value="developpeur">Developpeur</option>
								<option value="admin">Admin</option>
								<option value="superadmin">SuperAdmin</option>
							</select>
							{!! $errors->first('role', '<span class="invalid-feedback">:message</span>') !!}
						</div>
						{!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection