@extends('layouts.master')

@section('content')

    <h1>Person</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Person Types Id</th><th>Name</th><th>Mail Address Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $person->id }}</td> <td> {{ $person->person_types_id }} </td><td> {{ $person->name }} </td><td> {{ $person->mail_address_name }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection