@extends('layouts.master')

@section('content')

    <h1>Create New Account Type</h1>
    <hr/>
    {!! Form::open(['route' => 'accounttype.store', 'class' => 'form-horizontal']) !!}

        @include('accounttype.partials.form', ['submitButtonText' => 'Create'])

    {!! Form::close() !!}
@stop