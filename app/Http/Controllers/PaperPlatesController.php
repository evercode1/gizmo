<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PaperPlates;
use Illuminate\Support\Facades\Redirect;

class PaperPlatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('paper-plates.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paper-plates.create');
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
            'paper_plates_name' => 'required|unique:paper_plates|alpha_num|max:30',

        ]);

        $paperPlates = PaperPlates::create(['paper_plates_name' => $request->paper_plates_name]);
        $paperPlates->save();

        return Redirect::route('paper-plates.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paperPlates = PaperPlates::findOrFail($id);

        return view('paper-plates.show', compact('paperPlates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paperPlates = PaperPlates::findOrFail($id);

        return view('paper-plates.edit', compact('paperPlates'));
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
            'paper_plates_name' => 'required|string|max:40|unique:paper_plates,paper_plates_name,' .$id

        ]);
        $paperPlates = PaperPlates::findOrFail($id);
        $paperPlates->update(['paper_plates_name' => $request->paper_plates_name]);


        return Redirect::route('paper-plates.show', ['paperPlates' => $paperPlates]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PaperPlates::destroy($id);

        return Redirect::route('paper-plates.index');
    }
}