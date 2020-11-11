<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function sitemap() {
        $news = Event::get();
        return view('sitemap')->with(compact('news'));
    }
}
