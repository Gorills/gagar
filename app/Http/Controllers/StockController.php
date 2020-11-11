<?php

namespace App\Http\Controllers;
use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index() {

        return view('shares', [


            'stocks' =>Stock::orderBy('created_at', 'desc')->get()

        ]);

    }
}
