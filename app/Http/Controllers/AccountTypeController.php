<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AccountType;
use App\Http\Requests\AccountTypeRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AccountTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $accounttypes = AccountType::paginate(15);

        return view('accounttype.index', compact('accounttypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('accounttype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(AccountTypeRequest $request)
    {
        AccountType::create($request->all());

        session()->flash('flash_message', 'Account type successfully added!');

        return redirect('accounttype');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $accounttype = AccountType::findOrFail($id);

        return view('accounttype.show', compact('accounttype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $accounttype = AccountType::findOrFail($id);

        return view('accounttype.edit', compact('accounttype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, AccountTypeRequest $request)
    {
        $accounttype = AccountType::findOrFail($id);
        $accounttype->update($request->all());

        session()->flash('flash_message', 'Account type successfully updated!');

        return redirect('accounttype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        AccountType::destroy($id);
        return response()->json(['message' => 'Account type successfully deleted!']);
    }

}
