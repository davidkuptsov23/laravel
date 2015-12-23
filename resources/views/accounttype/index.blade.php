@extends('layouts.master')

@section('styles')
    @include('partials/styles')
@stop

@section('content')
    <h1>Accounttypes
        <a href="{{ route('accounttype.create') }}" class="btn btn-primary pull-right btn-sm">Add New Accounttype</a>
    </h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>S.No</th>
                <th>Code</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($accounttypes as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/accounttype', $item->id) }}">{{ $item->code }}</a></td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ route('accounttype.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['accounttype.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $accounttypes->render() !!} </div>
    </div>
@stop

@section('scripts')
    @include('partials/scripts')
@stop
