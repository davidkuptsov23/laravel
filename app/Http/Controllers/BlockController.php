<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Block;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class BlockController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $blocks = Block::paginate(15);

        return view('block.index', compact('blocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('block.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, null);

        Block::create($request->all());

        Session::flash('flash_message', 'Block successfully added!');

        return redirect('block');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $block = Block::findOrFail($id);

        return view('block.show', compact('block'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $block = Block::findOrFail($id);

        return view('block.edit', compact('block'));
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

        $block = Block::findOrFail($id);
        $block->update($request->all());

        Session::flash('flash_message', 'Block successfully updated!');

        return redirect('block');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Block::destroy($id);

        Session::flash('flash_message', 'Block successfully deleted!');

        return redirect('block');
    }

}
