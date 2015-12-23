@extends('layouts.master')

@section('content')
    <h1>Edit Account Type</h1>
    <hr/>
    {!! Form::model($accounttype, [
        'method' => 'PATCH',
        'route' => ['accounttype.update', $accounttype->id],
        'class' => 'form-horizontal'
    ]) !!}

        @include('accounttype.partials.form', ['submitButtonText' => 'Update'])

    {!! Form::close() !!}
@stop