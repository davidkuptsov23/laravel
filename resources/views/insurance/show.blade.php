@extends('layouts.master')

@section('content')

    <h1>Insurance</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Company Name</th><th>Policy</th><th>Cc Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $insurance->id }}</td> <td> {{ $insurance->company_name }} </td><td> {{ $insurance->policy }} </td><td> {{ $insurance->cc_id }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection