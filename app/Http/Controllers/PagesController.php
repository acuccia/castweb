<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function home()
    {
        $properties = \App\Property::latest()->take(10)->get();
        return view('pages.home', compact('properties'));
    }

}
