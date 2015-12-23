@extends('layouts.master')

@section('content')

    <h1>Edit Person</h1>
    <hr/>

    {!! Form::model($person, [
        'method' => 'PATCH',
        'route' => ['person.update', $person->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('person_types_id') ? 'has-error' : ''}}">
                {!! Form::label('person_types_id', 'Person Types Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('person_types_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('person_types_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mail_address_name') ? 'has-error' : ''}}">
                {!! Form::label('mail_address_name', 'Mail Address Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mail_address_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('mail_address_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mail_address_zip') ? 'has-error' : ''}}">
                {!! Form::label('mail_address_zip', 'Mail Address Zip: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mail_address_zip', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('mail_address_zip', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mail_address_city') ? 'has-error' : ''}}">
                {!! Form::label('mail_address_city', 'Mail Address City: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mail_address_city', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('mail_address_city', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mail_address_street') ? 'has-error' : ''}}">
                {!! Form::label('mail_address_street', 'Mail Address Street: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mail_address_street', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('mail_address_street', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mail_address_number') ? 'has-error' : ''}}">
                {!! Form::label('mail_address_number', 'Mail Address Number: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mail_address_number', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('mail_address_number', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email_1') ? 'has-error' : ''}}">
                {!! Form::label('email_1', 'Email 1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::email('email_1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email_1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email_2') ? 'has-error' : ''}}">
                {!! Form::label('email_2', 'Email 2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::email('email_2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email_2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tel_1') ? 'has-error' : ''}}">
                {!! Form::label('tel_1', 'Tel 1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tel_1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('tel_1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tel_2') ? 'has-error' : ''}}">
                {!! Form::label('tel_2', 'Tel 2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tel_2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('tel_2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('date_from') ? 'has-error' : ''}}">
                {!! Form::label('date_from', 'Date From: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('date_from', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('date_from', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('date_to') ? 'has-error' : ''}}">
                {!! Form::label('date_to', 'Date To: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('date_to', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('date_to', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection