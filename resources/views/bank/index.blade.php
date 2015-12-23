@extends('layouts.master')

@section('styles')
    @include('partials/styles')
@stop

@section('content')

    <h1>Banks <a href="{{ route('bank.create') }}" class="btn btn-primary pull-right btn-sm">Add New Bank</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>S.No</th>
                <th>Bank Name</th>
                <th>Bank Address</th>
                <th>Account Number</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($banks as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/bank', $item->id) }}">{{ $item->bank_name }}</a></td>
                    <td>{{ $item->bank_address }}</td>
                    <td>{{ $item->account_number }}</td>
                    <td>
                        <a href="{{ route('bank.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['bank.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $banks->render() !!} </div>
    </div>

@stop

@section('scripts')
    @include('partials/scripts')
@stop
