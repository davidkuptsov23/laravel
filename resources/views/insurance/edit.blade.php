@extends('layouts.master')

@section('content')

    <h1>Edit Insurance</h1>
    <hr/>

    {!! Form::model($insurance, [
        'method' => 'PATCH',
        'route' => ['insurance.update', $insurance->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('company_name') ? 'has-error' : ''}}">
                {!! Form::label('company_name', 'Company Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('company_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('policy') ? 'has-error' : ''}}">
                {!! Form::label('policy', 'Policy: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('policy', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('policy', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cc_id') ? 'has-error' : ''}}">
                {!! Form::label('cc_id', 'Cc Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cc_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cc_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('broker') ? 'has-error' : ''}}">
                {!! Form::label('broker', 'Broker: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('broker', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('broker', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('date_turn') ? 'has-error' : ''}}">
                {!! Form::label('date_turn', 'Date Turn: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('date_turn', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('date_turn', '<p class="help-block">:message</p>') !!}
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