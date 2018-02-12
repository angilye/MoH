@extends('pages.admin.AdminIndex')

@section('gestion')

	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=g9rkhbsr6lun80yy0ctdu5crs4gyxesj4rcf8cc53p5jx3xp"></script>
  	<script>
	  	tinymce.init({
		selector: 'textarea',
		height: 400,
		menubar: false,
		plugins: [
			'advlist autolink lists link image charmap print preview anchor textcolor',
			'searchreplace visualblocks code fullscreen',
			'insertdatetime media table contextmenu paste code help wordcount'
		],
		toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
		content_css: [
			'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
			'//www.tinymce.com/css/codepen.min.css']
		});
	</script>

	<div class="offset-sm-2 col-sm-6">
		<br>
		<div class="panel panel-primary">	
			<div class="panel-heading">Création d'une Update</div>
			<div class="panel-body"> 
				<div class="col-sm-12">
					{!! Form::open(['route' => 'updates.store', 'class' => 'form-horizontal panel']) !!}
						<div class="form-group row {!! $errors->has('date') ? 'has-error' : '' !!}">
							<label for="date" class="col-sm-2 col-form-label">Date:</label>
							<div class="col-sm-10">
								{!! Form::text('date', null, ['class' => 'form-control', 'placeholder' => '00 JANV.']) !!}
								{!! $errors->first('date', '<small class="help-block">:message</small>') !!}
							</div>
						</div>
						<div class="form-group row {!! $errors->has('title') ? 'has-error' : '' !!}">
						<label for="title" class="col-sm-2 col-form-label">Title:</label>
							<div class="col-sm-10">
								{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
								{!! $errors->first('title', '<small class="help-block">:message</small>') !!}
							</div>
						</div>
						<div class="form-group row {!! $errors->has('sousTitre') ? 'has-error' : '' !!}">
						<label for="sousTitre" class="col-sm-2 col-form-label">Sous Titre:</label>
							<div class="col-sm-10">
								{!! Form::text('sousTitre', null, ['class' => 'form-control', 'placeholder' => 'Sous Titre']) !!}
								{!! $errors->first('sousTitre', '<small class="help-block">:message</small>') !!}
							</div>
						</div>
						<div class="form-group row {!! $errors->has('image') ? 'has-error' : '' !!}">
						<label for="image" class="col-sm-2 col-form-label">Image de Fond:</label>
							<div class="col-sm-10">
								{!! Form::url('image', null, ['class' => 'form-control', 'placeholder' => 'Image de Fond']) !!}
								{!! $errors->first('image', '<small class="help-block">:message</small>') !!}
							</div>
						</div>
						<div class="form-group">
							<label for="contend">Contenu :</label>
							<textarea name="contend" class="form-control" id="contend" rows="10"></textarea>
							{!! $errors->first('contend', '<small class="help-block">:message</small>') !!}
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