<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PersonType;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class PersonTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $persontypes = PersonType::paginate(15);

        return view('persontype.index', compact('persontypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('persontype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, null);

        PersonType::create($request->all());

        Session::flash('flash_message', 'PersonType successfully added!');

        return redirect('persontype');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $persontype = PersonType::findOrFail($id);

        return view('persontype.show', compact('persontype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $persontype = PersonType::findOrFail($id);

        return view('persontype.edit', compact('persontype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, null);

        $persontype = PersonType::findOrFail($id);
        $persontype->update($request->all());

        Session::flash('flash_message', 'PersonType successfully updated!');

        return redirect('persontype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        PersonType::destroy($id);

        Session::flash('flash_message', 'PersonType successfully deleted!');

        return redirect('persontype');
    }

}
