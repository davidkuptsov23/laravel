<?php

namespace App\Http\Controllers;

use App\AccountType;
use App\House;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bank;
use App\Http\Requests\BankRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BankController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $banks = Bank::paginate(15);

        return view('bank.index', compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $accounttypes = AccountType::lists('code', 'id');
        $houses = House::lists('house_code', 'id');
        return view('bank.create', compact('accounttypes', 'houses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(BankRequest $request)
    {
        $this->createBank($request);

        session()->flash('flash_message', 'Bank successfully added!');

        return redirect('bank');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $bank = Bank::findOrFail($id);

        return view('bank.show', compact('bank'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $bank = Bank::findOrFail($id);
        $accounttypes = AccountType::lists('code', 'id');
        $houses = House::lists('house_code', 'id');

        return view('bank.edit', compact('bank', 'accounttypes', 'houses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, BankRequest $request)
    {
        $bank = Bank::findOrFail($id);
        $bank->update($request->all());
        $this->syncHouses($bank, $request->input('house_list'));

        session()->flash('flash_message', 'Bank successfully updated!');

        return redirect('bank');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        Bank::destroy($id);
        return response()->json(['message' => 'Bank successfully deleted!']);
    }

    /**
     * Sync up the list of houses in the database.
     *
     * @param Bank $bank
     * @param array $houses
     */
    private function syncHouses(Bank $bank, array $houses)
    {
        $bank->houses()->sync($houses);
    }

    /**
     * Save a new Bank
     *
     * @param BankRequest $request
     * @return mixed
     */
    private function createBank(BankRequest $request)
    {
        $bank = Bank::create($request->all());
        $this->syncHouses($bank, $request->input('house_list'));
        return $bank;
    }

}
