@extends('layouts.master')

@section('content')

    <h1>Accounttype</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>ID.</th>
                <th>Code</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $accounttype->id }}</td>
                <td> {{ $accounttype->code }} </td>
                <td> {{ $accounttype->description }} </td>
            </tr>
            </tbody>
        </table>
    </div>

@stop