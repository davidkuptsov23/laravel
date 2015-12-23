<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\BlockType;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class BlockTypeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $blocktypes = BlockType::paginate(15);

        return view('blocktype.index', compact('blocktypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('blocktype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['description' => 'required', ]);

        BlockType::create($request->all());

        Session::flash('flash_message', 'BlockTypes successfully added!');

        return redirect('blocktype');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $blocktype = BlockType::findOrFail($id);

        return view('blocktype.show', compact('blocktype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $blocktype = BlockType::findOrFail($id);

        return view('blocktype.edit', compact('blocktype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['description' => 'required', ]);

        $blocktype = BlockType::findOrFail($id);
        $blocktype->update($request->all());

        Session::flash('flash_message', 'BlockTypes successfully updated!');

        return redirect('blocktype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        BlockType::destroy($id);

        Session::flash('flash_message', 'BlockTypes successfully deleted!');

        return redirect('blocktype');
    }

}
