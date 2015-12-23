@extends('layouts.master')

@section('styles')
    @include('partials/styles')
@stop

@section('content')

    <h1>Houses <a href="{{ route('house.create') }}" class="btn btn-primary pull-right btn-sm">Add New House</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>S.No</th>
                <th>House Code</th>
                <th>Lot Number</th>
                <th>Zip</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($houses as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/house', $item->id) }}">{{ $item->house_code }}</a></td>
                    <td>{{ $item->lot_number }}</td>
                    <td>{{ $item->zip }}</td>
                    <td>
                        <a href="{{ route('house.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['house.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $houses->render() !!} </div>
    </div>

@stop

@section('scripts')
    @include('partials/scripts')
@stop
