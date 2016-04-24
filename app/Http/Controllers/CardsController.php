<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class CardsController extends Controller
{
    public function index($value='')
    {
    //  DB::table('cards')->insert(['title'=>'My Card']);
      $cards = DB::table('cards')->get();
      return view('cards.index',compact('cards'));
    }
}
