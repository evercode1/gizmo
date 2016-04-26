<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\GrooveStone;
use Illuminate\Support\Facades\Redirect;

class GrooveStoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('groove-stone.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groove-stone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'groove_stone_name' => 'required|unique:groove_stones|alpha_num|max:30',

        ]);

        $grooveStone = GrooveStone::create(['groove_stone_name' => $request->groove_stone_name]);
        $grooveStone->save();

        return Redirect::route('groove-stone.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grooveStone = GrooveStone::findOrFail($id);

        return view('groove-stone.show', compact('grooveStone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grooveStone = GrooveStone::findOrFail($id);

        return view('groove-stone.edit', compact('grooveStone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'groove_stone_name' => 'required|string|max:40|unique:groove_stones,groove_stone_name,' .$id

        ]);
        $grooveStone = GrooveStone::findOrFail($id);
        $grooveStone->update(['groove_stone_name' => $request->groove_stone_name]);


        return Redirect::route('groove-stone.show', ['grooveStone' => $grooveStone]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GrooveStone::destroy($id);

        return Redirect::route('groove-stone.index');
    }
}