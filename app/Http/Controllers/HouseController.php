<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\House;
use App\Http\Requests\HouseRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HouseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $houses = House::paginate(15);

        return view('house.index', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $banks = Bank::lists('bank_name', 'id');
        return view('house.create', compact('banks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(HouseRequest $request)
    {
        $this->createHouse($request);
        session()->flash('flash_message', 'House successfully added!');

        return redirect('house');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $house = House::findOrFail($id);

        return view('house.show', compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $house = House::findOrFail($id);
        $banks = Bank::lists('bank_name', 'id');

        return view('house.edit', compact('house', 'banks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, HouseRequest $request)
    {

        $house = House::findOrFail($id);
        $house->update($request->all());

        $this->syncBanks($house, $request->input('bank_list'));

        session()->flash('flash_message', 'House successfully updated!');

        return redirect('house');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        House::destroy($id);
        return response()->json(['message' => 'House successfully deleted!']);
    }

    /**
     * Sync up the list of banks in the database.
     *
     * @param House $house
     * @param array $banks
     */
    protected function syncBanks(House $house, array $banks)
    {
        $house->banks()->sync($banks);
    }

    /**
     * Save a new House
     *
     * @param HouseRequest $request
     * @return mixed
     */
    protected function createHouse(HouseRequest $request)
    {
        $house = House::create($request->all());
        $this->syncBanks($house, $request->input('bank_list'));
        return $house;
    }

}
