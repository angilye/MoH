@extends('template', ['title' => 'Contact' ])

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                <h2>Get In Touch</h2>
                <p class="text-muted">If you havin trouble, please contact us with this form.</p>
                
                <form action="{{ route('contact_path') }}" method="POST" novalidate>

                    {{ csrf_field() }} <!-- Token de securité -->

                    <div class="form-group "> 
                        <label for="name" class="control-label {{ $errors->has('name') ? 'text-danger' : '' }}">Name</label><!-- si une error name mettre la classe "text-danger"-->
                        <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" required="required"><!-- si une error name mettre la classe "is-invalid"-->
                        {!! $errors->first('name', '<span class="invalid-feedback">:message</span>') !!} <!-- si une error name mettre le message de l'erreur-->
                    </div>

                    <div class="form-group ">
                        <label for="email" class="control-label {{ $errors->has('email') ? 'text-danger' : '' }}">Email</label>
                        <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" required="required">
                        {!! $errors->first('email', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="form-group ">
                        <label for="raison" class="control-label {{ $errors->has('raison') ? 'text-danger' : '' }}">Raison :</label><br />
                        <select name="raison" id="raison" class="form-control {{ $errors->has('raison') ? 'is-invalid' : '' }}" required="required">
                            <option value="" disabled selected>-Select-</option>
                            <optgroup label="Site">
                            <option value="navigation">Navigation</option>
                            <option value="inscription">Inscription</option>
                            <option value="connexion">Connexion</option>
                            <optgroup label="Serveur">
                            <option value="glitch">Glitch</option>
                            <option value="bug">Bug</option>
                            <option value="connexion-serv">Rejoindre Serveur</option>
                        </select>
                        {!! $errors->first('raison', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <fieldset class="form-group ">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0 {{ $errors->has('email') ? 'text-danger' : '' }}">Importance:</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input {{ $errors->has('importance') ? 'is-invalid' : '' }}" type="radio" name="importance" id="inlineRadio1" value="option1" required>
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input {{ $errors->has('importance') ? 'is-invalid' : '' }}" type="radio" name="importance" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input {{ $errors->has('importance') ? 'is-invalid' : '' }}" type="radio" name="importance" id="inlineRadio3" value="option3">
                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input {{ $errors->has('importance') ? 'is-invalid' : '' }}" type="radio" name="importance" id="inlineRadio4" value="option4">
                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input {{ $errors->has('importance') ? 'is-invalid' : '' }}" type="radio" name="importance" id="inlineRadio5" value="option5">
                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                </div>
                            </div>
                        </div>
                        {!! $errors->first('importance', '<span class="invalid-feedback">:message</span>') !!}
                    </fieldset>

                    <div class="form-group">
                        <label for="url" class="control-label {{ $errors->has('url') ? 'text-danger' : '' }}">URL:</label>
                        <input type="url" name="url" id="url" class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" required="required">
                        {!! $errors->first('url', '<span class="invalid-feedback">:message</span>') !!}
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea name="message" id="message" class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" cols="30" rows="10" required="required"></textarea>
                        {!! $errors->first('message', '<span class="invalid-feedback">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <button class="btn btn-dark btn-block">Submit Enquiry &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
