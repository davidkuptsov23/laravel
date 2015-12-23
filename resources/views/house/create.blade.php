@extends('layouts.master')

@section('content')

    <h1>Create New House</h1>
    <hr/>

    {!! Form::open(['route' => 'house.store', 'class' => 'form-horizontal']) !!}

        @include('house.partials.form', ['submitButtonText' => 'Create'])

    {!! Form::close() !!}
@stop