<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Event;
use App\Http\Controllers\Controller;
use App\Product;
use App\Stock;
use App\Work;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dashboard
    public function dashboard() {

        return view('admin.dashboard', [

            'stocks' =>Stock::paginate(5),
            'events' =>Event::paginate(5),
            'works'  =>Work::paginate(5),
            'categories'  =>Category::paginate(5),
            'products'  =>Product::paginate(5)




        ]);

    }
}
