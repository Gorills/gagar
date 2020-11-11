<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use App\Stock;
use App\Work;
use Illuminate\Http\Request;

class NewsController extends Controller
{



    public function index() {

        return view('news', [


            'news' =>Event::orderBy('created_at', 'desc')->get()

        ]);

    }


    public function news($slug) {

        $new = Event::where('slug', $slug)->first();

        return view('new', [

            'new' => $new,
            'news' => $new->get()


        ]);

    }
}
