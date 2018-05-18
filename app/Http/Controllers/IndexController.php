<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Swapi;

class IndexController extends Controller
{
    public function get(Swapi $api)
    {
        return view('index', ['data' => $api::initialize()]);
    }
}
