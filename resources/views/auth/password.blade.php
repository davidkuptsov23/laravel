@extends('layouts.master')

@section('content')
    {!! Form::open(['url' => '/password/email', 'class' => 'form-horizontal', 'method' => 'POST' ]) !!}
    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
        {!! Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Please enter email']) !!}
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Send Password Reset Link', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}
@stop