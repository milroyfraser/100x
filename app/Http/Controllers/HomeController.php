<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $offers = Offer::with('category')->paginate(15);

        return view('home', [
            'offers' => $offers,
        ]);
    }
}
