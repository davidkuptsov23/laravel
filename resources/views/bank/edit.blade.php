@extends('layouts.master')

@section('content')
    <h1>Edit Bank</h1>
    <hr/>

    {!! Form::model($bank, [
        'method' => 'PATCH',
        'route' => ['bank.update', $bank->id],
        'class' => 'form-horizontal'
    ]) !!}

        @include('bank.partials.form', ['submitButtonText' => 'Update'])

    {!! Form::close() !!}

@stop