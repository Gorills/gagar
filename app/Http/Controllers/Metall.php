<?php

namespace App\Http\Controllers;


use App\Event;
use App\Stock;

use Illuminate\Http\Request;

class Metall extends Controller
{
    public function index() {

        return view('index', [


            'stocks' => Stock::with('children')->where('parent_id', 0)->get()

        ]);

    }
}
