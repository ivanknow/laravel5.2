<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {

        $people = ['Filipe','Bruno','Lucas'];
         return view('welcome',['people'=>$people]);

    }

    public function about()
    {
      return view('pages.about');
    }
}
