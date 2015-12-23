@extends('layouts.master')

@section('content')

    <h1>Edit Block</h1>
    <hr/>

    {!! Form::model($block, [
        'method' => 'PATCH',
        'route' => ['block.update', $block->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('houses_id') ? 'has-error' : ''}}">
                {!! Form::label('houses_id', 'Houses Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('houses_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('houses_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('block_types_id') ? 'has-error' : ''}}">
                {!! Form::label('block_types_id', 'Block Types Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('block_types_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('block_types_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('sub_lot_number') ? 'has-error' : ''}}">
                {!! Form::label('sub_lot_number', 'Sub Lot Number: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('sub_lot_number', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('sub_lot_number', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('prop_share') ? 'has-error' : ''}}">
                {!! Form::label('prop_share', 'Prop Share: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('prop_share', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prop_share', '<p class="help-block">:message</p>') !!}
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