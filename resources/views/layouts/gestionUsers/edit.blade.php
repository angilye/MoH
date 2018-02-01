@extends('pages.admin.AdminIndex')

@section('gestion')
    <div class="offset-sm-2 col-sm-8">
    	<br>
		<div class="panel panel-primary">	
			<div class="panel-heading"><b>Modification d'un utilisateur :</b></div>
			<br>
			<div class="panel-body"> 
				<div class="col-sm-12">
					{!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group row {!! $errors->has('name') ? 'has-error' : '' !!}">
						<label for="name" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-10">
							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
					  		{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
						</div>
					</div>
					<div class="form-group row {!! $errors->has('email') ? 'has-error' : '' !!}">
					<label for="email" class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-10">
							{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
							{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
						</div>
					</div>
					<div class="form-group row {!! $errors->has('UIDSteam') ? 'has-error' : '' !!}">
					<label for="UIDSteam" class="col-sm-2 col-form-label">UID Steam</label>
						<div class="col-sm-10">
							{!! Form::text('UIDSteam', null, ['class' => 'form-control', 'placeholder' => 'UIDSteam']) !!}
							{!! $errors->first('UIDSteam', '<small class="help-block">:message</small>') !!}
						</div>
					</div>
					<div class="form-group row">
							<label for="adminlevel" class="col-sm-2 col-form-label {{ $errors->has('adminlevel') ? 'text-danger' : '' }}">Admin Level :</label><br />
							<div class="col-sm-10">
								<select name="adminlevel" id="adminlevel" class="form-control {{ $errors->has('adminlevel') ? 'is-invalid' : '' }}" required="required">
									<option value="" disabled selected>-Actuellement {{$user->adminlevel}}-</option>
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								{!! $errors->first('adminlevel', '<span class="invalid-feedback">:message</span>') !!}
							</div>
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