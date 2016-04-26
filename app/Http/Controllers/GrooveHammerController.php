<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\GrooveHammer;
use Illuminate\Support\Facades\Redirect;

class GrooveHammerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('groove-hammer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groove-hammer.create');
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
            'groove_hammer_name' => 'required|unique:groove_hammers|alpha_num|max:30',

        ]);

        $grooveHammer = GrooveHammer::create(['groove_hammer_name' => $request->groove_hammer_name]);
        $grooveHammer->save();

        return Redirect::route('groove-hammer.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grooveHammer = GrooveHammer::findOrFail($id);

        return view('groove-hammer.show', compact('grooveHammer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grooveHammer = GrooveHammer::findOrFail($id);

        return view('groove-hammer.edit', compact('grooveHammer'));
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
            'groove_hammer_name' => 'required|string|max:40|unique:groove_hammers,groove_hammer_name,' .$id

        ]);
        $grooveHammer = GrooveHammer::findOrFail($id);
        $grooveHammer->update(['groove_hammer_name' => $request->groove_hammer_name]);


        return Redirect::route('groove-hammer.show', ['grooveHammer' => $grooveHammer]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GrooveHammer::destroy($id);

        return Redirect::route('groove-hammer.index');
    }
}