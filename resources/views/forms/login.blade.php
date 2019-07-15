@extends('template.template-login')

@section('content')

    <div id="login-page">
        <div class="container">
            {!! Form::open(array('url' => 'login', 'class' => 'form-login', 'method' => 'post')) !!}
            @csrf
            <h2 class="form-login-heading">L'Annuaire des Projets</h2>
            <div class="login-wrap">
                @if ($ldap != '') <div class="error-message-login">{{ $ldap }}</div><br> @endif
                <div class="form-group">
                    <span class="{!! $errors->has('login') ? 'has-error' : '' !!}"></span>
                    {!! Form::text('login', null, ['size' => '40', 'class' => 'form-control', 'placeholder' => 'Nom d\'utilisateur'])!!}
                    {!! $errors->first('login', '<small class="error-message-login">:message</small>') !!}
                </div>
                <br/>
                <div class="form-group">
                    <div class="{!! $errors->has('password') ? 'has-error' : '' !!}"></div>
                    {!! Form::password('password', ['size' => '40', 'class' => 'form-control', 'placeholder' => 'Mot de passe']) !!}
                    {!! $errors->first('password', '<small class="error-message-login">:message</small>') !!}
                </div>
                <br/><br/>
                <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i>Se connecter</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    @endsection