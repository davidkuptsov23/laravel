@extends('layouts.master')

@section('content')

    <h1>People <a href="{{ route('person.create') }}" class="btn btn-primary pull-right btn-sm">Add New Person</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Person Types Id</th><th>Name</th><th>Mail Address Name</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($people as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/person', $item->id) }}">{{ $item->person_types_id }}</a></td><td>{{ $item->name }}</td><td>{{ $item->mail_address_name }}</td>
                    <td>
                        <a href="{{ route('person.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['person.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $people->render() !!} </div>
    </div>

@endsection
