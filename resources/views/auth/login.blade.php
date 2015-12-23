@extends('layouts.master')

@section('content')
    {!! Form::open(['url' => '/auth/login', 'class' => 'form-horizontal', 'method' => 'POST' ]) !!}
        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
            {!! Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Please enter email']) !!}
                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
            {!! Form::label('password', 'Password: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Please enter password']) !!}
                {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('remember') ? 'has-error' : ''}}">
            {!! Form::label('remember', 'Remember Me: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::checkbox('remember', null, ['class' => 'form-control']) !!}
                {!! $errors->first('remember', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Login', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            <a href="{{ url('password/email') }}">Reset Password</a>
        </div>
    </div>
    {!! Form::close() !!}
@stop