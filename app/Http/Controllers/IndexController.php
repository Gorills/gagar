<?php


namespace App\Http\Controllers;
use App\Event;
use App\Stock;


use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        return view('index', [


            'stocks' =>Stock::orderBy('created_at', 'desc')->paginate(2),
            'news' =>Event::orderBy('created_at', 'desc')->paginate(2)
        ]);

    }
}
