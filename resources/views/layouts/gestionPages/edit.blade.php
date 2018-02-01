@extends('pages.admin.AdminIndex')

@section('gestion')
    <div class="offset-sm-2 col-sm-8">
    	<br>
		<div class="panel panel-primary">	
			<div class="panel-heading">Modification d'une Page</div>
			<div class="panel-body"> 
				<div class="col-sm-12">
					{!! Form::model($pages, ['route' => ['page.update', $pages->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
					  	{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'title']) !!}
					  	{!! $errors->first('title', '<small class="help-block">:message</small>') !!}
					</div>
                    <div class="form-group">
                        <label for="contend">Contenu :</label>
                        <textarea name="contend" class="form-control" id="contend" rows="10">{!! $pages->contend !!}</textarea>
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