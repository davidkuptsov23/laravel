@extends('layouts.master')

@section('content')

    <h1>Edit Saving</h1>
    <hr/>

    {!! Form::model($saving, [
        'method' => 'PATCH',
        'route' => ['saving.update', $saving->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('houses_id') ? 'has-error' : ''}}">
                {!! Form::label('houses_id', 'Houses Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('houses_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('houses_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('bank_name') ? 'has-error' : ''}}">
                {!! Form::label('bank_name', 'Bank Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('bank_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('bank_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mod') ? 'has-error' : ''}}">
                {!! Form::label('mod', 'Mod: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mod', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('mod', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('policy_sum') ? 'has-error' : ''}}">
                {!! Form::label('policy_sum', 'Policy Sum: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('policy_sum', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('policy_sum', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('length_months') ? 'has-error' : ''}}">
                {!! Form::label('length_months', 'Length Months: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('length_months', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('length_months', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('monthly_savings') ? 'has-error' : ''}}">
                {!! Form::label('monthly_savings', 'Monthly Savings: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('monthly_savings', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('monthly_savings', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('policy_number') ? 'has-error' : ''}}">
                {!! Form::label('policy_number', 'Policy Number: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('policy_number', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('policy_number', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('account_number') ? 'has-error' : ''}}">
                {!! Form::label('account_number', 'Account Number: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('account_number', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('account_number', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('date_end') ? 'has-error' : ''}}">
                {!! Form::label('date_end', 'Date End: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('date_end', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('date_end', '<p class="help-block">:message</p>') !!}
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