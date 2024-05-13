<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;


class PagesController extends Controller
{
    public function index()
    {

        $trains = Train::all();
        //dd($trains);
        return view('guests.welcome', compact('trains'));
    }
}
