@extends('layouts.master')

@section('content')

    <h1>Edit House</h1>
    <hr/>

    {!! Form::model($house, [
        'method' => 'PATCH',
        'route' => ['house.update', $house->id],
        'class' => 'form-horizontal'
    ]) !!}

        @include('house.partials.form', ['submitButtonText' => 'Update'])

    {!! Form::close() !!}

@stop