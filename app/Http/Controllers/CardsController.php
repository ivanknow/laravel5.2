<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Card;
use DB;

class CardsController extends Controller
{
    public function index($value='')
    {
    //  DB::table('cards')->insert(['title'=>'My Card']);
      $cards =Card::all();
      return view('cards.index',compact('cards'));
    }

    /*public function show($id)
    {

      //return Card::find($id); //retorna um json
      $card = Card::find($id);
        return view('cards.show',compact('card'));
    }*/
    public function show(Card $card)
    {

        return view('cards.show',compact('card'));
    }

}
