@extends('pages.admin.AdminIndex')

@section('gestion')
<style>
input[type="range"] {
    position: relative;
    margin-left: 1em;
}
input[type="range"]:after,
input[type="range"]:before {
    position: absolute;
    top: 1em;
    color: #aaa;
}
input[type="range"]:before {
    left:0em;
    content: attr(min);
}
input[type="range"]:after {
    right: 0em;
    content: attr(max);
}
.slidecontainer {
    width: 100%; /* Width of the outside container */
}

.slider {
    -webkit-appearance: none;
    width: 100%;
    height: 10px;
    border-radius: 5px;   
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 15px;
    height: 15px;
    border-radius: 50%; 
    background: #4CAF50;
    cursor: pointer;
}

.slider::-moz-range-thumb {
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: #4CAF50;
    cursor: pointer;
}
#date_modify{
	margin-left: 15%;
}
#url, #range{
    display:none
}
#margeBas
{
	margin-bottom: 25px;
}
</style>

    <div id="margeBas" class="offset-sm-2 col-sm-8">
    	<br>
		@switch($contact->importance)
				@case(1)
						<div class="card bg-light border-primary">
					@break

				@case(2)
						<div class="card bg-light border-info">
					@break

				@case(3)
						<div class="card bg-light border-warning">
					@break

				@case(4)
						<div class="card bg-light border-warning">
					@break

				@case(5)
						<div class="card bg-light border-danger">
					@break

				@default
						<div class="card bg-light">
		@endswitch
		<div class="card-header">
			<b>Modification du Ticket N°{!!$contact->id!!}</b>
		</div>
		<div class="card-body">
			{!! Form::model($contact, ['route' => ['ticket.update', $contact->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
				@switch($contact->raison)
					@case("navigation")
						<div class="form-group row">

							<label for="raison" class="col-sm-2 col-form-label"><h5 class="card-title"><b>Site :</b> </h5></label>
							
							<div class="col-md-4 form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
								{!! Form::text('raison', null, ['class' => 'form-control', 'placeholder' => $contact->raison ]) !!}
								{!! $errors->first('raison', '<small class="help-block">:message</small>') !!}
							</div> 
							
						</div>
						@break

					@case("inscription")
						<div class="form-group row">

							<label for="raison" class="col-sm-2 col-form-label"><h5 class="card-title"><b>Site :</b> </h5></label>
							
							<div class="col-md-4 form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
								{!! Form::text('raison', null, ['class' => 'form-control', 'placeholder' => $contact->raison ]) !!}
								{!! $errors->first('raison', '<small class="help-block">:message</small>') !!}
							</div> 
							
						</div>
						@break

					@case("connexion")
						<div class="form-group row">

							<label for="raison" class="col-sm-2 col-form-label"><h5 class="card-title"><b>Site :</b> </h5></label>
							
							<div class="col-md-4 form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
								{!! Form::text('raison', null, ['class' => 'form-control', 'placeholder' => $contact->raison ]) !!}
								{!! $errors->first('raison', '<small class="help-block">:message</small>') !!}
							</div> 
							
						</div>
						@break

					@case("glitch")
						<div class="form-group row">

							<label for="raison" class="col-sm-2 col-form-label"><h5 class="card-title"><b>Serveur :</b> </h5></label>
							
							<div class="col-md-4 form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
								{!! Form::text('raison', null, ['class' => 'form-control', 'placeholder' => $contact->raison ]) !!}
								{!! $errors->first('raison', '<small class="help-block">:message</small>') !!}
							</div> 
							
						</div>
						@break

					@case("bug")
						<div class="form-group row">

							<label for="raison" class="col-sm-2 col-form-label"><h5 class="card-title"><b>Serveur :</b> </h5></label>
							
							<div class="col-md-4 form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
								{!! Form::text('raison', null, ['class' => 'form-control', 'placeholder' => $contact->raison ]) !!}
								{!! $errors->first('raison', '<small class="help-block">:message</small>') !!}
							</div> 
							
						</div>
						@break

					@case("connexion-serv")
						<div class="form-group row">

							<label for="raison" class="col-sm-2 col-form-label"><h5 class="card-title"><b>Autre :</b> </h5></label>
							
							<div class="col-md-4 form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
								{!! Form::text('raison', null, ['class' => 'form-control', 'placeholder' => $contact->raison ]) !!}
								{!! $errors->first('raison', '<small class="help-block">:message</small>') !!}
							</div> 
							
						</div>
						@break

					@default
						<div class="form-group row">

							<label for="raison" class="col-sm-2 col-form-label"><h5 class="card-title"><b>Autre :</b> </h5></label>
							
							<div class="col-md-4 form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
								{!! Form::text('raison', null, ['class' => 'form-control', 'placeholder' => $contact->raison ]) !!}
								{!! $errors->first('raison', '<small class="help-block">:message</small>') !!}
							</div> 
							
						</div>
				@endswitch
				<hr>
				<p> <u><b>Poster par:</b></u>  <strong class="h5">{!! $contact->name !!} ( {!! $contact->pseudo !!} ) </strong> <br> le {!! $contact->created_at->format('d/m \\à H:i') !!}</p>
				<hr>
			
				<fieldset class="form-group ">
					<div class="row">
						<legend class="col-form-label col-sm-2 pt-0 {{ $errors->has('importance') ? 'text-danger' : '' }}"><b>Importance :</b></legend>
						<div class="col-sm-10">
							<div class="form-check form-check-inline">
								<input class="form-check-input {{ $errors->has('importance') ? 'is-invalid' : '' }}" type="radio" name="importance" id="inlineRadio1" value="1" required>
								<label class="form-check-label" for="inlineRadio1">1</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input {{ $errors->has('importance') ? 'is-invalid' : '' }}" type="radio" name="importance" id="inlineRadio2" value="2">
								<label class="form-check-label" for="inlineRadio2">2</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input {{ $errors->has('importance') ? 'is-invalid' : '' }}" type="radio" name="importance" id="inlineRadio3" value="3">
								<label class="form-check-label" for="inlineRadio3">3</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input {{ $errors->has('importance') ? 'is-invalid' : '' }}" type="radio" name="importance" id="inlineRadio4" value="4">
								<label class="form-check-label" for="inlineRadio4">4</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input {{ $errors->has('importance') ? 'is-invalid' : '' }}" type="radio" name="importance" id="inlineRadio5" value="5">
								<label class="form-check-label" for="inlineRadio5">5</label>
							</div>
						</div>
					</div>
					{!! $errors->first('importance', '<span class="invalid-feedback">:message</span>') !!}
				</fieldset>
				<div class="form-group">
					<label for="message"><b>Message de l'utilisateur :</b></label>
					<textarea name="message" class="form-control" id="contend" rows="10">{!! $contact->message !!}</textarea>
					{!! $errors->first('contend', '<small class="help-block">:message</small>') !!}
				</div>

				<div class="form-group">
					<label for="url" class="control-label {{ $errors->has('url') ? 'text-danger' : '' }}"><b>URL :</b></label>
					<input type="text" name="url" id="url" class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" value="{{ $contact->url }}">
					<a id="URLaffiche" href="{{ $contact->url }}">{{ $contact->url }}</a> <br> <a onclick="test()" id="afficheURL" href="#url">Modifier URL</a>
					{!! $errors->first('url', '<span class="invalid-feedback">:message</span>') !!}
				</div>

				<div class="slidecontainer form-group">
					<label for="progression"><b>Progression de résolution :    <span id="demo"></span></b></label>
					<input type="text" name="progression" id="range" class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" value="{!! $contact->progression !!}">
					<input name:"progression" type="range" min="0" max="100" value="{!! $contact->progression !!}" class="slider" id="progression" step="5">
				</div>
				<br><br>
				{!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
			{!! Form::close() !!}

			<a href="javascript:history.back()" class="btn btn-primary">
				<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
			</a>
		</div>
		
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script type="text/javascript">
		var slider = document.getElementById("progression");
		var output = document.getElementById("demo");
		var output2 = document.getElementById("range");
		output.innerHTML = slider.value; // Display the default slider value
		output2.value = slider.value;

		// Update the current slider value (each time you drag the slider handle)
		slider.oninput = function() {
			output.innerHTML = this.value;
			output2.value = this.value;
		}

		window.onload = function() {  // permet de cocher le bouton radio correspondant a celui enregistrer
			$( "#inlineRadio{!!$contact->importance!!}" ).prop( "checked", true );
		};

		$( "#afficheURL" ).click(function() {
			$( "#URLaffiche" ).hide();
		$( "#url" ).show( "drop", { direction: "down" });
		$( "#URLaffiche" ).hide();
		});
		
	</script>

@endsection