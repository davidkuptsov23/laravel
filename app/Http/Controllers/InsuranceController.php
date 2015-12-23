<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Insurance;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class InsuranceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $insurances = Insurance::paginate(15);

        return view('insurance.index', compact('insurances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('insurance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, null);

        Insurance::create($request->all());

        Session::flash('flash_message', 'Insurance successfully added!');

        return redirect('insurance');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $insurance = Insurance::findOrFail($id);

        return view('insurance.show', compact('insurance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $insurance = Insurance::findOrFail($id);

        return view('insurance.edit', compact('insurance'));
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

        $insurance = Insurance::findOrFail($id);
        $insurance->update($request->all());

        Session::flash('flash_message', 'Insurance successfully updated!');

        return redirect('insurance');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Insurance::destroy($id);

        Session::flash('flash_message', 'Insurance successfully deleted!');

        return redirect('insurance');
    }

}
