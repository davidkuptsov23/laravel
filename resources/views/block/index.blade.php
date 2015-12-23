@extends('layouts.master')

@section('content')

    <h1>Blocks <a href="{{ route('block.create') }}" class="btn btn-primary pull-right btn-sm">Add New Block</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Houses Id</th><th>Block Types Id</th><th>Sub Lot Number</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($blocks as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/block', $item->id) }}">{{ $item->houses_id }}</a></td><td>{{ $item->block_types_id }}</td><td>{{ $item->sub_lot_number }}</td>
                    <td>
                        <a href="{{ route('block.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['block.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $blocks->render() !!} </div>
    </div>

@endsection
