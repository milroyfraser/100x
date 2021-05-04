<?php

namespace App\Http\Controllers;

use App\Models\Offers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('home', [
            'offers' => Offers::all(),
        ]);
    }
}
