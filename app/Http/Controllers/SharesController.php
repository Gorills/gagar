<?php

namespace App\Http\Controllers;
use App\Stock;
use Illuminate\Http\Request;

class SharesController extends Controller
{
    public function share($slug) {

        $stock = Stock::where('slug', $slug)->first();

        return view('share', [

            'stock' => $stock,
            'stocks' => $stock->get()


        ]);

    }
}
