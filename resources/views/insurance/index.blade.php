@extends('layouts.master')

@section('content')

    <h1>Insurances <a href="{{ route('insurance.create') }}" class="btn btn-primary pull-right btn-sm">Add New Insurance</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Company Name</th><th>Policy</th><th>Cc Id</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($insurances as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/insurance', $item->id) }}">{{ $item->company_name }}</a></td><td>{{ $item->policy }}</td><td>{{ $item->cc_id }}</td>
                    <td>
                        <a href="{{ route('insurance.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['insurance.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $insurances->render() !!} </div>
    </div>

@endsection
