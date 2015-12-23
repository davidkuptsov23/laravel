@extends('layouts.master')

@section('content')

    <h1>House</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>ID.</th>
                <th>House Code</th>
                <th>Lot Number</th>
                <th>Zip</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $house->id }}</td>
                <td> {{ $house->house_code }} </td>
                <td> {{ $house->lot_number }} </td>
                <td> {{ $house->zip }} </td>
            </tr>
            </tbody>
        </table>
    </div>
    @unless($house->banks->isEmpty())
        <hr>
        <h3>Banks</h3>
        <div class="col-md-12">
            @foreach($house->banks as $bank)
                <div class="col-md-4 thumbnail">
                    <p>{{ $bank->bank_name }}</p>
                    <p>{{ $bank->bank_address }}</p>
                    <p>{{ $bank->account_number }}</p>
                    <p>{{ $house->accountType }}</p>
                    <p>{{ $bank->selenium ? 'TRUE' : 'FALSE' }}</p>
                </div>
            @endforeach
        </div>
    @endunless

@endsection