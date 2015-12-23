@extends('layouts.master')

@section('content')

    <h1>Create New Bank</h1>
    <hr/>

    {!! Form::open(['route' => 'bank.store', 'class' => 'form-horizontal']) !!}

        @include('bank.partials.form', ['submitButtonText' => 'Create'])

    {!! Form::close() !!}
@stop