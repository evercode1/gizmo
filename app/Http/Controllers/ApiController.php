<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class ApiController extends Controller
{

    public function grooveStoneData(){

        $result['data'] = DB::table('groove_stones')
                         ->select('id',
                                  'groove_stone_name',
                                  'created_at')
                         ->get();

        return json_encode($result);

    }

    public function grooveStoneVueData(){

        $grooveStones = DB::table('groove_stones')
                             ->select('id as Id',
                                      'groove_stone_name as Name',
                                      'created_at as Created')
                             ->get();

        return response()->json($grooveStones);

    }



    public function grooveHammerData(){

        $result['data'] = DB::table('groove_hammers')
                         ->select('id',
                                  'groove_hammer_name',
                                  'created_at')
                         ->get();

        return json_encode($result);

    }

    public function grooveHammerVueData(){

        $grooveHammers = DB::table('groove_hammers')
                             ->select('id as Id',
                                      'groove_hammer_name as Name',
                                      'created_at as Created')
                             ->get();

        return $grooveHammers;

    }



    public function paperPlatesData(){

        $result['data'] = DB::table('paper_plates')
                         ->select('id',
                                  'paper_plates_name',
                                  'created_at')
                         ->get();

        return json_encode($result);

    }

    public function paperPlatesVueData(){

        $paperPlates = DB::table('paper_plates')
                             ->select('id as Id',
                                      'paper_plates_name as Name',
                                      'created_at as Created')
                             ->get();

        return $paperPlates;

    }



    public function fruitBasketData(){

        $result['data'] = DB::table('fruit_baskets')
                         ->select('id',
                                  'fruit_basket_name',
                                  'created_at')
                         ->get();

        return json_encode($result);

    }

    public function fruitBasketVueData(){

        $fruitBaskets = DB::table('fruit_baskets')
                             ->select('id as Id',
                                      'fruit_basket_name as Name',
                                      'created_at as Created')
                             ->get();

        return $fruitBaskets;

    }



    public function orangeData(){

        $result['data'] = DB::table('oranges')
                         ->select('id',
                                  'orange_name',
                                  'created_at')
                         ->get();

        return json_encode($result);

    }

    public function orangeVueData(){

        $oranges = DB::table('oranges')
                             ->select('id as Id',
                                      'orange_name as Name',
                                      'created_at as Created')
                                      ->get();

        return $oranges;

    }


}
