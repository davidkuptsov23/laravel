<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Saving;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class SavingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $savings = Saving::paginate(15);

        return view('saving.index', compact('savings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('saving.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, null);

        Saving::create($request->all());

        Session::flash('flash_message', 'Saving successfully added!');

        return redirect('saving');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $saving = Saving::findOrFail($id);

        return view('saving.show', compact('saving'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $saving = Saving::findOrFail($id);

        return view('saving.edit', compact('saving'));
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

        $saving = Saving::findOrFail($id);
        $saving->update($request->all());

        Session::flash('flash_message', 'Saving successfully updated!');

        return redirect('saving');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Saving::destroy($id);

        Session::flash('flash_message', 'Saving successfully deleted!');

        return redirect('saving');
    }

}
