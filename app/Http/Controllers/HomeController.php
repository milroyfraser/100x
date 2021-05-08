<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $offers = Offer::with('category')
            ->whereNotNull('published_at')
            ->when($request->filled('min-price'), function (Builder $query) use ($request) {
                $query->where('price', '>=', $request->get('min-price') * 100);
            })
            ->when($request->filled('max-price'), function (Builder $query) use ($request) {
                $query->where('price', '<=', $request->get('max-price') * 100);
            })
            ->when($request->filled('category'), function (Builder $query) use ($request) {
                $query->whereHas('category', function (Builder $query) use ($request) {
                    $query->where('slug', $request->get('category'));
                });
            })
            ->paginate(15);

        return view('home', [
            'offers' => $offers,
        ]);
    }
}
