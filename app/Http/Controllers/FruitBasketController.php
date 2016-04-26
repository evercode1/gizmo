<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\FruitBasket;
use Illuminate\Support\Facades\Redirect;

class FruitBasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('fruit-basket.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fruit-basket.create');
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
            'fruit_basket_name' => 'required|unique:fruit_baskets|alpha_num|max:30',

        ]);

        $fruitBasket = FruitBasket::create(['fruit_basket_name' => $request->fruit_basket_name]);
        $fruitBasket->save();

        return Redirect::route('fruit-basket.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fruitBasket = FruitBasket::findOrFail($id);

        return view('fruit-basket.show', compact('fruitBasket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fruitBasket = FruitBasket::findOrFail($id);

        return view('fruit-basket.edit', compact('fruitBasket'));
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
            'fruit_basket_name' => 'required|string|max:40|unique:fruit_baskets,fruit_basket_name,' .$id

        ]);
        $fruitBasket = FruitBasket::findOrFail($id);
        $fruitBasket->update(['fruit_basket_name' => $request->fruit_basket_name]);


        return Redirect::route('fruit-basket.show', ['fruitBasket' => $fruitBasket]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FruitBasket::destroy($id);

        return Redirect::route('fruit-basket.index');
    }
}