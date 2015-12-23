@extends('layouts.master')

@section('content')

    <h1>Blocktype</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $blocktype->id }}</td> <td> {{ $blocktype->description }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection