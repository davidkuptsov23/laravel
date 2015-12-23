@extends('layouts.master')

@section('content')

    <h1>Bank</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Bank Name</th><th>Bank Address</th><th>Account Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $bank->id }}</td> <td> {{ $bank->bank_name }} </td><td> {{ $bank->bank_address }} </td><td> {{ $bank->account_number }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
    <hr>
    <h3>Account Type</h3>
    <div class="col-md-4">
        <p>{{ $bank->accountType->code }}</p>
        <p>{{ $bank->accountType->description }}</p>
    </div>
    <div class="clearfix"></div>
    @unless($bank->houses->isEmpty())
        <hr>
        <h3>Houses</h3>
        <div class="col-md-12">
            @foreach($bank->houses as $house)
                <div class="col-md-4 thumbnail">
                    <p>{{ $house->house_code }}</p>
                    <p>{{ $house->lot_number }}</p>
                    <p>{{ $house->zip }}</p>
                    <p>{{ $house->city }}</p>
                    <p>{{ $house->street }}</p>
                    <p>{{ $house->number }}</p>
                    <p>{{ $house->tax_number }}</p>
                    <p>{{ $house->built }}</p>
                    <p>{{ $house->date_from }}</p>
                    <p>{{ $house->date_to }}</p>
                </div>
            @endforeach
        </div>
    @endunless
@stop