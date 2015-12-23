@extends('layouts.master')

@section('content')

    <h1>Savings <a href="{{ route('saving.create') }}" class="btn btn-primary pull-right btn-sm">Add New Saving</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Houses Id</th><th>Bank Name</th><th>Mod</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($savings as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/saving', $item->id) }}">{{ $item->houses_id }}</a></td><td>{{ $item->bank_name }}</td><td>{{ $item->mod }}</td>
                    <td>
                        <a href="{{ route('saving.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['saving.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $savings->render() !!} </div>
    </div>

@endsection
