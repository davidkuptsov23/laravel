@extends('layouts.master')

@section('content')

    <h1>Block</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Houses Id</th><th>Block Types Id</th><th>Sub Lot Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $block->id }}</td> <td> {{ $block->houses_id }} </td><td> {{ $block->block_types_id }} </td><td> {{ $block->sub_lot_number }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection