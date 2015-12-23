@extends('layouts.master')

@section('content')

    <h1>Saving</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Houses Id</th><th>Bank Name</th><th>Mod</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $saving->id }}</td> <td> {{ $saving->houses_id }} </td><td> {{ $saving->bank_name }} </td><td> {{ $saving->mod }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection