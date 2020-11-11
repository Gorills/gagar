<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MetallController extends Controller
{
    public function metall($slug) {

        $share = Stosk::where('slug', $slug)->first();

        return view('share', [

            
            'shares' => $share->get()


        ]);

    }


}
